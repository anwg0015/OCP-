<?php

class semester extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('semester_model');
        $this->load->model('subject_model');
        $this->load->model('batch_model');
        $this->load->library('parser');
        $this->load->library('pagination');

        if (!$this->session->userdata('student_id')) {
            redirect(site_url(STUDENT_PATH . "/login"));
        }

    }


    function subjects($semester_id) {
        $data['main'] = 'student/subject/list';
        $student_id=$this->session->userdata('student_id');
        $data['semester_subject_list'] = $this->subject_model->semester_subject_list($student_id,$semester_id);
        $this->load->view('student/home', $data);
    }

    function routine($semester_id) {
        $data['main'] = 'student/subject/list';
        $student_id=$this->session->userdata('student_id');
        $data['semester'] = $this->semester_model->semester_routine($student_id,$semester_id);
        $this->load->view('student/home', $data);
    }


}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */