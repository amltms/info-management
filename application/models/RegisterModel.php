<?php 
class RegisterModel extends CI_Model { 
    public function __construct() {
		$this->load->database();         
	}
	
	public function checkRegister() {
		$algorithm = "sha256"; // Hashing algorithm used
		$inputs = array(
			$firstName = $this->input->post("firstNameInput"),
			$secondName = $this->input->post("secondNameInput"),
			$email = $this->input->post("emailInput"),
			$password = hash($algorithm, $this->input->post("passwordInput")),
			$confirmPassword = hash($algorithm, $this->input->post("confirmPasswordInput"))
		);
		
		if ($this->input->post("passwordInput") === $this->input->post("confirmPasswordInput")) {
			return true;
		} else {
			return false;
		}
	}
} ?>