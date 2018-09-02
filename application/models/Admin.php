<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Admin extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getTotalUsers()
	{
		$sql_str = "SELECT count(*) as total_member From members";
		return $this->db->query($sql_str)->row();
	}
	public function getTotalQuestion()
	{
		$sql_str = "SELECT count(*) as total_question From questions";
		return $this->db->query($sql_str)->row();
	}
	public function getNewQuestionCount()
	{
		$sql_str = "SELECT count(*) as total_newquestion FROM questions WHERE answer_status=FALSE";
		return $this->db->query($sql_str)->row();
	}
	public function newQuestion()
	{
		$sql_str = "SELECT questions.id AS id , questions.question AS question , category.category_name as category , questions.display_status as display_status FROM questions INNER JOIN category ON questions.fk_category_id=category.id WHERE questions.answer_status=FALSE";
		return $this->db->query($sql_str)->result();
	}
	public function change_status($question_id , $status)
	{
		$sql_str = "UPDATE questions SET display_status='$status' WHERE id='$question_id'";
		return $this->db->query($sql_str);
	}
	public function getSingleQuestionData($question_Id)
	{
		$sql_str = "SELECT * FROM questions WHERE id=$question_Id";
		return $this->db->query($sql_str)->row();
	}
	public function storeAnswer($answer,$question_id,$admin_id)
	{
		$this->db->trans_begin();
		$sql_str_ans = "INSERT INTO answers (fk_question_id , fk_admin_id , answer , created_date) VALUES ('".$question_id."','".$admin_id."','".$answer."',NOW())";
		$this->db->query($sql_str_ans);
		$sql_str = "UPDATE questions SET fk_responsable_admin_id = ".$admin_id.", answer_status = TRUE WHERE id = '".$question_id."'";
		$this->db->query($sql_str);
		if ($this->db->trans_status()) {
			$this->db->trans_commit();
			return true ;
		} else {
			$this->db->trans_rollback();
			return false ;
		}
	}
	public function delete_question($question_id)
	{
		$this->db->trans_begin();
		$sql_str_1 = "DELETE FROM questions WHERE id=$question_id";
		$this->db->query($sql_str_1);
		$sql_str_2 = "DELETE FROM answers WHERE fk_question_id=$question_id";
		$this->db->query($sql_str_2);
		if ($this->db->trans_status()) {
			$this->db->trans_commit();
			return true ;
		} else {
			$this->db->trans_rollback();
			return false ;
		}
	}
	public function store_blog($data_array = array() , $file_name , $admin_id)
	{
		$sql_str = "INSERT INTO blog SET title=".$this->db->escape($data_array['title']).",description =".$this->db->escape($data_array['description']).",tags =".$this->db->escape($data_array['tags']).",image =".$this->db->escape($file_name).",status = 1 , created_date = NOW() , created_by = '".$admin_id."'";
		return $this->db->query($sql_str) ;
	}
	public function getAllAnswerdQuestion()
	{
		$sql_str = "SELECT questions.id AS id , questions.question AS question , category.category_name as category , questions.display_status as display_status FROM questions INNER JOIN category ON questions.fk_category_id=category.id WHERE questions.answer_status=TRUE";
		return $this->db->query($sql_str)->result() ;
	}
	public function getAllBlogs()
	{
		$sql_str = "SELECT * FROM blog";
		return $this->db->query($sql_str)->result() ;
	}
	public function blogDelete($blog_id)
	{
		$sql_str = "DELETE FROM blog WHERE id = ".$this->db->escape($blog_id);
		return $this->db->query($sql_str);
	}
	public function getAllCategory()
	{
		$sql_str = "SELECT * FROM category";
		return $this->db->query($sql_str)->result();
	}
	public function setGalleryImage($category_id,$image)
	{
		$sql_str = "INSERT INTO gallery SET image_name = ".$this->db->escape($image).", fk_category_id = ".$this->db->escape($category_id).", created_date = NOW() , status = true";
		return $this->db->query($sql_str);
	}
	public function getAllGalleryImage()
	{
		$sql_str = "SELECT gallery.id as id , gallery.created_date as created_date , category_name , image_name FROM gallery INNER JOIN category ON gallery.fk_category_id = category.id ";
		return $this->db->query($sql_str)->result();
	}
	public function deleteImage($image_id)
	{
		$sql_str = "DELETE FROM gallery WHERE id = '$image_id'";
		return $this->db->query($sql_str);
	}
}
