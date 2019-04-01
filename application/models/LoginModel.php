<?php 
class LoginModel extends CI_Model { 
    public function __construct() {
		$this->load->database();         
	}
	
	public function checkLogin() {
		$algorithm = "sha256"; // Which hashing algorithm should be used
		$passwordHash = hash($algorithm, $this->input->post("passwordInput"));
		$inputs = array(
			"email" => $this->input->post("emailInput"),
			"password" => $passwordHash
		);
		
		$query = $this->db->get_where("users", array("email" => $inputs["email"]));
		$queryArray = $query->result_array();
		
		
		session_start();
		$_SESSION["name"] = $queryArray[0]["first_name"]." ".$queryArray[0]["last_name"];
		header("Location: ".base_url());

		/*
		if ($inputs["email"] == $queryArray[0]["email"] && $inputs["password"] == $queryArray[0]["password"]) {
			session_start();
			$_SESSION["name"] = $queryArray[0]["email"];
			header("Location: ".base_url());
		} else {
			return false;
		}*/
	}
} ?>