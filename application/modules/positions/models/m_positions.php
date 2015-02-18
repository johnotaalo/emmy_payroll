<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class M_positions extends MY_Model
{
	function __contruct()
	{
		parent::__contruct();
	}

	function addposition()
	{
		$insert_data = array();
		foreach ($this->input->post() as $key => $value) {
			if ($key != 'action') {
				$insert_data[$key] = $value;
			}
		}
		// echo "<pre>";print($insert_data);die;
		$query = $this->db->insert('positions', $insert_data);

		if ($query) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function getpositions()
	{
		$query = $this->db->query("SELECT * FROM positions");
		$result = $query->result_array();

		return $result;
	}

	function get_position_by_id($position_id)
	{
		$query = $this->db->query("SELECT * FROM positions WHERE position_id = " . $position_id);
		$result = $query->result_array();

		return $result;
	}
}