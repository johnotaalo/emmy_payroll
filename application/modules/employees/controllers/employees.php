<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Employees extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_employee');
	}
	function employee()
	{
		$data['title'] = 'Employees';
		$data['content_view'] = 'employees/view_employees';
		$this->template->call_admin_template($data);
	}

	function employee_details($type = 'all')
	{
		echo $type;
	}

	function registration()
	{
		echo "<pre>";print_r($this->input->post());die;
	}
}