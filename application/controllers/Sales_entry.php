<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sales_entry extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
			$this->load->view('sales_entry.php');
		}
		else
		{
		redirect('emp','refresh');
		}
	}
	function addEntry()
	{
		$cname=$this->input->post('cname');
		if(is_null($cname))
		{
			redirect('sales_entry','refresh');
		}
		$quantity=$this->input->post('quantity');
		$this->load->model('price_model');
		$row=$this->price_model->getPrice();
		$cprice=$row[0]->samount;
		$price=$quantity*$cprice;
		$date=date('Y-m-d');
		$this->load->model('sales_model');
		$data = array('cname' => $cname, 'quantity' => $quantity, 'price' => $price, 'date' => $date);
		$this->load->model('stock_model');
		$row=$this->stock_model->getData($data);
		if(($row!=false) && ($row[0]->stock>=$quantity))
		{
			$status=$this->sales_model->addData($data);
			if($status)
			{
				$data = array('success' => 'Item successfully sold');
				$this->load->view('sales_entry',$data);
			}
			else
			{
				$data = array('error' => 'That attempt was a failure !');
				$this->load->view('sales_entry',$data);
			}
		}
		else
		{
			$data = array('error' => "We don't have enough stock !");
			$this->load->view('sales_entry',$data);
		}

	}
}