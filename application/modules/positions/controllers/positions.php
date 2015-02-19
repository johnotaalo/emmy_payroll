<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Positions extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_positions');
	}

	function getdata($type)
	{
		$data = array();
		switch ($type) {
			case 'position_table':
				$data['position_table'] = $this->createposition('table');
				break;
			
			default:
				# code...
				break;
		}

		return $data;
	}
	function addposition()
	{
		$message = array();
		$upload = $this->upload->upload('position_cover', 'image', 'uploads/images/covers/positions');

		// echo "<pre>";print_r($upload);die;
		if ($upload['type'] == 'Success') {
			$_POST['position_cover'] = $upload['file_path'];

			$addition = $this->m_positions->addposition();

			if ($addition) {
				$message['type'] = 'success';
				$message['message'] = 'Suceessfully Added: ' . $this->input->post('position_name') .' to your positions';
			}
			else
			{
				$message['type'] = 'error';
				$message['message'] ='There was an error during insertion. Try again';
			}
		}
		else
		{
			$message['type'] = 'error';
			$message['message'] = 'Could not upload the cover image. Try again';
		}

		return $message;
	}

	function createposition($type)
	{
		$return_data = '';
		$positions = $this->m_positions->getpositions();
		$counter = 0;
		switch ($type) {
			case 'table':
				foreach ($positions as $key => $value) {
					$counter++;
					$return_data .= '<tr>
					<td>'.$counter.'</td>
					<td>'.$value['position_name'].'</td>
					<td><a href = "#" data-id = "'.$value['position_id'].'" class = "view_position" onclick = "getpositiondetails(this);">View Position</a></td>
					<td>'.$this->activation($value['is_active'], $value['position_id']).'</td>
					</tr>';
				}
				break;
			
			default:
				# code...
				break;
		}
		return $return_data;
	}

	function get_position_by_id($type, $position_id)
	{
		$positions = $this->m_positions->get_position_by_id($position_id);

		switch ($type) {
			case 'ajax':
				echo json_encode($positions[0]);
				break;
			
			case 'raw':
				return $positions[0];
				break;
			default:
				break;
		}
	}

	function update($type, $position_id, $to_do = NULL)
	{
		$return_data = $data_message = $action = $extra_message = '';
		$message = array();
		switch ($type) {
			case 'activation':
				switch ($to_do) {
					case 'activate':
						$data = 1;
						$action = 'Activated';
						break;
					case 'deactivate':
						$data = 0;
						$action = 'Deactivated';
						break;
					default:
						# code...
						break;
				}

				$return_data = $this->m_positions->activation($position_id, $data);
				break;
			case 'delete':
				$return_data = $this->m_positions->delete($position_id);
				$action = 'Deleted';
				$extra_message = 'You can undo this by going to <a href = "#">Trash</a>';
				break;
			default:
				# code...
				break;
		}

		if ($return_data) {
			$message['type'] = 'success';
			$message['message'] = 'Successfully ' . $action . ' Position';
		}
		else
		{
			$message['type'] = 'error';
			$message['message'] = 'Position could not be' . $action . '. Try again later';
		}
		$message['extra'] = $extra_message;
		echo json_encode($message);
	}
	/*ajax functions to return data*/
	function ajax_addposition()
	{
		$message = $this->addposition();

		echo json_encode($message);
	}
}