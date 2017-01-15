<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class New_profile extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['emp']))
		{
			$this->load->view('new_profile.php');
		}
		else
		{
			redirect('emp','refresh');
		}
	}
	function register()
	{
		if(isset($_SESSION['emp']))
		{
			$fname=$this->input->post('fname');
			if(is_null($fname))
			{
				redirect('new_profile','refresh');
			}
			$lname=$this->input->post('lname');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$address=$this->input->post('address');
			$city=$this->input->post('city');
			$province=$this->input->post('province');
			$pin=$this->input->post('pin');
			#To avoid form re-submission
			if(is_null($fname))
			{
				redirect('new_profile','refresh');
			}
			#Register username and password(phone number) to user table
			$data = array('username' => $email, 'password' => $phone);
			$this->load->model('user_model');
			$ret1=$this->user_model->setUser($data);
			#Set account info
			$acc = array('username' => $email, 'balance' => '0');
			$this->load->model('account_model');
			$ret3=$this->account_model->set($acc);
			#Insertion of profile information to table profile
			$data = array('fname' => $fname, 'lname' => $lname, 'email' => $email, 'phone' => $phone, 'address' => $address, 'city' => $city, 'province' => $province, 'pin' => $pin);
			$this->load->model('profile_model');
			if(isset($ret1['smsg'])&&isset($ret3))
			{
				$ret2=$this->profile_model->setProfile($data);
				if($ret2)
				{
					$this->load->view('new_profile.php', $ret1);
				}
				elseif(isset($ret1['emsg']))
				{
					$this->load->view('new_profile.php',$ret1);
				}
			}
			elseif(isset($ret1['error']))
			{
				$this->load->view('new_profile.php',$ret1);
			}
			else
			{
				$other = array('other' => 'Something went wrong');
				$this->load->view('new_profile.php',$other);
			}
		}
		else
		{
			redirect('emp','refresh');
		}
	}
}