<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	

public function index()
	{
		$this->load->model('student_model','',TRUE);
		$data = array(
			'allstudent' => $this->student_model->view_student(),
			'title' => 'View student',
			'page' => 'viewstudent.php'
			);
		$this->load->view('main.php', $data);
		
	}

	
	
public function add()
	{
		$this->load->helper('form');
		$this->load->model("programme_model",'',TRUE);
		$this->load->model('batch_model','',TRUE);
		$data=array(
			'allprog' => $this->programme_model->view_programme(),
			'allbatch'=>$this->batch_model->batch_by_id(),
			'title' => 'Add Student'
			);
		$data['page'] = 'addstudent.php';
		$this->load->helper('form');
		$this->load->view('main.php', $data);

	}

	public function insert()
	{
		$this->load->model('student_model','',TRUE);
		$this->student_model->insert_student();

	}
	public function student_by_batch($id,$batch_id='')
	{
		
		$this->load->model('batch_model','',TRUE);
		$this->load->model('student_model','',TRUE);
		$data=array(
		'prog_id'=>$id,
		'batcid' => $batch_id,
		'allbatch' => $this->batch_model->student_by_batch($id,$batch_id),
		'allstudent' => $this->student_model->all_student_by_batch($batch_id),
		'title' =>'View Student',
		'page' => 'viewstudent.php'
		);
		$this->load->view('main.php', $data);
	}

	

	public function student_by_semester(){

		$this->load->model('student_model','',TRUE);
		$data=array(
			//'allstudent'=>$this->student_model->all_student_by_batch($batch_id),
              'page'=>"student_by_semester.php"


			);
		$this->load->view('main.php',$data);
	}
	}

