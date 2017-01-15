<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp_sales_show extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
			$this->load->view('emp_sales_show');
		}
		else
		{
			redirect('emp','refresh');
		}
	}
	function getData()
	{
		$startdate=$this->input->post('startdate');
		$enddate=$this->input->post('enddate');
		$this->load->model('sales_model');
		$data = array('startdate' => $startdate, 'enddate' => $enddate);
		$query=$this->sales_model->getSales($data);
		$data = array('query' => $query);
		$this->load->view('emp_sales_show_result',$data);
	}
}