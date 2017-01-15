<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp_home extends CI_Controller
{
	function index()
		{
			if(isset($_SESSION['emp']))
			{
			$this->load->view('emp_home.php');
			}
			else
			{
				redirect('emp/login');
			}
		}
}