<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Blog extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->library('pagination');
	}
	public function index()
	{
		$config['base_url'] = base_url('frontend/blog/index');
		$config['total_rows'] = $this->blog_model->getCountAllBlogs()->total ;
		$config['per_page'] = 9;
		
		$config['full_tag_open'] = "<ul class='clearfix'>";
    	$config['full_tag_close'] = '</ul>';

    	$config['num_tag_open'] = '<li>';
    	$config['num_tag_close'] = '</li>';

    	$config['cur_tag_open'] = '<li><a href="#" class="active">';
    	$config['cur_tag_close'] = '</a></li>';

    	$config['prev_tag_open'] = '<li class="prev">';
    	$config['prev_tag_close'] = '</a></li>';

    	$config['first_tag_open'] = '<li>';
    	$config['first_tag_close'] = '</li>';

    	$config['last_tag_open'] = '<li>';
    	$config['last_tag_close'] = '</li>';

    	$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_link'] = '<i class="fa fa-angle-right"></i>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
		    
		$this->pagination->initialize($config);
		$data['blog_data'] = $this->blog_model->getAllBlogs($config['per_page'],$this->uri->segment(4));
		$this->load->view('frontend/blog',$data);
	}
	public function details()
	{
		$blog_id = $this->uri->segment(2) ? $this->uri->segment(2) : 0 ;
		$data['blog_details'] = $this->blog_model->getSingleBlogDetails($blog_id);
		$data['comments_key'] = $this->blog_model->getBlogcomments($blog_id);
		$this->load->view('frontend/blog_detail',$data);
	}
	public function comments_process()
	{
		if ($this->friend->isLogin()) {
			$user_id = $this->session->userdata('user_id');
			$message = $this->security->xss_clean($this->input->post('message'));
			$blog_id = $this->security->xss_clean($this->input->post('blog_id'));
			if ($this->blog_model->setCommetnts($user_id,$message,$blog_id)) {
				$this->session->set_flashdata('login_faild','Successfully Uploaded');
				$blog_url = base_url('blog_detail')."/".$blog_id."/".$this->input->post('blog_title');
				redirect($blog_url);
			}
		} else {
			$this->session->set_flashdata('ask_question_flash','First You have to login before Posing Comments');
			redirect('authentication');
		}
	}
	public function tagCloud()
	{
		$tag = $this->uri->segment(2);
		$config['base_url'] = base_url('frontend/blog/index')."/".$tag;
		$config['total_rows'] = $this->blog_model->getCountAllBlogs()->total ;
		$config['per_page'] = 9;
		
		$config['full_tag_open'] = "<ul class='clearfix'>";
    	$config['full_tag_close'] = '</ul>';

    	$config['num_tag_open'] = '<li>';
    	$config['num_tag_close'] = '</li>';

    	$config['cur_tag_open'] = '<li><a href="#" class="active">';
    	$config['cur_tag_close'] = '</a></li>';

    	$config['prev_tag_open'] = '<li class="prev">';
    	$config['prev_tag_close'] = '</a></li>';

    	$config['first_tag_open'] = '<li>';
    	$config['first_tag_close'] = '</li>';

    	$config['last_tag_open'] = '<li>';
    	$config['last_tag_close'] = '</li>';

    	$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_link'] = '<i class="fa fa-angle-right"></i>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
		    
		$this->pagination->initialize($config);
		$data['blog_data'] = $this->blog_model->getAllBlogs($config['per_page'],$this->uri->segment(5),$tag);
		$this->load->view('frontend/blog',$data);
	}
}
