<?php session_start();

class UserAuth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		// Load libraries
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->library("session");

		// Open login page
		public function showLogin() {
			$this->load->view("login");
		}

		// Open register page
		public function showRegister() {
			$this->load->view("register");
		}






}


?>