<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Gallery extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function index()
	{
		$data['newQuestion_count'] = $this->admin->getNewQuestionCount();
		$data['category_key'] = $this->admin->getAllCategory();
		$this->load->view('admin/gallery_form',$data);
	}
	public function image_process()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->load->library('upload', $this->friend->file_upload_config('gallery'));
		if ($this->upload->do_upload('exampleInputFile') && $this->form_validation->run()) {
			$this->admin->setGalleryImage($this->security->xss_clean($this->input->post('category')),$this->upload->data('file_name'));
			$this->session->set_flashdata('normal_success','Image Upload Successfully');
			redirect('admin/gallery/index');
		} else {
			$this->session->set_flashdata('image_error',$this->upload->display_errors());
			$this->session->set_flashdata('category_error',form_error('category'));
			redirect('admin/gallery/index');
		}	
	}
	public function image_list()
	{
		$data['newQuestion_count'] = $this->admin->getNewQuestionCount();
		$data['gallery_key'] = $this->admin->getAllGalleryImage();
		$this->load->view('admin/gallery_list',$data);
	}
	public function delete_image()
	{
		$image_id = $this->uri->segment(4);
		$this->admin->deleteImage($image_id);
		$this->session->set_flashdata('success','Delete Image Successfully');
		redirect('admin/gallery/image_list');
	}
}