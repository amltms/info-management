<?php
class Users_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function getUser($id){
    $query = $this->db->get_where('Users', array('UserID' => $id));
    return $query->row_array();
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
  
  public function checkLogin() {
    $algorithm = "sha256"; // Which hashing algorithm should be used
    $passwordHash = hash($algorithm, $this->input->post("passwordInput"));
    $inputs = array(
      "email" => $this->input->post("emailInput"),
      "password" => $passwordHash
    );

    $query = $this->db->get_where("users", array("email" => $inputs["email"]));
    $queryArray = $query->result_array();


    /*session_start();
    $_SESSION["name"] = $queryArray[0]["first_name"]." ".$queryArray[0]["last_name"];
    header("Location: ".base_url());*/

    //echo(var_dump($queryArray));
    if ($queryArray) {
      if ($inputs["email"] == $queryArray[0]["email"] && $inputs["password"] == $queryArray[0]["password"]) {
        session_start();
        $_SESSION["name"] = $queryArray[0]["first_name"]." ".$queryArray[0]["last_name"];
        header("Location: ".base_url());
      } else {
        return false;
      }
    }
  }
}


?>
