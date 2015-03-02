<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Branches extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_branches');
	}

	function getdata($type)
	{
		$data = array();
		switch ($type) {
			case 'branches_table':
				$data['branches_table'] = $this->createbranches('table');
				break;
			
			default:
				# code...
				break;
		}

		return $data;
	}

	function createbranches($type)
	{
		$branches = $this->m_branches->get_all_branches($type);
		$branches_output = '';
		switch ($type) {
			case 'table':
				$branches_output .= '<table class = "table table-hover table-bordered">';
				$branches_output .= '<thead><tr><th>#</th><th>Branch Name</th><th>Location</th><th>Activity</th><th>View</th><th>Action</th></tr></thead>';
				$branches_output .= '<tbody>';
				$counter = 1;
				foreach ($branches as $key => $value) {
					$branches_output .= '<tr>';
					$branches_output .= '<td>'.$counter.'</td>';
					$branches_output .= '<td>'.$value['branch_name'].'</td>';
					$branches_output .= '<td>'.$value['branch_location'].'</td>';
					$branches_output .= '<td>'.$this->activation($value['is_active'], $value['branch_id']).'</td>';
					$branches_output .= '<td><a href = "#" data-id = "'.$value['branch_id'].'" class = "view_branch" onclick = "getbranchdetails(this);">View Branch Details</a></td>';
					$branches_output .= '<td>
										<a href = "#" edit-id = "'.$value['branch_id'].'" class = "edit_branch" onclick = "editbranch(this);" data-content = "branches_branchesadd" data-title = "Edit Branch"><i class = "ion ion-edit"></i>
										&nbsp;
										<a href = "#" delete-id = "'.$value['branch_id'].'" class = "delete_branch" onclick = "delete_branch(this);"><i class = "ion ion-trash-a"></i></a>
										</td>';
					$branches_output .= '</tr>';
					$counter++;
				}
				$branches_output .= '</tbody>';
				$branches_output .= '</table>';
				break;
			
			default:
				# code...
				break;
		}

		return $branches_output;
	}

	function ajax_addbranches()
	{
		$message = $this->addbranch();

		echo json_encode($message);
	}

	function addbranch()
	{
		$message = array();
		$addition = $this->m_branches->addbranch();

		if ($addition) {
			$message['type'] = 'success';
			$message['message'] = 'Successfully added a Branch to the system';
		}
		else
		{
			$message['type'] = 'error';
			$message['message'] = 'Could not add Branch';
		}

		return $message;
	}

	function get_branch_by_id($type, $branch_id)
	{
		$branches = $this->m_branches->get_branch_by_id($branch_id);
		switch ($type) {
			case 'ajax':
				echo json_encode($branches);
				break;
			case 'raw':
				return $branches;
				break;
			default:
				# code...
				break;
		}
	}

	function update($type, $branch_id)
	{
		$return_data = FALSE;
		$message = array();
		$action = '';
		$extra_message = '';
		switch ($type) {
			case 'update':
				$return_data = $this->m_branches->update($branch_id);
				$action = 'Updated';
				break;
			case 'delete':
				$return_data = $this->m_branches->delete($branch_id);
				$action = 'Deleted';
				break;
			
			default:
				# code...
				break;
		}

		if ($return_data) {
			$message['type'] = 'success';
			$message['message'] = 'Successfully ' . $action . ' Branch';
		}
		else
		{
			$message['type'] = 'error';
			$message['message'] = 'Branch could not be' . $action . '. Try again later';
		}
		$message['extra'] = $extra_message;
		echo json_encode($message);
	}
}