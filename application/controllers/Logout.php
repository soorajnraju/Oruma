<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['user']))
		{
			$this->session->unset_userdata('user');
			$this->session->sess_destroy();
			redirect('user/login','refresh');
		}
		if(isset($_SESSION['admin']))
		{
			$this->session->unset_userdata('admin');
			$this->session->sess_destroy();
			redirect('admin/login','refresh');
		}
		if(isset($_SESSION['emp']))
		{
			$this->session->unset_userdata('emp');
			$this->session->sess_destroy();
			redirect('emp/login','refresh');
		}
	}
}