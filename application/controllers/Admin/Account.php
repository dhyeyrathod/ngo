<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Account extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('authentication_model');
	}
	public function login()
	{
		$this->load->view('admin/login');
	}
	public function action_login()
	{
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$authentication = $this->authentication_model->admin_login_auth($email,$password);
			if ($authentication) {
				$userdata = array(
	                   'admin_id'  		=> $authentication->id,
	                   'admin_email' 	=> $authentication->email,
	                   'admin_name'		=> $authentication->username,
	                   'logged_in' 		=> true,
	                   'isadmin' 		=> true
	               );
				$this->session->set_userdata($userdata);
				redirect('admin/dashboard/index');
			} else {
				$this->session->set_flashdata('login_faild','Please Enter Correct username and password');
				redirect('admin/account/login');
			}
		} else {
			$this->session->set_flashdata('email_error',form_error('email'));
			$this->session->set_flashdata('password_error',form_error('password'));
			redirect('admin/account/login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_email');
		$this->session->unset_userdata('admin_name');
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('isadmin');
		redirect('admin/account/login');

	}
}