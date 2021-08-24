<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operation_model extends CI_Model {

	public function  insert()
	{
		$data = array(
		
		'operation_name'=>$this->input->post('op_name'),
		
			);
		$this->db->insert('tbl_operation',$data);
	}
	
	public function operation_by_batch_id($batch_id)
	{
	$this->db->select('a.*,b.*');
$this->db->from('tbl_operation a');
$this->db->join('tbl_batch b','a.op_batchid=b.batch_id','full join');
$this->db->where('a.op_batchid', $batch_id);
$query=$this->db->get();
return $query->result();
}
		
	

	public function update($id)
	{
		$data=array(

			'operation_name'=>$this->input->post('op_name'),
			);
		$this->db->where('operation_id',$this->input->post('id'));

                $this->db->update('tbl_operation',$data);
	}
}