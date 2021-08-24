<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notes_model extends CI_Model {
public function insert_notes($file_name)
	{
		$data = array(
			'chap_name'=>$this->input->post('chap_name'),
			'notes_file'=> $file_name,
			'status' => $this->input->post('nstatus'),
			);
		$this->db->insert('tbl_notes',$data);
	}

public function notes_by_subj($course_id)
{
$this->db->select('a.*,b.*');
$this->db->from('tbl_notes a');
$this->db->join('tbl_course b','a.course_id=b.course_id','full join');
$this->db->where('b.course_id', $course_id);

$query=$this->db->get();
return $query->result();
}
}