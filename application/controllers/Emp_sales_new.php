<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp_sales_new extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
			$this->load->view('emp_sales_new');
		}
		else
		{
			redirect('emp','refresh');
		}
	}
	function addSale()
	{
		$cname=$this->input->post('cname');
		if(is_null($cname))
		{
			redirect('emp_sales_new','refresh');
		}
		$quantity=$this->input->post('quantity');
		$date=date('Y-m-d');
		$this->load->model('price_model');
		$row=$this->price_model->getPrice();
		$price=$quantity*$row[0]->samount;
		$data = array('cname' => $cname, 'quantity' => $quantity, 'price' => $price ,'date' => $date);
		$this->load->model('sales_model');
		$this->load->model('stock_model');
		$query=$this->stock_model->getStock($data);
		if($query->num_rows()>0)
		{
			$row=$query->result();
			$stock=$row[0]->quantity;
			if($stock>=$quantity)
			{
				$ret=$this->sales_model->addSale($data);
				if(isset($ret['success']))
				{
					$stockret=$this->stock_model->onSale($data);
					$this->load->view('emp_sales_new', $ret);
				}
				if(isset($ret['error']))
				{
					$this->load->view('emp_sales_new', $ret);
				}
			}
			else
			{
				$ret = array('warning' => "We don't have enough stock");
				$this->load->view('emp_sales_new', $ret);
			}
		}
		else
		{
			$ret = array('warning' => "We don't have any stock yet");
			$this->load->view('emp_sales_new', $ret);
		}

	}
}