<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class New_entry extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
			$this->load->view('new_entry.php');
		}
		else
		{
			redirect('emp','refresh');
		}
	}

	function addEntry()
	{
		if(isset($_SESSION['emp']))
		{
			$cid=$this->input->post('cid');
			if(is_null($cid))
			{
				redirect('new_entry','refresh');
			}
			$quantity=$this->input->post('quantity');
			$this->load->model('price_model');
			$row=$this->price_model->getPrice();
			$cprice=$row[0]->pamount;
			#Calculate price according to quality
			$price=$quantity*$cprice;
			$date=date('Y-m-d');
			$data = array('username' => $cid, 'quantity' => $quantity,'price' => $price, 'date' => $date);
			$this->load->model('entry_model');
			$status=$this->entry_model->addData($data);
			if(isset($status['success']))
			{
				$this->load->model('stock_model');
				$data = array('quantity' => $quantity, 'date' => $date);
				$ret=$this->stock_model->onEntry($data);
				if(isset($ret['success']))
				{
				$message = array('success' => 'Entry successfully added' );
				$this->load->view('new_entry',$message);
				}
				else
				{
					$message = array('error' => 'Failed to add entry' );
					$this->load->view('new_entry',$message);
				}
			}
			if(isset($status['error']))
			{
				$message = array('error' => 'Failed to add entry' );
				$this->load->view('new_entry',$message);
			}
			if(isset($status['dup']))
			{
				$message = array('error' => "Customer Id doesn't exist" );
				$this->load->view('new_entry',$message);
			}
		}
		else
		{
			redirect('emp','refresh');
		}
	}
}