<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp_entry extends CI_Controller
{
	function index()
	{
		if(!isset($_SESSION['emp']))
		{
			redirect('emp/login','refresh');
		}
		$this->load->view('emp_entry.php');
	}
}