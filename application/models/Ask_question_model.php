<?php 
/**
 * @author Dhyey Rathod
 */
class Ask_question_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_all_category()
	{
		$sql_str = "SELECT * FROM category";
		return $this->db->query($sql_str)->result();
	}
	public function get_store_question($category,$question,$member_id)
	{
		$sql_str = "INSERT INTO questions (fk_member_id,fk_category_id,question,created_by,display_status,created_date) 
		VALUES (".$this->db->escape($member_id).",".$this->db->escape($category).",".$this->db->escape($question).",".$this->db->escape($member_id).",TRUE,NOW())";
		return $this->db->query($sql_str) ;
	}
	public function getTotalQuestionByCategory($category_id='')
	{
		if ($category_id == 0) {
			$sql_str = "SELECT * FROM questions" ;
		} else {
			$sql_str = "SELECT * FROM questions WHERE fk_category_id = ".$category_id ;
		}
		return $this->db->query($sql_str)->num_rows();
	}
	public function getQuesionAnswerByCat($category_id='')
	{
		if ($category_id == 0) {
			$sql_str = "SELECT questions.id as id , questions.question as questions, questions.created_date as created_date , members.username as username FROM questions INNER JOIN members ON members.id = questions.created_by ";
		} else {
			$sql_str = "SELECT questions.id as id , questions.question as questions, questions.created_date as created_date , members.username as username FROM questions INNER JOIN members ON members.id = questions.created_by WHERE questions.fk_category_id=".$category_id ;
		}
		return $this->db->query($sql_str)->result();
	}
	public function getAnswersByquestionId($question_id='')
	{
		$sql_str = "SELECT * FROM answers WHERE fk_question_id=".$question_id ;
		return $this->db->query($sql_str)->result_array();	
	}
	public function getAnswerOfSingleQuestion($question_id='')
	{
		$sql_str = "SELECT * FROM answers WHERE fk_question_id = $question_id";
		return $this->db->query($sql_str)->result();
	}
	public function getAnsCountByQuestion($question_id='')
	{
		$sql_str = "SELECT * FROM answers WHERE fk_question_id = $question_id";
		return $this->db->query($sql_str)->num_rows();
	}
	public function getSingleQuestion($question_id='')
	{
		$sql_str = "SELECT * FROM questions WHERE id=$question_id";
		return $this->db->query($sql_str)->row();
	}
	public function getThreeQuestion()
	{
		$sql_str = "SELECT questions.id as id , questions.question as questions, questions.created_date as created_date , members.username as username FROM questions INNER JOIN members ON members.id = questions.created_by WHERE questions.display_status = true LIMIT 3";
		return $this->db->query($sql_str)->result();
	}
}
