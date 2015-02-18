<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->module('template');
		$this->load->module('upload');
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
}