<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Upload extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		echo "Upload Page";die;
	}
	function upload($file, $file_type, $upload_path)
	{
		// echo $file;die;
		$message = array();
		$uploadable = TRUE;
		if ($file_type == 'image') {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['upload_path'] = './'.$upload_path;
		}
		else if($file_type == 'document'){
			$config['allowed_types'] = 'pdf|xlsx|xls|doc|docx';
		}
		else
		{
			$uploadable = FALSE;
		}
		$config['upload_path'] = './'.$upload_path;
		$this->load->library('upload', $config);

		if ($uploadable) {
			if ($file) {
				if(!$this->upload->do_upload($file))
				{
					$message['type'] = 'Error';
					$message['error'] = $this->upload->display_errors();
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$file_name = $data['upload_data']['file_name'];
					$message['type'] = 'Success';
					$message['file_path'] = base_url() . $upload_path .'/'.$file_name;
				}
			}
			else
			{
				$message['type'] = 'Error';
				$message['message'] = 'No file to upload';
			}
		}
		else
		{
			$message['type'] = 'Error';
			$messgae['message'] = 'An unexpected error occured! Please try again later';
		}

		return $message;
	}
}