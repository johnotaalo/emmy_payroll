<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
// error_reporting(E_ALL ^ E_DEPRECATED);
class MY_Controller extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->module('template');
		$this->load->module('upload');
		$this->load->module('employees');
	}

	function activation($activation, $item_id)
	{
		$activation_html = '';
		if ($activation == 1) {
			$activation_html = '<a class = "label label-success" href = "#" data-id = "'.$item_id.'" data-todo = "deactivate">Active</a>';
		}
		else
		{
			$activation_html = '<a class = "label label-danger" href = "#" data-id = "'.$item_id.'" data-todo = "activate">Not Active</a>';
		}

		return $activation_html;
	}

	function load_map()
	{
		$this->load->view('maps/google_map');
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
		$this->load->view($content_view, $data);
	}

	function getdata($type)
	{
		
	}
}