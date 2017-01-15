<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Price_change extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['admin']))
		{
			$this->load->model('price_model');
			$row=$this->price_model->getPrice();
			$p_price=$row[0]->pamount;
			$s_price=$row[0]->samount;
			$data = array('p_price' => $p_price,'s_price' => $s_price);
			$this->load->view('price_change', $data);
		}
		else
		{
			redirect('admin/login');
		}
	}
	function change()
	{
		if(isset($_SESSION['admin']))
		{
			$p_price=$this->input->get_post('p_price');
			$s_price=$this->input->get_post('s_price');
			$data = array('p_price' => $p_price, 's_price' => $s_price);
			$this->load->model('price_model');
			$this->price_model->setPrice($data);
			$this->index();
		}
		else
		{
			redirect('admin/login');
		}
	}
}