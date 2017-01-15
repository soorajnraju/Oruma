<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account_model extends CI_Model
{
	function set($data)
	{
		$sql="SELECT `username` FROM `account` WHERE `username`=?";
		$query=$this->db->query($sql,array($data['username']));
		if($query->num_rows()!=1)
		{
			if($this->db->insert('account', $data))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
}