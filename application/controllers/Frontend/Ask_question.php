<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Ask_question extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_id')) : $this->session->set_flashdata('ask_question_flash','First You have to login before ask question');redirect('authentication') ; endif ;
		$this->load->model('Ask_question_model');
		$this->remove_admin_session();
	}
	public function index()
	{
		$data['category'] = $this->Ask_question_model->get_all_category();
		$data['question_key'] = $this->Ask_question_model->getThreeQuestion();
		$this->load->view('frontend/ask_question',$data);
	}
	public function question_process()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('question', 'Question', 'required');
		if ($this->form_validation->run()) {
			$category = $this->security->xss_clean($this->input->post('category'));
			$question = $this->security->xss_clean($this->input->post('question'));
			$MemberId = $this->session->userdata('user_id');
			if ($this->Ask_question_model->get_store_question($category,$question,$MemberId)) {
				$this->session->set_flashdata('success_question','your Question Has been send Successfully');
				redirect('ask_question');
			} else {
				echo "error";
			}
		} else {
			$this->session->set_flashdata('category_error',form_error('category'));
			$this->session->set_flashdata('question_error',form_error('question'));
			redirect('ask_question');
		}
	}
	public function category()
	{
		if ($this->Ask_question_model->getTotalQuestionByCategory($this->uri->segment(2))) {
			$data['question_key'] = $this->Ask_question_model->getQuesionAnswerByCat($this->uri->segment(2));
		} else {
			$data['error_question'] = "Data is Not Present";
		}
		$data['category'] = $this->Ask_question_model->get_all_category();
		$this->load->view('frontend/category_view',$data);
	}
	public function answer()
	{
		if ($this->Ask_question_model->getAnsCountByQuestion($this->uri->segment(2))) {
			$data['question_key'] = $this->Ask_question_model->getSingleQuestion($this->uri->segment(2));
			$data['answer_key'] = $this->Ask_question_model->getAnswerOfSingleQuestion($this->uri->segment(2));
		} else {
			$data['question_key'] = $this->Ask_question_model->getSingleQuestion($this->uri->segment(2));
			$data['error_answer'] = "Ans Is Not Present";
		}
		$data['category'] = $this->Ask_question_model->get_all_category();
		$this->load->view('frontend/answer_view',$data);
	}
}		