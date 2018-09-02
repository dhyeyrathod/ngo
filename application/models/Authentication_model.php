<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Authentication_model extends MY_Model
{	
	public function __construct()
	{
		parent::__construct();
	}
	public function login_auth($email , $password)
	{
		$sql_str = "SELECT * FROM members WHERE email = ".$this->db->escape($email)." AND password = ".$this->db->escape($password)." AND status=TRUE";
		return $this->db->query($sql_str)->row();
	}
	public function signup_process($username,$password,$email_id,$contact_number)
	{
		$sql_str = "INSERT INTO members  (username,password,email,contact_number,status,registration_date) VALUES (".$this->db->escape($username).",".$this->db->escape($password).",".$this->db->escape($email_id).",".$this->db->escape($contact_number).",TRUE,NOW())";
		return $this->db->simple_query($sql_str) ;
	}
	public function admin_login_auth($email,$password)
	{
		$sql_str = "SELECT * FROM admin WHERE email=".$this->db->escape($email)." AND password=".$this->db->escape($password)." AND status = TRUE";
		return $this->db->query($sql_str)->row();
	}
}