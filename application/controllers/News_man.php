<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_man extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['admin']))
		{
		$this->load->view('news_manage.php');
		}
		else
		{
			redirect('admin/login');
		}
	}
	
	function publish()
	{
		if(isset($_SESSION['admin']))
		{
			$this->load->model('news_model');
			$title=$this->input->post('title');
			if(is_null($title))
			{
				redirect('news_man','refresh');
			}
			$content=$this->input->post('content');
			$date=date('Y-m-d');
			$data = array('title' => $title, 'content'=> $content, 'date'=>$date);
			$status=$this->news_model->publish($data);
			if($status)
			{
				$success = array('success' => "Successfully published");
				$this->load->view('news_manage.php', $success);
			}
			else
			{
				$error = array('error' => "Publishing failed");
				$this->load->view('news_manage.php', $error);
			}
		}
	}
}