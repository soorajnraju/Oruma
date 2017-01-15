<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class New_emp extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['admin']))
		{
			$this->load->view('new_emp.php');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
    function regEmp()
    {
    	if(isset($_SESSION['admin']))
		{
			$username=  filter_input(INPUT_POST, 'username');
			if(is_null($username))
			{
				redirect('new_emp','refresh');
			}
            $password=  filter_input(INPUT_POST, 'password');
            $this->load->model('emp_model');
            $data=array('username'=>$username, 'password'=>$password);
            $ret=$this->emp_model->setEmp($data);
            if($ret)
           	{
                $success = array('success' => "Employee registration was success");
				$this->load->view('new_emp.php', $success);
            }
            else
            {
	            $error = array('error' => "Employee registration failed");
				$this->load->view('new_emp.php', $error);
            }              	            	           
		}
		else
		{
			redirect('admin/login');
		}
    }
}
