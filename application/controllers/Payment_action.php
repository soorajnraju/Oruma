<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_action extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
			$username=$this->input->post('cid');
			$amount=$this->input->post('amount');
			$date=date('Y-m-d');
			$data = array('username' => $username, 'amount' => $amount, 'date' => $date);
			$this->load->model('payment_model');
			$ret=$this->payment_model->addData($data);
			if(isset($ret['success']))
			{
				$this->load->view('payment',$ret);
			}
			if(isset($ret['error']))
			{
				$this->load->view('payment',$ret);
			}
			if(isset($ret['balerror']))
			{
				$this->load->view('payment',$ret);
			}
		}
		else
		{
			redirect('emp','refresh');
		}
	}
}