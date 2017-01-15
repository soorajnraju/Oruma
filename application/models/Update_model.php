<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update_model extends CI_Model
{
	#This updatePassword method is common for admin,emp and user
    function updatePassword($data)
        {
            if(isset($_SESSION['user']))
            $sql="UPDATE `user` SET `password`='".$data['password']."' WHERE `username`='".$data['username']."'";
            if(isset($_SESSION['admin']))
            $sql="UPDATE `admin` SET `password`='".$data['password']."' WHERE `username`='".$data['username']."'";
            if(isset($_SESSION['emp']))
            $sql="UPDATE `emp` SET `password`='".$data['password']."' WHERE `username`='".$data['username']."'";
            $this->db->query($sql);
            if($this->db->affected_rows()>0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }    
}