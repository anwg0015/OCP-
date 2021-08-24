<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$username = $this->session->userdata('email');
		if($username == "")
		{
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->model('course_model','',TRUE);
		$data['allcourse'] = $this->course_model->display_course();
		$data['title'] = "Manage Course";
		$data['page'] = "listcourse.php";
		$this->load->view('main.php',$data);
	}

	public function add()
	{
		$this->load->helper('form');
		$data=array(
			'title' => 'Add Course',

			
			);
		$data['page'] = 'addcourse.php';

		$this->load->helper('form');


		$this->load->view('main', $data);
		
	}

	public function insert()
	{
		$this->load->library('session');
		$this->load->model('course_model','',TRUE);
		$this->course_model->insert_course();
		redirect('course');


	}
	function edit_course($id)
	{
		$this->load->model('course_model','',TRUE);
		$this->load->model('programme_model','',TRUE);
		
	$data=array(
	'course_id'=>$id,
	'allcourse' => $this->course_model->get_course_id($id),
	'allprog'=>$this->programme_model->programme_by_id($id),
	'title'=>'Edit Course',
	'page'=>"edit_course.php",
	'model'=>$this->course_model->update_course($id)
	);

$this->load->view('main',$data);
	

		
	}
	function delete_course($id)
	{
		$this->load->model('course_model','',TRUE);

	$data=array(
		'page'=>'listcourse.php',
		'allcourse' => $this->course_model->get_course_id($id),
		'model'=>$this->course_model->delete_course($id),
		'msg'=>"data deleted successfully",
		 
		
		);


redirect('course');

	}

}