<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Template extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function call_admin_template($data=NULL)
	{
		$data['numbers'] = $this->numbers();
		$this->load->view('admin_template', $data);
	}

	function test_modal()
	{
		$this->load->view('modal/modals');
	}

	function numbers()
	{
		$numbers = array();
		$tables = array('employees', 'branches', 'positions');
		foreach ($tables as $key => $value) {
			$query = $this->db->query('SELECT COUNT(is_deleted) as counter FROM '.$value .' WHERE is_deleted = 0');
			$result = $query->result_array();
			$numbers[$value] = $result[0]['counter'];
		}
		return $numbers;
	}
}