<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class M_branches extends MY_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_all_branches()
	{
		$query = $this->db->query("SELECT * FROM branches WHERE is_deleted = 0");

		$result = $query->result_array();

		return $result;
	}

	function addbranch()
	{
		$insert_data = array();
		foreach ($this->input->post() as $key => $value) {
			if ($key != 'action') {
				$insert_data[$key] = $value;
			}
		}

		$query = $this->db->insert('branches', $insert_data);

		if ($query) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function get_branch_by_id($branch_id)
	{
		$query = $this->db->query("SELECT * FROM branches WHERE branch_id = {$branch_id} AND is_deleted = 0");

		$result = $query->result_array();

		return $result[0];
	}

	function update($branch_id)
	{
		$update_data = array();
		foreach ($this->input->post() as $key => $value) {
			if ($value != NULL && $key != 'action') {
				$update_data[$key] = $value;
			}
		}
		$this->db->where('branch_id', $branch_id);
		$query = $this->db->update('branches', $update_data);

		if ($query) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function delete($branch_id)
	{
		$update_data['is_deleted'] = 1;
		$this->db->where('branch_id', $branch_id);
		$query = $this->db->update('branches', $update_data);

		if ($query) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}