<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('loginmodel','m1');
	$this->load->database();
}


	public function index()
	{
		$this->load->view('login');
	}

	public function userLogin()
	{
		$username = $this->input->post('txtusername');
		$password = $this->input->post('txtpassword');
		$data=array(
			'sz_username' => $username,
			'password' => $password,
		);
		$result = $this->m1->checkData('tbl_user',$data);
		if($result==1){
			$this->session->set_userdata('username',$username);
			
			redirect(base_url().'home','refresh');
			
		}else{
			echo "<script> alert('Login Not success!'); </script>";
			
			redirect(base_url().'Login','refresh');
			
		}
	}

	public function logout(){
		unset($_SESSION['username']);
		
		redirect(base_url().'Login','refresh');
		
	}
}
