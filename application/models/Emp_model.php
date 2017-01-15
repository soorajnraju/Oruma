<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp_model extends CI_Model
{
	function getEmp($data)
	{
		$sql="SELECT `username` FROM `emp` WHERE `username`=? AND `password`=?";
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
	function setEmp($data)
	{
		if($this->db->insert('emp', $data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}