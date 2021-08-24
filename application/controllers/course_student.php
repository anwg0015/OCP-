<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_Student extends CI_Controller {
	
	public function view()
	{
		$data=array(
		'page'=>'viewcoursestudent.php'
		);
		$this->load->view('main_student',$data);
	}
}