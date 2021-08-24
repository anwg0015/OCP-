<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$this->load->model('staff_model','',TRUE);
		$this->staff_model->view_staff();
		$data=array(
			'allstaff' => $this->staff_model->view_staff(),
			'title' => 'View College Supporting Staff',
			'page' => 'viewstaff.php'
			);
		$this->load->view('main.php',$data);
	}

	// Add a new item
	public function add()
	{
		$data = array(
			'title' => 'Add Suppoting staff',
			'page' => 'addstaff.php'
			);
		$this->load->view('main.php', $data);
	}

	public function insert()
	{
		$this->load->model('staff_model','',TRUE);
		$this->staff_model->insert_staff();
		$data = array(
			'msg' => 'set',
			'title' => 'Add Supporting staff',
			'page' => 'addstaff.php'
			);
		$this->load->view('main.php', $data);
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id)
	{
		$this->load->model('staff_model','',TRUE);
		$this->staff_model->delete_staff($id);
		redirect('staff/index');

	}
}

/* End of file staff.php */
/* Location: ./application/controllers/staff.php */
