<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_model extends CI_Model
{
	public function display_course()
	{
		$this->db->select('*')->from('tbl_course');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_course()
	{
		$data = array(
			'course_code' => $this->input->post('ccode'),
			'course_name' => $this->input->post('cname'),
			'course_level' => $this->input->post('clevel'),
			'course_faculty' =>$this->input->post('cfaculty'),
			'course_programme' => $this->input->post('cprogramme'),
			'course_semester' => $this->input->post('csem'),
			'course_description' => $this->input->post('cdesc'),
			);
		$this->db->insert('tbl_course',$data);
	}
	public function update_course($id)
	{
		$data=array(

			'course_code' => $this->input->post('ccode'),
			'course_name' => $this->input->post('cname'),
			'course_level' => $this->input->post('clevel'),
			'course_faculty' =>$this->input->post('cfaculty'),
			'course_programme' => $this->input->post('cprogramme'),
			'course_semester' => $this->input->post('csem'),
			'course_description' => $this->input->post('cdesc'),

);
		$this->db->where('course_id', $id);
		$this->db->update('tbl_course', $data); 
	}
	public function get_course_id($id)
	{

	$this->db->select('*')->from('tbl_course')->where('course_id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_course($id)
	{
	 $sql="delete from tbl_course where course_id='$id'";

                $this->db->query($sql);
	
	
	 
	}
}
