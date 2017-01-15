<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model
{

	function publish($data)
	{
		if($this->db->insert('post', $data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function getNews()
	{
		$sql="SELECT * FROM `post` ORDER BY `date` DESC";
		$query=$this->db->query($sql);
		return $query;
	}
	function deleteNews($id)
	{
		$sql="DELETE FROM `post` WHERE `postid`=".$id;
		$this->db->query($sql);
	}
}