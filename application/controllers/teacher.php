<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function index()
	{
		$this->load->model('teacher_model','',TRUE);
		$data = array(
			'allteacher' => $this->teacher_model->view_teacher(),
			'title' => 'View teacher',
			'page' => 'viewteacher.php'
			);
		$this->load->view('main.php',$data);

	}
	public function add()
	{
		$data= array(
			'title' => 'Add teacher',		
		'page'=>'addteacher.php'
	);
	
	$this->load->view('main',$data);
	}

	public function insert()
	{
		$this->load->model('teacher_model','',TRUE);
		$this->teacher_model->insert_teacher();
		$data= array(
			'title' => 'Add teacher',		
		'page'=>'addteacher.php',
		'msg' => 'New Teacher added Successfully !!'
			);
		$this->load->view('main',$data);
	}

	public function delete($id)
	{
		$this->load->model('teacher_model','',TRUE);
		$this->teacher_model->delete_teacher($id);
		redirect('teacher/index');

	}

}