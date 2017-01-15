<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_home extends CI_Controller
{
function index()
	{
		if(isset($_SESSION['admin']))
		{
		$this->load->view('admin_home.php');
		}
		else
		{
			redirect('admin/login');
		}
	}
}