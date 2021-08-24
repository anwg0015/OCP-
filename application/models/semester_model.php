 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester_model extends CI_Model {

	public function allsem_by_prog_batch($pid,$bid)
	{
		$this->db->select('*')->from('tbl_semester')->where('sem_prog_id',$pid)->where('sem_batch_id',$bid)->order_by('sem_name');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_semester()
	{
		$sname = $this->input->post('sname');
		$syear = $this->input->post('sfall');
		$sstatus = $this->input->post('sstatus');
		$sem_batch_id = $this->input->post('bid');
		$prog_id = $this->input->post('progid');

		$data=array(
			'sem_name' => $sname,
			'sem_fall_year' => $syear,
			'sem_status' => $sstatus,
			'sem_prog_id' => $prog_id,
			'sem_batch_id' => $sem_batch_id
			);
		$this->db->insert('tbl_semester', $data);
	}

	

}

/* End of file semester_model.php */
/* Location: ./application/models/semester_model.php */