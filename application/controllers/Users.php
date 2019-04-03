<?php
class Users extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('users_model');
    $this->load->helper('url_helper');
  }

  public function login() {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['title'] = 'Login to UniChat';
    $this->form_validation->set_rules('emailInput', 'Email', 'required');
    $this->form_validation->set_rules('passwordInput', 'Password', 'required');
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('users/login', $data);
      $this->load->view('templates/footer');
    } else {
      if ($this->users_model->checkLogin() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('users/login', $data);
        $this->load->view('errors/login/error_invalid_password', $data);
        $this->load->view('templates/footer');
      }
    }
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
      $this->load->view('templates/header', $data);
          $this->load->view('users/register', $data);
      switch ($this->user_model->checkRegister()) {
        case "passwords_no_match":
          $this->load->view('errors/login/error_passwords_no_match', $data);
          break;
        case "email_used":
          $this->load->view('errors/login/error_email_already_used', $data);
          break;
        case "invalid_email":
          $this->load->view('errors/login/error_invalid_email', $data);
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

  public function logout(){
    session_start();
    $_SESSION['username'] = array(); // Unset everything in the session
    session_destroy();
    header("Location: ".base_url());
  }


}
?>
