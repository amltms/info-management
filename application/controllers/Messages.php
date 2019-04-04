<?php
class Messages extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('messages_model');
    $this->load->model('users_model');
    $this->load->helper('url_helper');
  }

  public function index() {
    $data['messages'] = $this->meetings_model->getMessages();
    $data['title'] = 'Messages';
    $this->load->view('templates/header', $data);
    foreach ($data['messages'] as $message):
      $data['message'] = $message;
      $data['sender'] = $this->users_model->getUser($message['senderID']);
      $this->load->view('messages/index', $data);
    endforeach;
    $this->load->view('templates/footer');
  }

  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['title'] = 'Create a message';
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('message', 'Location', 'required');
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('meetings/create');
      $this->load->view('templates/footer');
    } else {
      $this->messages_model->createMessage();
      $this->load->view('meetings/success');
    }
  }

}
?>
