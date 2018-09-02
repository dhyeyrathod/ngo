<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Dashboard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function index()
	{
		$data['user_count'] = $this->admin->getTotalUsers();
		$data['question_count'] = $this->admin->getTotalQuestion();
		$data['newQuestion_count'] = $this->admin->getNewQuestionCount();
		$this->load->view('admin/dashboard',$data);
	}
}