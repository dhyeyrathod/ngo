<?php
/**
 * @author Dhyey Rathod
 */
class Blog_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAllBlogs($limit = 0, $offset = 0,$tag='')
	{
		if ($tag=='') {
			$sql_str = "SELECT blog.id as id , title , description , image , blog.status , created_date , comment_count , username  FROM blog INNER JOIN admin ON blog.created_by=admin.id ORDER BY `admin`.`username` ASC LIMIT ".$limit." OFFSET ".($offset == '' ? '0' : $offset);
		} else {
			$sql_str = "SELECT blog.id as id , title , description , image , blog.status , created_date , comment_count , username FROM `blog` INNER JOIN admin ON blog.created_by=admin.id WHERE `tags` LIKE '%".$tag."%' ORDER BY `admin`.`username` ASC LIMIT ".$limit." OFFSET ".($offset == '' ? '0' : $offset);
		}
		return $this->db->query($sql_str)->result();
	}
	public function getCountAllBlogs()
	{
		$sql_str = "SELECT COUNT(*) as total FROM blog";
		return $this->db->query($sql_str)->row();
	}
	public function getSingleBlogDetails($blog_id)
	{
		$sql_str = "SELECT blog.id as id , title , description , image , blog.status as status , tags , created_date , created_by , comment_count , username , email , contact  FROM blog INNER JOIN admin ON blog.created_by=admin.id WHERE blog.id = $blog_id ORDER BY `admin`.`username` ASC";
		return $this->db->query($sql_str)->row();
	}
	public function setCommetnts($id,$message,$blog_id)
	{
		$sql_str = "INSERT INTO blog_comments SET fk_blog_id = ".$this->db->escape($blog_id)." , comments = ".$this->db->escape($message).",user_id = ".$this->db->escape($id).", created_by = ".$this->db->escape($id).", created_date = NOW()";
		return $this->db->query($sql_str);
	}
	public function getBlogcomments($blog_id)
	{
		$sql_str = "SELECT blog_comments.id as id,blog_comments.comments as comments , blog_comments.created_date as created_date,members.username as username FROM blog_comments INNER JOIN members ON blog_comments.user_id = members.id WHERE fk_blog_id = $blog_id";
		return $this->db->query($sql_str)->result();
	}
	public function getAllCountry()
	{
		$sql_str = "SELECT * FROM countries";
		return $this->db->query($sql_str)->result();	
	}
	public function getAllCitiesbyCountry($country_id)
	{
		$sql_str = "SELECT * FROM cities WHERE country_id = ".$this->db->escape($country_id) ;
		return $this->db->query($sql_str)->result();
	}
	public function getAllGalleryImage()
	{
		$sql_str = "SELECT gallery.id as id , gallery.created_date as created_date , category_name , image_name FROM gallery INNER JOIN category ON gallery.fk_category_id = category.id ";
		return $this->db->query($sql_str)->result();
	}
	public function setVolunteerData($name,$phone,$email,$comments,$option_json,$country,$city)
	{
		$sql_str = "INSERT INTO volunteer SET name = ".$this->db->escape($name).",country = ".$this->db->escape($country).",city = ".$this->db->escape($city)." , phone = ".$this->db->escape($phone).", email = ".$this->db->escape($email).",comments = ".$this->db->escape($comments).",option_json = ".$this->db->escape($option_json).",created_date = NOW()";
		return $this->db->query($sql_str);
	}
}
