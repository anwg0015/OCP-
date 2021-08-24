<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {
public function index()
{
	$this->load->model('activity_model','',TRUE);
	$data = array(
		'allactivity' => $this->activity_model->view_activity(),
		'title' => 'View Activity',
		'page'=>'viewactivity.php'
		);
	$this->load->view('main',$data);
}

public function add()
{
	$data=array(
		'title' => 'Add Activity',
		'page'=>'addactivity.php'
		);
	$this->load->view('main',$data);
}

public function insert()
{
	$this->load->model('activity_model','',TRUE);
	$this->activity_model->insert_activity();
	$data=array(
		'msg' => 'New activity Added',
		'title' => 'Add Activity',
		'page'=>'addactivity.php'
		);
	$this->load->view('main',$data);

}

}