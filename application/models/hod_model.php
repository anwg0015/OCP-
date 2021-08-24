<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hod_model extends CI_Model
{
	public function view_hod()
	{
		$this->db->select('*')->from('tbl_teacher')->where('teac_role','hod');
		$query = $this->db->get();
		return $query->result();
	}

	public function add_hod()
	{
		$progid = $this->input->post('progid');
		$teacid = $this->input->post('teacherid');
		$data = array(
			'teac_role' => 'HOD'
			);
		$this->db->where('teac_id', $teacid);
		$this->db->update('tbl_teacher', $data);
		$data = array(
			'hod_teac_id' => $teacid,
			'hod_prog_id' => $progid
			);
		$this->db->insert('tbl_hod',$data);

		echo "teacher updated";
	}
}