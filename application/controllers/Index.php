<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class index extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		redirect('home');
	}
	public function page_not_found()
	{
		$this->load->view('frontend/common/page_not_found');
	}
}