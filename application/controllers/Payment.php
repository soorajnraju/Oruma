<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
			$this->load->view('payment');
		}
		else
		{
			redirect('emp','refresh');
		}
	}
}