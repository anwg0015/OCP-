<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hod extends CI_Controller {

	public function index()
	{
		$this->load->model('hod_model','',TRUE);
		$data = array(
			'allhod' => $this->hod_model->view_hod(),
			'title' => 'View HOD',
			'page' => 'viewhod.php'
			);
		$this->load->view('main.php',$data);
	}

	public function add()
	{
		$this->load->model('teacher_model','',TRUE);
		$this->load->model('programme_model','',TRUE);
		$data = array(
			'allteacher' => $this->teacher_model->view_teacher(),
			'allprog' => $this->programme_model->view_programme(),
			'title' => 'ADD HOD',
			'page' => 'addhod.php',
		);
		$this->load->view('main', $data);
	}

	public function insert()
	{
		$teacid = $this->input->post('teacherid');
		$this->load->model('hod_model','',TRUE);
		$this->hod_model->add_hod();
		
	}


}