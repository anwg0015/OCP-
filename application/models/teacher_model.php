<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher_model extends CI_Model
{
	public function view_teacher()
	{
		$this->db->select('*')->from('tbl_teacher');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_teacher()
	{
		$data = array(
			'teac_fname' => $this->input->post('t_fname'),
			'teac_mname' => $this->input->post('t_mname'),
			'teac_lname' => $this->input->post('t_lname'),
			'teac_dob' => $this->input->post('t_dob'),
			'teac_sex' => $this->input->post('t_sex'),
			'teac_address' => $this->input->post('t_address'),
			'teac_phone' => $this->input->post('t_phone'),
			'teac_mobile' => $this->input->post('t_mobile'),
			'teac_email' => $this->input->post('t_email'),
			'teac_password' => $this->input->post('t_password'),
			'teac_status' => $this->input->post('t_status')
		);
		$this->db->insert('tbl_teacher',$data);
	}

	public function delete_teacher($id)
	{
		$this->db->where('teac_id',$id);
		$this->db->delete('tbl_teacher');
	}
}