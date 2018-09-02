<?php
/**
 * @author Dhyey Rathod
 */
class Friend 
{
	public function getMemberId()
	{
		$CI = get_instance();
		$CI->load->library('session');
		if ($CI->session->userdata('logged_in')) {
			return $CI->session->userdata('user_id');
		} else {
			return null;
		}
	}
	public function file_upload_config($location='')
	{
		if ($location == 'gallery') {
			$config['upload_path'] = './assets/gallery_image/';
		} else {
			$config['upload_path'] = './assets/blog_images/';
		}
		$config['allowed_types'] = 'gif|jpg|png|JPEG';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';	
		$config['encrypt_name']  = TRUE;	
		return $config ;
	}
	public function pagination_config($total_rows)
	{
		$config['base_url'] = base_url($this->config->item('pagination_config_base_url'));
		$config['total_rows'] = $this->config->item('pagination_config_total_rows'); 
		$config['per_page'] = $this->config->item('pagination_config_per_page');
		return $config ;
	}
	public function check_numeric($value='')
	{
		$flag = true ; 
		if (!is_numeric($value)) {
			$flag = false ; 
		} else {
			$flag = true ; 
		}
		return $flag ; 
	}
	public function getPageTitle()
	{
		return "MAVA India";
	}
	public function isLogin()
	{
		$CI = get_instance();
        $CI->load->library('session');
		if ($CI->session->userdata('user_id')) {
			return true ;
		} else {
			return false ;
		}
	}
}
