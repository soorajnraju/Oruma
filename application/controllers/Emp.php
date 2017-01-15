<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp extends CI_Controller
{
	function index()
	{
		$this->login();
	}
	
	function login()
	{
		if(isset($_SESSION['emp']))
		{
			redirect('emp_home','refresh');
		}
		elseif(!isset($_SESSION['admin'])&&!isset($_SESSION['user']))
		{
			$this->load->view('emp_login.php');
		}
		else
		{
			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}

	function verify()
	{
		$username=filter_input(INPUT_POST, 'username');
		$password=filter_input(INPUT_POST, 'password');
		$this->load->model('emp_model');
		$data=array('username'=>$username, 'password'=>$password);
		$ret=$this->emp_model->getEmp($data);
		if($ret)
		{
			$this->session->set_userdata('emp',$username);
			redirect('emp_home','redirect');
		}
		else
		{
			$error = array('error' => "Invalid login");
			$this->load->view('emp_login.php', $error);
		}
	}
}