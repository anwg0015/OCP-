<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignment_model extends CI_Model {

public function insert_assignment($file_name)
	{
		$data = array(
			'assignment_name'=>$this->input->post('assign_name'),
			'assignment_sub' => $this->input->post('asubject'),
			'assignment_createdate' => $this->input->post('cdate'),
			'assignment_submissiondate' => $this->input->post('sdate'),
			'assignment_file'=> $file_name
			);
		$this->db->insert('tbl_assignment',$data);
	}
	

	public function assignment_by_subj($sub_id)
{
 
$this->db->select('a.*,b.*');
$this->db->from('tbl_assignment a');
$this->db->join('tbl_course b','a.assignment_sub=b.course_id','full join');
$this->db->where('b.course_id', $sub_id);

$query=$this->db->get();
return $query->result();
}

public function get_assignment_info($id)

	{
		$this->db->select('*')->from('tbl_assignment')->where('assignment_id',$id);
		$query = $this->db->get();
		return $query->result();
}

public function update_assignment($file_name=''){

 $data = array('assignment_name' => $this->input->post('assign_name'),

		'assignment_sub' => $this->input->post('asubject'),

			'assignment_createdate' => $this->input->post('cdate'),

			'assignment_submissiondate' => $this->input->post('sdate'),

			'assignment_file'=>$file_name
			);
 		$this->db->where('asssignment_id',$this->input->post('id'));

                $this->db->update('tbl_assignment',$data);


}
}
/* End of file batch_model.php */
/* Location: ./application/models/batch_model.php */