<?php session_start();

class AuthUser extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public checkLogin() {
		$algorithm = "sha256"; // Using sha256 hashing
		$pwrdHash = hash($algorithm, $this->input->post("usernameInput"));
		$loginInfo = array("username" => $this->input->post("usernameInput"), "password" => $pwrdHash);
		
	}
		



}


?>