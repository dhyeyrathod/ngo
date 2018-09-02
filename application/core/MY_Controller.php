<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('friend');
		$this->friend = new Friend ;
		// $this->output->cache(1000000);
	}
	public function remove_admin_session()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_email');
		$this->session->unset_userdata('admin_name');
		$this->session->unset_userdata('logged_in');
	}
}
