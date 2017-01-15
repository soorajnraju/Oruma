<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stock_model extends CI_Model
{
	function onEntry($data)
	{
		$sql="SELECT `quantity` FROM `stock` WHERE `date`='".$data['date']."'";
		$query=$this->db->query($sql);
		if($query->num_rows()>0)
		{
			$row=$query->result();
			$quantity=$row[0]->quantity;
			$quantity+=$data['quantity'];
			$this->db->where('date', $data['date']);
    		$this->db->update('stock', array('quantity' => $quantity));
    		return $message = array('success' => true);
		}
		else
		{
			if($this->db->insert('stock', $data))
			{
				return $message = array('success' => true);
			}
			else
			{
				return $message = array('error' => true);
			}
		}
	}
	function onSale($data)
	{
		$sql="SELECT `quantity` FROM `stock` WHERE `date`='".$data['date']."'";
		$query=$this->db->query($sql);
		if($query->num_rows()>0)#This if is un-necessary, bcz its already checked on emp_sales_new
		{
			$row=$query->result();
			$quantity=$row[0]->quantity;
			$quantity-=$data['quantity'];
			$this->db->where('date', $data['date']);
    		$this->db->update('stock', array('quantity' => $quantity));
		}
	}
	function getStock($data)
	{
		$sql="SELECT * FROM `stock` WHERE `date`='".$data['date']."'"; 	
		$query=$this->db->query($sql);
		return $query;
	}
}