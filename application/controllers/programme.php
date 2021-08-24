<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programme extends CI_Controller {

	public function index()
	{
		$this->load->model('programme_model','',TRUE);
		$data = array(
			'allprog' => $this->programme_model->view_programme(),
			'title' => 'View Programme',
			'page' => 'viewprogramme.php'
			);
		$this->load->view('main.php', $data);
		
	}

	public function add()
	{
		$data = array(
			'title' => 'ADD Programme',
			'page' => 'addprogramme.php'
			);
		$this->load->view('main.php', $data);
	}

	public function insert()
	{
		$this->load->model('programme_model','',TRUE);
		$this->programme_model->insert_programme();
	}
	public function my_programme()
	{
		$email = $this->session->userdata('email');
		$this->load->model('programme_model','',TRUE);
		$teac_id = $this->programme_model->prog_by_email($email);
		$prog_id = $this->programme_model->prog_by_teac($teac_id);
		redirect('batch/batch_by_id/'.$prog_id);

	}


}

/* End of file programme.php */
/* Location: ./application/controllers/programme.php */