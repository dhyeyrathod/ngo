<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class About_us extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->remove_admin_session();
	}
	public function index()
	{
		$this->load->view('frontend/about_us_view');
	}
}