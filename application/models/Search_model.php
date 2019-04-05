<?php
class Search_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function getMeetings($search){
		$sql = "SELECT * FROM Meetings WHERE Subject LIKE '%$search%'";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		return $results;
	}
	public function getMessages($search){
		$sql = "SELECT * FROM Messages WHERE MessageTitle LIKE '%$search%'";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		return $results;
	}
	public function getUsers($search){
		$sql = "SELECT * FROM Users WHERE FirstName LIKE '%$search%'";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		return $results;
	}

} ?>
