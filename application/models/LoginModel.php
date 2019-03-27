<?php 
class LoginModel extends CI_Model { 
    public function __construct() {
		$this->load->database();         
	}
	
	public function checkLogin() {
		$algorithm = "sha256"; // Which hashing algorithm should be used
		$passwordHash = hash($algorithm, $this->input->post("passwordInput"));
		$inputs = array(
			"username" => $this->input->post("usernameInput"),
			"password" => $passwordHash
		);
		
		$query = $this->db->get_where("users", array("username" => $inputs["username"]));
		$queryArray = $query->result_array();
		if ($inputs["username"] == $queryArray[0]["username"] && $inputs["password"] == $queryArray[0]["password"]) {
			/*$_SESSION['username'] = $queryArray[0]["username"]; 
			header("Location: ".base_url());
			echo ("abc");
			echo($_SESSION["username"]);*/
			return $queryArray[0]["username"];
		} else {
			return false;
		}
	}
}
?>