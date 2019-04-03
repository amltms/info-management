<?php
class Register extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("users_model");
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
			$this->load->view('users/register', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->RegisterModel->checkRegister() == false) {
				echo("No match");
			}
		}
	}

  public function login() {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['title'] = 'Login to UniChat';
    $this->form_validation->set_rules('emailInput', 'Email', 'required');
    $this->form_validation->set_rules('passwordInput', 'Password', 'required');
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/login', $data);
      $this->load->view('templates/footer');
    } else {
      if ($this->LoginModel->checkLogin() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('pages/login', $data);
        $this->load->view('templates/invalid_password', $data);
        $this->load->view('templates/footer');
      }
    }
} ?>
