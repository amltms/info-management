<?php
class Users_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function getUser($id){
		$query = $this->db->get_where('Users', array('UserID' => $id));
		return $query->row_array();
	}

	public function getUsers($id,$uni){
		$query = $this->db->get_where('Users', array('RoleID' => $id,'University' => $uni));
		return $query->row_array();
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
				$_SESSION["userID"] = $queryArray[0]["UserID"];
				header("Location: ".base_url());
			} else {
				return false;
			}
		}
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

		$query = $this->db->get_where("Users", array("Email" => $inputs["email"]));
		$queryArray = $query->result_array();

		if ($inputs["password"] != $inputs["confirmPassword"]) {
			return "passwords_no_match";
		} else if ($queryArray) {
			if ($queryArray[0]["Email"] === $inputs["email"]) {
				return "email_used";
			}
		} else {
			$account = array(
				"FirstName" => $this->input->post("firstNameInput"),
				"LastName" => $this->input->post("secondNameInput"),
				"Email" => $this->input->post("emailInput"),
				"Password" => hash($algorithm, $this->input->post("confirmPasswordInput"))
			);
			$this->db->insert('Users', $account);
			return "account_created";
		}
	}
} ?>
