<?php 
class RegisterModel extends CI_Model { 
    public function __construct() {
		$this->load->database();         
	}
	
	public function checkRegister() {
		$algorithm = "sha256"; // Hashing algorithm used
		$inputs = array(
			"firstName" => $this->input->post("firstNameInput"),
			"secondName" => $this->input->post("secondNameInput"),
			"email" => $this->input->post("emailInput"),
			"password" => hash($algorithm, $this->input->post("passwordInput")),
			"confirmPassword" => hash($algorithm, $this->input->post("confirmPasswordInput"))
		);
		
		$query = $this->db->get_where("users", array("email" => $inputs["email"]));
		$queryArray = $query->result_array();
		
		if ($inputs["password"] != $inputs["confirmPassword"]) {
			return "passwords_no_match";
		} else if ($queryArray) {
			if ($queryArray[0]["email"] === $inputs["email"]) {
				return "email_used";
			} 
		} else { 
			return "account_created";
		}
	}
} ?>