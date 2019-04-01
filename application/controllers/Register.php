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
			if ($this->RegisterModel->checkRegister() == false) {
				echo("No match");
			}
		}
	}
} ?>