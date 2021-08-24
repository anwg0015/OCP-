<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch_model extends CI_Model {

	public function batch_by_prog($id)
	{
		$this->db->select('*')->from('tbl_batch')->where('programme_id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function batch_by_id()
	{
		$this->db->select('*')->from('tbl_batch');
		$query = $this->db->get();
		return $query->result();
	}


	public function insert()
	{
		$data = array(
			'batch_year' => $this->input->post('byear'),
			'programme_id' => $this->input->post('bid'),
			'batch_status' => $this->input->post('bstatus')
			);
		$this->db->insert('tbl_batch',$data);
	}
	public function student_by_batch($id,$batch_id)
{
$this->db->select('*')->from('tbl_batch')->where('programme_id',$id);
$query=$this->db->get();
return $query->result();
}

public function batch_by_prog_name($id)
{
 
$this->db->select('a.*,b.*');
$this->db->from('tbl_batch a');
$this->db->join('tbl_programme b','b.prog_id=a.programme_id','full join');
$this->db->where('a.batch_id', $id);
$query=$this->db->get();
return $query->result();
}
}

/* End of file batch_model.php */
/* Location: ./application/models/batch_model.php */