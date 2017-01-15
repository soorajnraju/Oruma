<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Price_model extends CI_Model
{
	function getPrice()
	{
		$query=$this->db->get('price');
		return $query->result();
	}
	function setPrice($data)
	{
		$sql="UPDATE `price` SET `pamount`=".$data['p_price'].",`samount`=".$data['s_price'];
		$this->db->query($sql);
	}
}