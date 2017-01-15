<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp_man extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['admin']))
		{
			$this->load->view('emp_manage.php');
		}
		else
		{
			redirect('admin/login','refresh');
		}	
	}    
}