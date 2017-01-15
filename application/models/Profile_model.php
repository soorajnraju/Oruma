<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile_model extends CI_Model
{
	function setProfile($data)
	{
		if($this->db->insert('profile', $data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}