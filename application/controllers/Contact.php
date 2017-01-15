<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller
{
	function index()
	{
		$this->load->view('contact.php');
	}
}