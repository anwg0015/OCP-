<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignment extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','download'));
	}

	

	public function index()

	{
	
		
	$this->load->model('course_model','',TRUE);

   $data=array(
   	'allcourse'=>$this->course_model->display_course(),
			
              'page'=>"addassignment.php",
              'title'=>'Add Assignment'


			);
		$this->load->view('main.php',$data);
	}

	public function insert()

{
	
	$uploaded_details=$this->add_image('userfile');
	
	
$this->load->model('assignment_model','',TRUE);
$this->assignment_model->insert_assignment($uploaded_details['file_name']);

}
	



	public function add_image($file_name='')
	 {

		$config['upload_path'] = './upload/';

		$config['allowed_types'] = 'gif|jpg|png|pdf|docx';

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



public function getall($sub_id='')
{

	$this->load->model('assignment_model','',TRUE);
	$data=array(
		'course_id' => $sub_id,
		
		'allassignment' => $this->assignment_model->assignment_by_subj($sub_id),
		'title' =>'View Assignment',
		'page' => 'viewassignment.php'
		);
		$this->load->view('main.php', $data);
}


function edit_assignment($id)
{
	$this->load->model('assignment_model','',TRUE);
	$data=array(
	'assignment_id'=>$id,
	'allassignment' => $this->assignment_model->get_assignment_info($id),
	'title'=>'Edit Assignment',
	'page'=>"edit_assignment.php"
	);
$this->load->view('main.php',$data);
}
}




	
	

