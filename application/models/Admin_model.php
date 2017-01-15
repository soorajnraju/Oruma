<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	function getAdmin($data)
	{
		$sql="SELECT `username` FROM `admin` WHERE `username`=? AND `password`=?";
		$query=$this->db->query($sql,array($data['username'],$data['password']));
		if($query->num_rows()==1)
		{
		  return true;
		}
		else
		{
		  return false;
		}	
	}
}