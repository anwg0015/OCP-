<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model
{
	public function view_student()
	{
		$this->db->select('*')->from('tbl_student');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function insert_student()
	{

		$data = array(
			
			'std_name' => $this->input->post('sname'),
			'std_idno'=>$this->input->post('sidno'),
			'std_dob'=>$this->input->post('sdate'),
			'std_gender' => 'male',
			'std_level' => $this->input->post('slevel'),
			'std_address' =>$this->input->post('saddress'),
			'std_email' => $this->input->post('semail'),
			'std_phone' => $this->input->post('sphone'),
			
			'std_programme' => $this->input->post('sprogramme'),
			'std_batch'=> $this ->input->post('sbatch'),
			'std_semester'=>$this->input->post('ssem'),
			'std_password'=> $this->input->post('spassword'),
			'std_photo'=> $this->input->post('sphoto'),
			'std_status'=> $this->input->post('status'),
			
			);
		$this->db->insert('tbl_student',$data);
	}

	public function all_student_by_batch($id)
	{
		$this->db->select('*')->from('tbl_student')->where('std_batch',$id);
		$query = $this->db->get();
		return $query->result();
	}

public function check_student_by_semester($semester_id,$student_id)

		{

       $sql = "SELECT * FROM tbl_student WHERE semester_id='$semester_id' AND student_id='$student_id'";  

        $query = $this->db->query($sql);

        return $query->result_array();

		}

  

 
}

