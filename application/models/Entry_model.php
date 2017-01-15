<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Entry_model extends CI_Model
{
	function addData($data)
	{
		$sql="SELECT `username` FROM `user` WHERE `username`=?";
		$sql2="SELECT `balance` FROM `account` WHERE `username`=?";
		$query=$this->db->query($sql, array($data['username']));
		if($query->num_rows()!=1)
		{
			return $array = array('dup' => true );
		}
		else
		{
			$query=$this->db->query($sql2,array($data['username']));
			$row=$query->result();
			$balance=$row[0]->balance;
			$balance+=$data['price'];
			if($this->db->insert('entry', $data))
			{
				$this->db->where('username', $data['username']);
    			$this->db->update('account', array('balance' => $balance));
				return $array = array('success' => true );
			}
			else
			{
				return $array = array('error' => true );
			}
		}
	}
	function getData($data)
	{
		$sql="SELECT * FROM `entry` WHERE `date` BETWEEN '".$data['startdate']."' AND '".$data['enddate']."'AND `username`='".$data['username']."'";
		$query=$this->db->query($sql);
		return $query;
	}
	function get_all_data($data)
	{
		$sql="SELECT * FROM `entry` WHERE `date` BETWEEN '".$data['startdate']."' AND '".$data['enddate']."'";
		$query=$this->db->query($sql);
		return $query;
	}
}