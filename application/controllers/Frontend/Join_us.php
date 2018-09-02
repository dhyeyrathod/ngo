<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod  
 */
class Join_us extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	}
	public function index()
	{
		$data['all_country_key'] = $this->blog_model->getAllCountry();
		$this->load->view('frontend/join_us',$data);
	}
	public function joinus_process()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('comments', 'Comments', 'required');
		$this->form_validation->set_rules('country_select', 'country', 'required');
		if (($this->form_validation->run()) && $this->input->server('REQUEST_METHOD') == 'POST') {
			$name = $this->security->xss_clean($this->input->post('name'));
			$phone = $this->security->xss_clean($this->input->post('phone'));
			$email = $this->security->xss_clean($this->input->post('email'));
			$country = $this->security->xss_clean($this->input->post('country_select'));
			$city = $this->security->xss_clean($this->input->post('city'));
			$comments = $this->security->xss_clean($this->input->post('comments'));
			$option_json = json_encode($this->security->xss_clean($this->input->post('option')));
			$this->blog_model->setVolunteerData($name,$phone,$email,$comments,$option_json,$country,$city);
			$this->session->set_flashdata('success','Your request submited successfully...!!');
			redirect('join_us');
		} else {
			$data['all_country_key'] = $this->blog_model->getAllCountry();
			$this->load->view('frontend/join_us',$data);
		}
	}
	public function getCities()
	{
		header('Content-Type: application/json');
    	echo json_encode($this->blog_model->getAllCitiesbyCountry($this->input->post('country_id')));
	}
}