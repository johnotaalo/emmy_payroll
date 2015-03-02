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
		$query = $this->db->query("SELECT * FROM positions WHERE is_deleted = 0");
		$result = $query->result_array();

		return $result;
	}

	function get_position_by_id($position_id)
	{
		$query = $this->db->query("SELECT * FROM positions WHERE position_id = " . $position_id);
		$result = $query->result_array();

		return $result;
	}

	function activation($position_id, $data)
	{
		$query = $this->db->query('UPDATE positions SET is_active = ' . $data . ' WHERE position_id = ' . $position_id);

		if ($query) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function delete($position_id)
	{
		$query = $this->db->query('UPDATE positions SET is_deleted = 1 WHERE position_id = ' . $position_id);

		if ($query) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function update($position_id)
	{
		$update_data = array();
		foreach ($this->input->post() as $key => $value) {
			if ($value != NULL && $key != 'action') {
				$update_data[$key] = $value;
			}
		}
		$this->db->where('position_id', $position_id);
		$query = $this->db->update('positions', $update_data);

		if ($query) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}