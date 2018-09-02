<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author JAy rathod 
 */
class Cms extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function donate()
	{
		$this->load->view('frontend/donate_view');
	}
	public function media()
	{
		$this->load->view('frontend/media_view');
	}
	public function Programs()
	{
		$this->load->view('frontend/programs_view');
	}
	public function contact_us()
	{
		$this->load->view('frontend/contact_us_view');
	}
}
