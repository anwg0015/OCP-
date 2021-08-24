<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester extends CI_Controller 
{

public function sem_by_prog_batch($prog_id,$batch_id)
	{
		$this->load->model('batch_model','',TRUE);
		$this->load->model('semester_model','',TRUE);
		$data=array(
			'progid' => $prog_id,
		'batchd' => $batch_id,	
		'allbatch' => $this->batch_model->batch_by_prog($prog_id),
		'allsem' => $this->semester_model->allsem_by_prog_batch($prog_id,$batch_id),
		'title' =>'View Semester',
		'page' => 'viewsemester.php'
		);
		$this->load->view('main.php', $data);
	}

	public function sem_from_viewsem()
	{
		$batch_id=$this->input->post('programme');
		$prog_id=$this->input->post('progid');
		$this->load->model('batch_model','',TRUE);
		$this->load->model('semester_model','',TRUE);
		$data=array(
			'progid' => $prog_id,
		'batchd' => $batch_id,	
		'allbatch' => $this->batch_model->batch_by_prog($prog_id),
		'allsem' => $this->semester_model->allsem_by_prog_batch($prog_id,$batch_id),
		'title' =>'View Semester',
		'page' => 'viewsemester.php'
		);
		$this->load->view('main.php', $data);
		
	}


	public function add($progid,$batchid)
	{
		$prog_id=$progid;
		$batch_id=$batchid;
		$this->load->model('batch_model','',TRUE);
		$data=array(
			'allbatch' => $this->batch_model->batch_by_prog($prog_id),
			'progid' => $prog_id,
			'title' =>'ADD Semester',
			'page' => 'addsemester.php'
			);
		$this->load->view('main', $data);
	}

	public function insert_sem()
	{
		$this->load->model('semester_model','',TRUE);
		$this->semester_model->insert_semester();



	}

}

/* End of file semester.php */
/* Location: ./application/controllers/semester.php */