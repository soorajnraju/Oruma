<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp_show_entry extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
			$username=$this->input->post('cid');
			$startdate=date('Y-m-d',strtotime($this->input->post('startdate')));
			$enddate=date('Y-m-d',strtotime($this->input->post('enddate')));
			$data = array('username' => $username, 'startdate' => $startdate, 'enddate' => $enddate);
			$this->load->model('entry_model');
			$query=$this->entry_model->get_all_data($data);
			$data = array('query' => $query);
			$this->load->view('emp_show_entry',$data);
		}
		else
		{
			redirect('emp/login','refresh');
		}
	}
}