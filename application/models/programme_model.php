<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programme_model extends CI_Model {

	public function view_programme()
	{
		$this->db->select('*')->from('tbl_programme');
		$query=$this->db->get();
		return $query->result();
	}

	public function insert_programme()
	{
		$data=array(
			'prog_name' => $this->input->post('pname'),
			'prog_type' => $this->input->post('ptype'),
			'prog_status' => $this->input->post('pstatus')
			);
		$this->db->insert('tbl_programme',$data);
	}

	public function programme_by_id($id)
	{
		$this->db->select('*')->from('tbl_programme')->where('prog_id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}
	public function prog_by_email($email)
	{
		$this->db->select('*')->from('tbl_teacher')->where('teac_email',$email);
		$query=$this->db->get();
		$res = $query->row_array();
		return $res['teac_id'];

	}

	public function prog_by_teac($id)
	{
		$this->db->select('*')->from('tbl_hod')->where('hod_teac_id',$id);

		
		$query = $this->db->get();
		$res = $query->row_array();
		return $res['hod_prog_id'];
	}

	

}

/* End of file programme_model.php */
/* Location: ./application/models/programme_model.php */