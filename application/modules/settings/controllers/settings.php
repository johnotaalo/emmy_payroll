<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Settings extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_settings');
		$this->load->module('positions');
		$this->load->module('user');
		$this->load->module('branches');
	}

	function systemsettings()
	{
		$data['title'] = 'System Settings';
		$data['content_view'] = 'settings/v_settings';
		$this->template->call_admin_template($data);
	}

	function getdata($type)
	{
		
	}
}