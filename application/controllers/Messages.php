<?php
class Messages extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('messages_model');
    $this->load->model('users_model');
    $this->load->helper('url_helper');
  }

  public function index() {
    $data['recievedMessages'] = $this->messages_model->getRecievedMessages();
    $data['sentMessages'] = $this->messages_model->getSentMessages();
    $data['title'] = 'Messages';
    $this->load->view('templates/header', $data);
    foreach ($data['recievedMessages'] as $message):
      $data['message'] = $message;
      $data['user'] = $this->users_model->getUser($message['RecieverID']);
      $this->load->view('messages/index', $data);
    endforeach;
    $this->load->view('templates/header', $data);
    foreach ($data['sentMessages'] as $message):
      $data['message'] = $message;
      $data['user'] = $this->users_model->getUser($message['RecieverID']);
      $this->load->view('messages/index', $data);
    endforeach;
    $this->load->view('templates/footer');
  }

  public function create($userID = NULL) {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['title'] = 'Create a message';
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('message', 'Location', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $data['user'] = $this->users_model->getUser($userID);
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('messages/create', $data);
      $this->load->view('templates/footer');
    } else {
      $this->messages_model->createMessage();
      $this->load->view('messages/success');
    }
  }

}
?>
