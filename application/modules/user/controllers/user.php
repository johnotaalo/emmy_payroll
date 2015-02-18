<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class User extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->login();
	}
	
	function login()
	{
		$this->load->view('user/login_v');
	}
	function getdata($type)
	{
	}
}