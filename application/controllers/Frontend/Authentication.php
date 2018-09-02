<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Authentication extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('authentication_model');
		$this->remove_admin_session();
	}
	public function index()
	{
		$this->load->view('frontend/authentication_view');
	}
	public function login_process()
	{
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$authentication = $this->authentication_model->login_auth($email,$password);
		if ($authentication) {
			$userdata = array(
                   'user_id'  => $authentication->id,
                   'email'     => $authentication->email,
                   'contact_number' => $authentication->contact_number,
                   'logged_in' => TRUE,
               );
			$this->session->set_userdata($userdata);
			redirect('home');
		} else {
			$this->session->set_flashdata('login_faild','Please Enter Correct username and password');
			redirect('authentication');
		}
	}
	public function signup_process()
	{
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$email_id = $this->security->xss_clean($this->input->post('email'));
		$contact_number = $this->security->xss_clean($this->input->post('contact_number'));
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[members.email]');
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'required');
		if ($this->form_validation->run()) {
			$this->authentication_model->signup_process($username,$password,$email_id,$contact_number);
			$this->session->set_flashdata('success_signup','Registration Successfully..!! Please Login');
			redirect('authentication');
		} else {
			$this->session->set_flashdata('failer_signup','Registration Faild..!! Please Try Again');
			$this->session->set_flashdata('username_error',form_error('username'));
			$this->session->set_flashdata('password_error',form_error('password'));
			$this->session->set_flashdata('email_error',form_error('email'));
			$this->session->set_flashdata('contact_number_error',form_error('contact_number'));
			redirect('authentication');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('contact_number');
		$this->session->unset_userdata('logged_in');
		redirect('home');
	}
}