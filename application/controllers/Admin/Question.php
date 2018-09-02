<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Question extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public Function list_question()
	{
		$data['newQuestion_count'] = $this->admin->getNewQuestionCount();
		$data['question'] = $this->admin->newQuestion();
		$this->load->view('admin/list_question',$data);
	}
	public function change_question_status()
	{
		if ($this->input->post()) {
			$question_id = $this->security->xss_clean($this->input->post('question_id'));
			$status = $this->security->xss_clean($this->input->post('status'));
			if ($this->admin->change_status($question_id , $status)) {
				echo json_encode(array('status' => 'success','message'=>'question status change sucessfully'));
			} else {
				json_encode(array('status' => 'failed','message'=>'question status has Not Been Chnage'));
			}
		}
	}
	public Function answer()
	{
		$question_id = $this->uri->segment(4);
		$data['question_key'] = $this->admin->getSingleQuestionData($question_id);
		$data['newQuestion_count'] = $this->admin->getNewQuestionCount();
		$this->load->view('admin/answer_form',$data);
	}
	public Function answer_process()
	{	
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		$this->form_validation->set_rules('answer_text', 'Answer Box', 'required');
		if ($this->form_validation->run()) {
			$answer = $this->security->xss_clean($this->input->post('answer_text'));
			$question_id = $this->security->xss_clean($this->input->post('question_id'));
			$admin_id = $this->security->xss_clean($this->input->post('admin_id'));
			if ($this->admin->storeAnswer($answer,$question_id,$admin_id)) {
				$this->session->set_flashdata('success','Your Answer is Submited successfully');	
				redirect('admin/question/list_question');
			} else {
				$this->session->set_flashdata('error','Your Answer Is Not Submited');
				$redirect_url = "admin/question/answer/".$this->input->post('question_id');
				redirect($redirect_url);
			}
		} else {
			$this->session->set_flashdata('validation_error_answer',form_error('answer_text'));
			$redirect_url = "admin/question/answer/".$this->input->post('question_id');
			redirect($redirect_url);
		}
	}
}