<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model
{
	function getUser($data)
	{
		$sql="SELECT `username` FROM `user` WHERE `username`=? AND `password`=?";
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
	function setUser($data)
	{
		$sql="SELECT `username` FROM `user` WHERE `username`=?";
		$query=$this->db->query($sql,array($data['username']));
		if($query->num_rows()==1)
		{
			return $data = array('error' => 'Username already exists');
		}
		else
		{
			if($this->db->insert('user', $data))
			{
				return $data = array('smsg' => 'User Registered');
			}
			else
			{
				return $data = array('emsg' => 'Registration Failed');
			}

		}
	}
}