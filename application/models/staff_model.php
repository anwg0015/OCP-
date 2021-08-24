<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {
	public function view_staff()
	{
		$this->db->select('*')->from('tbl_staff');
		$query=$this->db->get();
		return $query->result();
	}

	public function insert_staff()
	{
		$data = array(
			'staff_fname' => $this->input->post('fname'), 
			'staff_mname' => $this->input->post('mname'),
			'staff_lname' => $this->input->post('lname'),
			'staff_sex' => $this->input->post('sex'),
			'staff_address' => $this->input->post('address'),
			'staff_phone' => $this->input->post('phone'),
			'staff_status' => $this->input->post('status'),
			'staff_email' => $this->input->post('email'),
			'staff_password' => $this->input->post('password')
			);
		$this->db->insert('tbl_staff', $data);
	}

	public function delete_staff($id)
	{
		$this->db->where('staff_id',$id);
		$this->db->delete('tbl_staff');
	}

	

}

/* End of file staff_model.php */
/* Location: ./application/models/staff_model.php */