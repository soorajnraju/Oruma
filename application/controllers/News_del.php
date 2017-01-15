<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_del extends CI_Controller
{
	function index()
	{
		if(isset($_SESSION['admin']))
		{
			$this->load->model('news_model');
			$query=$this->news_model->getNews();
			$data = array('query' => $query);
			$this->load->view('news_del.php',$data);
		}
		else
		{
			redirect('admin/login');
		}
	}
	function delete($id)
	{
		if(isset($_SESSION['admin']))
		{
			$this->load->model('news_model');
			$this->news_model->deleteNews($id);
			$this->index();
		}
		else
		{
			redirect('admin/login');
		}
	}
}