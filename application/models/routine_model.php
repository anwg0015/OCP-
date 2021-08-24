<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routine_model extends CI_Model {

	public function view_routine($sem_id)
	{
		$this->db->select('*')->from('tbl_routine')->where('routine_sem_id',$sem_id);
		$query = $this->db->get();
		if($query->num_rows() != 0)
		{
			return $query->row_array();
		}else {
			return FALSE;
		}
	}

	public function insert_routine()
	{
		$data=array(
			'routine_sem_id' => $this->input->post('sem_id'),
			'routine_desc' => $this->input->post('routine')
			);
		$this->db->insert('tbl_routine',$data);
	}

	public function edit_routine($id)
	{
		$this->db->select('*')->from('tbl_routine')->where('routine_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_routine($id)
	{
		$data = array(
			'routine_desc' => $this->input->post('routine')
			);
		$this->db->where('routine_id',$id);
		$this->db->update('tbl_routine',$data);
	}

}

/* End of file routine_model.php */
/* Location: ./application/models/routine_model.php */
?>