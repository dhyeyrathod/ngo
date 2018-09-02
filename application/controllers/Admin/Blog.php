<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Blog extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function add_blog()
	{
		$data['newQuestion_count'] = $this->admin->getNewQuestionCount();
		$this->load->view('admin/add_blog',$data);
	}
	public function add_blog_process()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('tags', 'Tags', 'required');
			$this->load->library('upload', $this->friend->file_upload_config());
			if ($this->form_validation->run() && $this->upload->do_upload('blog_image')) {
				$response = $this->admin->store_blog($this->input->post(),$this->upload->data('file_name'),$this->session->userdata('admin_id'));
				if ($response) {
					$this->session->set_flashdata('normal_success',"Your Blog Submmited Successfully...!!");
					redirect('admin/blog/add_blog');
				} else {
					$this->session->set_flashdata('normal_error',"Some Error Not Submited your Blog");
					redirect('admin/blog/add_blog');
				}
			} else {
				$this->session->set_flashdata('validation_error_image',$this->upload->display_errors());
				$this->session->set_flashdata('validation_error_title',form_error('title'));
				$this->session->set_flashdata('validation_error_description',form_error('description'));
				$this->session->set_flashdata('validation_error_tags',form_error('tags'));
				redirect('admin/blog/add_blog');
			}
		}
	}
	public function blog_list()
	{
		$data['newQuestion_count'] = $this->admin->getNewQuestionCount();
		$data['getAllBlogs_key'] = $this->admin->getAllBlogs();
		$this->load->view('admin/blog_list',$data);
	}
	public function deleteBlogProcess()
	{
		if ($this->admin->blogDelete($this->uri->segment(4))) {
			$this->session->set_flashdata('success', 'Blog Delete Successfully');
			redirect('admin/blog/blog_list');
		} else {
			$this->session->set_flashdata('error', 'Error While Deleteing blogs');
			redirect('admin/blog/blog_list');
		}
	}
}
