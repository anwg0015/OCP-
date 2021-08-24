<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coordinator extends CI_Controller

{
	public function index()
{
	$data=array(
		'tittle'=>'Add Coordinator',
		'page'=>'addcoordinator.php'
		);
	$this->load->view('main.php',$data);
}
public function viewcoordinator()
{
$data=array(
		'tittle'=>'View Coordinator',
		'page'=>'viewcoordinator.php'
		);
	$this->load->view('main.php',$data);
}

}