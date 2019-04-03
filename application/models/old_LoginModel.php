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
		
		$query = $this->db->get_where("Users", array("Email" => $inputs["email"]));
		$queryArray = $query->result_array();

		if ($queryArray) {
			if ($inputs["email"] == $queryArray[0]["Email"] && $inputs["password"] == $queryArray[0]["Password"]) {
				session_start();
				$_SESSION["name"] = $queryArray[0]["FirstName"]." ".$queryArray[0]["LastName"];
				header("Location: ".base_url());
			} else {
				return false;
			}
		}
	}
} ?>