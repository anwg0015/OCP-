<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_model extends CI_Model {

	public function view_activity()
	{
		$this->db->select('*')->from('tbl_activity')->order_by('activity_id','DESC');
		$query = $this->db->get();
		return $query->result();

	}

	public function insert_activity()
	{
		$data = array(
			'activity_name' => $this->input->post('ac_name'), 
			'planned_date' => $this->input->post('ac_date'),
			'time' => $this->input->post('ac_time'),
			'expected_participant' => $this->input->post('ac_num'),
			'venue' => $this->input->post('ac_venue'),
			'status' => $this->input->post('ac_status')
		);
		$this->db->insert('tbl_activity',$data);
	}

}

/* End of file activity_model.php */
/* Location: ./application/models/activity_model.php */




?>