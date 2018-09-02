<?php 
/**
 * @author Dhyey Rathod
 */
class Gallery extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	}
	public function index()
	{
		$data['blog_model_key'] = $this->blog_model->getAllGalleryImage();
		$this->load->view('frontend/gallery',$data);
	}
}