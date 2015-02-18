<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Settings extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_settings');
		$this->load->module('positions');
		$this->load->module('user');
	}

	function systemsettings()
	{
		$data['title'] = 'System Settings';
		$data['content_view'] = 'settings/v_settings';
		$this->template->call_admin_template($data);
	}

	function loadview($content_view, $type = NULL)
	{
		$content_array = explode('_', $content_view);
		$content_view = $content_array[0] . '/' . $content_array[1];
		if ($content_array[0] == 'settings') {
			$data = $this->getdata($type);
		}
		else
		{
			$data = $this->$content_array[0]->getdata($type);
		}
		
		// echo "<pre>";print_r($data);die;
		echo $this->load->view($content_view, $data);
	}

	function getdata($type)
	{
	}
}