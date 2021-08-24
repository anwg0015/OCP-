<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Operation extends CI_Controller {

	
	public function add($op_batchid='')
	{
		$this->load->model('operation_model','',TRUE);
		$data=array(
			'batchid'=>$op_batchid,
		'page'=>'addoperation.php',
	'alloperation'=>$this->operation_model->operation_by_batch_id($op_batchid)
		

			
);
	
	$this->load->view('main',$data);
	}
	public function insert()
		{
			$this->load->model('operation_model','',TRUE);
			$this->operation_model->insert();

		}

	public function view_operation()
	{
		$this->load->model('operation_model','',TRUE);
		$data=array(

			'page'=>'viewoperation.php',
			'alloperation'=>$this->operation_model->operation_by_batch_id($id=''),


			);
		$this->load->view('main',$data);
	}
}
