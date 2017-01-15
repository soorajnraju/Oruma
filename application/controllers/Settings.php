<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Settings extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['user'])||isset($_SESSION['admin'])||isset($_SESSION['emp']))
		{
		$this->load->view('settings.php');
		}
		else
		{
			redirect(base_url(),'refresh');
		}
	}
	
	function updatePassword()
	{
		if(isset($_SESSION['user'])||isset($_SESSION['admin'])||isset($_SESSION['emp']))
		{
			$username=null;
			$this->load->model('update_model');
			if(isset($_SESSION['user']))
			{
			$username=$_SESSION['user'];
			}

			if(isset($_SESSION['admin']))
			{
			$username=$_SESSION['admin'];
			}

			if(isset($_SESSION['emp']))
			{
			$username=$_SESSION['emp'];
			}
			
			$password=filter_input(INPUT_POST, 'password');
			$password2=filter_input(INPUT_POST, 'repassword');
	
			if($password==$password2)
			{
				$data=array('username' => $username, 'password' => $password);
				$ret=$this->update_model->updatePassword($data);
				if($ret)
				{
					$success = array('success' => "Password updated");
					$this->load->view('settings.php', $success);
				}
				else
				{
					$error = array('error' => "Password not updated");
					$this->load->view('settings.php', $error);
				}
			}
			else
			{
				$pwd = array('pwd' => "Password not match");
				$this->load->view('settings.php', $pwd);
			}
		}

		else
		{
		redirect($_SERVER['HTTP_REFERER']);
		}

	}
}