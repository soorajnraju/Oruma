<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	function login()
	{
		if(isset($_SESSION['user']))
		{
			redirect(base_url(),'refresh');
		}
		$this->load->view('login.php');
	}
	function verify()
	{
		$username=filter_input(INPUT_POST, 'username');
		$password=filter_input(INPUT_POST, 'password');
		$this->load->model('user_model');
		$data=array('username'=>$username, 'password'=>$password);
		$status=$this->user_model->getUser($data);
		if($status)
		{
			$this->session->set_userdata('user',$username);
			redirect(base_url(),'refresh');
		}
		else
		{
			$error = array('error' => "Invalid login");
			$this->load->view('login.php', $error);
		}
	}
}