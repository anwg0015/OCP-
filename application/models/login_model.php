<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function check_login()
	{
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->select('*')->from('tbl_teacher')->where('teac_email',$email);
		$query = $this->db->get();
		$num = $query->num_rows();
		if($num>=1)
		{
			$result = $query->row_array();
			if($password == $result['teac_password'])
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}

	}

	public function alldata()
	{
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->select('*')->from('tbl_teacher')->where('teac_email',$email);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function register()
	{
		$this->load->helper('date');
		$date = mdate('%Y/%m/%d %h:%i%a ', time());

		$data=array(
			'std_idno'=> $this->input->post('idno'),
			'std_fname'=> $this->input->post('fname'),
			'std_mname'=> $this->input->post('mname'),
			'std_lname'=> $this->input->post('lname'),
			'std_dob'=> $this->input->post('date'),
			'std_sex' => 'male',
			'std_address'=> $this->input->post('address'),
			'std_email'=> $this->input->post('email'),
			'std_mobile' => $this->input->post('mobile'),
			'std_phone'=> $this->input->post('phone'),
			'std_level' => $ths->input->post('level'),
			'std_faculty'=> $this->input->post('faculty'),
			'std_programme'=> $this->input->post('programme'),
			'std_batch'=> $this->input->post('batch'),
			'std_password'=> $this->input->post('password'),
			'std_createdat' => $date
			);

		$this->db->insert('tbl_student',$data);
		return TRUE;

	}

}