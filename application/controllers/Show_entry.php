<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Show_entry extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['user']))
		{
			$username=$_SESSION['user'];
			$startdate=date('Y-m-d',strtotime($this->input->post('startdate')));
			$enddate=date('Y-m-d',strtotime($this->input->post('enddate')));
			$data = array('username' => $username, 'startdate' => $startdate, 'enddate' => $enddate);
			$this->load->model('entry_model');
			$query=$this->entry_model->getData($data);
			$data = array('query' => $query);
			$this->load->view('show_entry',$data);
		}
		else
		{
			redirect('user/login','refresh');
		}
	}
}