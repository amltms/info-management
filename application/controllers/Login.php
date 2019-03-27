<?php
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("LoginModel");
		$this->load->helper("url_helper");
	}
	
	/*public function index() {
		$data = $this->LoginModel->checkLogin();
		$data["title"] = "Login to UniChat";
		
		$this->load->view("templates/header", $data);
		$this->load->view("pages/login", $data);
		$this->load->view("templates/footer");
	}*/

	public function login() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Login to UniChat';
		$this->form_validation->set_rules('usernameInput', 'Username', 'required');
		$this->form_validation->set_rules('passwordInput', 'Password', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('pages/login', $data);
			$this->load->view('templates/footer');
		} else {
			$loginAttempt = $this->LoginModel->checkLogin();
			if ($loginAttempt != false) {
				session_start();
				$_SESSION['username'] = $loginAttempt; 
				header("Location: ".base_url());
			} else {
				echo("Invalid username or password");
			}
		}
	}
}