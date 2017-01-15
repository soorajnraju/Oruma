<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sales_model extends CI_Model
{
	function addSale($data)
	{
		$sql="SELECT `quantity` FROM `stock` WHERE `date`='".$data['date']."'";
		$query=$this->db->query($sql);
		if($query->num_rows()>0)
		{
			if($this->db->insert('sales', $data))
			{
				$ret = array('success' => "Item has been sold successfully");
				return $ret;
			}
			else
			{
				$ret = array('error' => "Item has couldn't be sold");
				return $ret;
			}
		}
		else
		{
			#un-necessary because, this checked on emp_sales_new
			$ret = array('warning' => "We don't have any stock yet" );
			return $ret;
		}
	}
	function getSales($data)
	{
		$sql="SELECT * FROM `sales` WHERE `date` BETWEEN '".$data['startdate']."' AND '".$data['enddate']."'";
		$query=$this->db->query($sql);
		return $query;
	}
}