<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sales extends CI_Controller
{
	function index()
	{
		if(!isset($_SESSION['user']))
		{
			redirect('user/login','refresh');
		}
		$this->load->view('sales.php');
	}
}