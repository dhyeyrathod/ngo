<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->remove_admin_session();
	}
	public function index()
	{
		$this->load->view('frontend/home_view');
	}
}