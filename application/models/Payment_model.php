<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_model extends CI_Model
{
	function addData($data)
	{
		$sql="SELECT `balance` FROM `account` WHERE `username`='".$data['username']."'";
		$query=$this->db->query($sql);
		if($query->num_rows()>0)
		{
			$row=$query->result();
			$balance=$row[0]->balance;
			if($balance>=$data['amount'])
			{
				$balance-=$data['amount'];
				if($this->db->insert('payment',$data))
				{
					$this->db->where('username', $data['username']);
	    			$this->db->update('account', array('balance' => $balance));
	    			$ret = array('success' => "Payment was success");
					return $ret;
				}
				else
				{
					$ret = array('error' => "Payment was failure");
					return $ret;
				}
			}
			else
			{
				$ret = array('balerror' => "There is no sufficient account balance");
				return $ret;
			}
		}
		else
		{
			$ret = array('error' => "Customer Id doesn't exist");
			return $ret;
		}
	}
}