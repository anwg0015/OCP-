<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch extends CI_Controller {

	public function index()
	{
		$this->load->model('programme_model','',TRUE);
		$data=array(
			'allprogramme' => $this->programme_model->view_programme(),
			'title' => 'View Batch',
			'page' => 'viewbatch.php'
			);
		$this->load->view('main.php',$data);
	}

	public function add()
	{
		$this->load->model('programme_model','',TRUE);
		$data = array(
			'allprog' => $this->programme_model->view_programme(),
			'title' => 'Add Batch',
			'page' => 'addbatch.php'
			);
		$this->load->view('main.php', $data);
	}

	public function insert()
	{
		$id = $this->input->post('bprog');
		
		$this->load->model('batch_model','',TRUE);
		$this->batch_model->insert();
	}

	public function batch_select()
	{
		$id=$this->input->post('programme');
		$this->batch_by_id($id);
	}

	public function batch_by_id($id)
	{
		$this->load->model('programme_model','',TRUE);
		$this->load->model('batch_model','',TRUE);
		$data = array(
			'progid' => $this->programme_model->programme_by_id($id),
			'allbatch' => $this->batch_model->batch_by_prog($id),
			'allprogramme' => $this->programme_model->view_programme(),
			'title' => 'View Batch',
			'page' => 'viewbatch.php',
			'show' => TRUE 
			);
		$this->load->view('main.php', $data);
	}

public function edit_batch($id)
{

	$this->load->model('batch_model','',TRUE);
$data=array(
	'allbatch'=>$this->batch_model->batch_by_prog_name($id),
	'title'=>"Edit Batch",
	 'page'=>"edit_batch.php"
	 );
$this->load->view('main.php',$data);
}


}

/* End of file batch.php */
/* Location: ./application/controllers/batch.php */