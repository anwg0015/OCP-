<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routine extends CI_Controller {

	public function view_rou($sem_id)
	{
		$this->load->model('routine_model','',TRUE);
		if($this->routine_model->view_routine($sem_id))
		{
			$data = array(
				'routine' => $this->routine_model->view_routine($sem_id),
				'title' => 'Routine Description',
				'page' => 'viewroutine.php'
				);
			$this->load->view('main.php', $data);
		}else
		{
			$data = array(
				'sem_id' => $sem_id,
				'title' => 'Add Routine',
				'page' => 'addroutine.php',
				);
			$this->load->view('main.php', $data);
		}
		
	}

	public function insert()
	{
		$this->load->model('routine_model','',TRUE);
		$this->routine_model->insert_routine();
		$sem_id = $this->input->post('sem_id');
		$data = array(
			'msg' => 'Routine Added Successfully !!',
			'routine' => $this->routine_model->view_routine($sem_id),
			'title' => 'Routine Description',
			'page' => 'viewroutine.php'
		);
		$this->load->view('main.php', $data);	
	}

	public function edit($id)
	{
		$this->load->model('routine_model','',TRUE);
		$data = array(
			'action' => 'edit',
			'sem_id' => $id,
			'routine' => $this->routine_model->edit_routine($id),
			'title' => 'Add Routine',
			'page' => 'addroutine.php',		
			);
		$this->load->view('main.php', $data);

	}

	public function update($id)
	{
		$this->load->model('routine_model','',TRUE);
		$this->routine_model->update_routine($id);

	}

}

/* End of file routine.php */
/* Location: ./application/controllers/routine.php */

?>