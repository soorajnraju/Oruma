<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller
{
	
	function index()
	{
		$this->load->model('news_model');
		$query=$this->news_model->getNews();
		$data = array('query' => $query);
		$this->load->view('news.php',$data);
	}
}