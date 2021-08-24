<?php

class Home extends CI_Controller {

	  function index() {
    if ($this->session->userdata('student_id')) {
        $data['main'] = "student/main";
        $this->load->view('student/home', $data);
    } else {
        $this->load->view('student/login');
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */