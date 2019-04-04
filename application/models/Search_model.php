<?php
class Search_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function getMeetings($search){
		$query = $this->db->select('*')->from('Meetings')->where("Subject LIKE '%$search%'")->get();
		return $query->row_array();
	}
	public function getMessages($search){
		$query = $this->db->select('*')->from('Messages')->where("MessageTitle LIKE '%$search%'")->get();
		return $query->row_array();
	}
	public function getUsers($search){
		$query = $this->db->select('*')->from('Users')->where("FirstName LIKE '%$search%'")->get();
		return $query->row_array();
	}

} ?>
