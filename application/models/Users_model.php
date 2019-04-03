<?php
class Users_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function getUser($id){
    $query = $this->db->get_where('Users', array('UserID' => $id));
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


    /*session_start();
    $_SESSION["name"] = $queryArray[0]["first_name"]." ".$queryArray[0]["last_name"];
    header("Location: ".base_url());*/

    //echo(var_dump($queryArray));
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
      if ($queryArray[0]["Email"] === $inputs["email"]) {
        return "email_used";
      }
    } else {
      return "account_created";
    }
  }
}


?>
