<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
	function index()
	{
		$this->login();
	}
	
	function login()
	{
		if(isset($_SESSION['admin']))
		{
			redirect('admin_home','refresh');
		}
		elseif(!isset($_SESSION['user'])&&!isset($_SESSION['emp']))
		{
			$this->load->view('admin_login.php');
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
		$this->load->model('admin_model');
		$data=array('username'=>$username, 'password'=>$password);
		$ret=$this->admin_model->getAdmin($data);
		if($ret)
		{
			$this->session->set_userdata('admin',$username);
			redirect('admin_home','refresh');
		}
		else
		{
			$error = array('error' => "Invalid login");
			$this->load->view('admin_login.php', $error);
		}
	}
}