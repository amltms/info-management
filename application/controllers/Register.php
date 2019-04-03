<?php
class Register extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("RegisterModel");
		$this->load->helper("url_helper");
	}

	public function register() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Register with UniChat';
		$this->form_validation->set_rules('firstNameInput', 'First name', 'required');
		$this->form_validation->set_rules('secondNameInput', 'Second name', 'required');
		$this->form_validation->set_rules('emailInput', 'Email address', 'required');
		$this->form_validation->set_rules('passwordInput', 'Password', 'required');
		$this->form_validation->set_rules('confirmPasswordInput', 'Confirm password', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('pages/register', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header', $data);
					$this->load->view('pages/register', $data);
			switch ($this->RegisterModel->checkRegister()) {
				case "passwords_no_match":
					$this->load->view('templates/passwords_no_match', $data);
					break;
				case "email_used":
					$this->load->view('templates/email_already_used', $data);
					break;
				case "invalid_email":
					$this->load->view('templates/invalid_email', $data);
					break;
				case "account_created":
					session_start();
					$_SESSION["account_created"] == true;
					header("Location: ".base_url());
					break;
			}
			$this->load->view('templates/footer');
		}
	}
} ?>