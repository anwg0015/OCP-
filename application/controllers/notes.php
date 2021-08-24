<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {

public function index()
	{
		$this->load->model('course_model','',TRUE);
		$data=array(
			'allcourse'=>$this->course_model->display_course(),
			'page'=>"addnotes.php",
			'title'=>'Add Notes',

			);
		$this->load->view('main.php',$data);
	}

	public function view_notes()
	{
		$data=array(

			'page'=>'viewnotes.php',
			'title'=>'View Notes',
			);
		$this->load->view('main.php',$data);

	}

	public function insert()

	{
	
$uploaded_details=$this->add_file('userfile');
	
	
$this->load->model('notes_model','',TRUE);
$this->notes_model->insert_notes($uploaded_details);

	}


	public function add_file($file_name='')
	 {

		$config['upload_path'] = './upload/notes';

		$config['allowed_types'] = 'pdf|docx';

		$config['max_size']	= '1000000000';

		$config['max_width']  = '1300';

		$config['max_height']  = '1200';

		$config['remove_spaces']  = 'true';



		$this->load->library('upload', $config);

		$this->upload->do_upload($file_name);

		if($this->upload->display_errors())

			{

				 $this->error=$this->upload->display_errors();

				return false;

			}

		else

			{

			$data = $this->upload->data();

			return $data;

			}

	}

}