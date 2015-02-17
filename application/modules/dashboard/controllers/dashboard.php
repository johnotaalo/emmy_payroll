<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title'] = 'Dashboard';
		$data['content_view'] = 'dashboard/home';
		$this->template->call_admin_template($data);
	}
}