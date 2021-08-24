<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
	}

	public function index()
	{
		$this->load->view('login.php');
	}

	public function check_login()
	{
		$this->load->model('login_model','',TRUE);
		$res = $this->login_model->check_login();
		if($res == TRUE)
		{
			$result = $this->login_model->alldata();
			$fname = $result['teac_fname'];
			$lname = $result['teac_lname'];
			$photo = $resulr['teac_photo'];
			$email = $result['teac_email'];
			$role = $result['teac_role'];
			$password = $result['teac_password'];
			$remember = $this->input->post('remember');

			//setting cookiee
			if(isset($remember))
			{
				/*$cookie = array(
					'name' => 'kfdjgkj',
					'expire' => 60000
					);
				$this->input->set_cookie($cookie);
				*/

			}

			//setting session
			$newdata = array(
				'fname' => $fname,
				'lname' => $lname,
				'email' => $email,
				'user_role' => $role,
				'user_password' => $password,
				'photo' => $photo
				);
			$this->session->set_userdata($newdata);
			
			$this->load->view('main.php');
			redirect('login/mainpage');
		}else
		{
			$this->load->helper('form');
			$data = array(
				'msg' => 'Invalid Username or Password');
			$this->load->view('login',$data);
		}
	}

	public function mainpage()
	{
		$username = $this->session->userdata('email');
		if($username != ""){
			$data['title'] = 'OCP Home page';
			$data['page'] = "home.php";
			$this->load->view('main.php',$data);
		}else{
			redirect('login/index');
		}
	}

	public function signup()
	{
		$this->load->view('register');
	}

	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('idno','ID number','required',array('required' => 'You must provide %s'));
		$this->form_validation->set_rules('fname','Firstname','required',array('required' => 'You must provide %s'));
		$this->form_validation->set_rules('lname','Lastname','required',array('required' => 'You must provide %s'));
		$this->form_validation->set_rules('address','Address','required',array('required' => 'You must provide %s'));
		$this->form_validation->set_rules('mobile','Mobil number','required|exact_length[10]',array('required' => 'You must provide %s number',
			'exact_length[10]' => 'Must be of 10 digits'));
		$this->form_validation->set_rules('password','Password','required',array('required' => 'You must provide %s'));
		$this->form_validation->set_rules('confpassword','Confirm Password','required|matches[password]',array('matches' => 'Password missmatch','required' => 'Re-Enter Password'));

		$this->form_validation->set_rules('email','Email','required',array('required' => 'You must provide %s'));

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register');
                }
                else
                {
                        //doing the entry here
                        $this->load->model('login_model','',TRUE);
                        $result=$this->login_model->register();

                        //sending mail
                        if($result == TRUE)
                        {
                        $this->load->library('email');
                        $to=$this->input->post('email');
                        $password=$this->input->post('password');
                        $subject="Dear user, 
                        your new account has been created thanks for choosing us
                        Your username = email
                        password = $password
                        Please change your password if u are seeing this mail for the first time";
                        $this->email->from('from@example.com','your name');
                        $this->email->to('$to');
                        $this->email->subject('$subject');
                        $this->email->send();
                        echo "data entry success ";
                        echo $to.$subject;

                    	}
                }
	}

	public function logout()
	{
		session_destroy();
		$this->index();
	}
}
