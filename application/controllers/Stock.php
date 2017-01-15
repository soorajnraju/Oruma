<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stock extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
		$date=date('Y-m-d');
		$data = array('date' => $date);
		$this->load->model('stock_model');
		$query=$this->stock_model->getStock($data);
		$data = array('query' => $query);
		$this->load->view('emp_stock_result', $data);
		}
		else
		{
			redirect('emp','refresh');
		}
	}
}