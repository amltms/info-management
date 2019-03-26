<?php 
class LoginModel extends CI_Model { 
    public function __construct() {
		$this->load->database();         
	}
	
	public function check_user($username, $password) {
		$query = $this->db->get_where("users", array("username" => $username));
		//return $query->result_array();
		echo ("abc");
		}
	}
}
