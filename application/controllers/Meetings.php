<?php
class Meetings extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('meetings_model');
    $this->load->model('users_model');
    $this->load->helper('url_helper');
  }

  public function index() {
    $data['meetings'] = $this->meetings_model->getMeetings();
    $data['title'] = 'Meetings';
    $this->load->view('templates/header', $data);
    foreach ($data['meetings'] as $meetings_item):
      $data['meetings_item'] = $meetings_item;
      $data['reciever'] = $this->users_model->getUser($meetings_item['RecieverID']);
      $this->load->view('meetings/index', $data);
    endforeach;
    $this->load->view('templates/footer');
  }

  public function view($meeting = NULL) {
   $data['meetings_item'] = $this->meetings_model->getMeetings($meeting);
   if (empty($data['meetings_item'])) {
     show_404();
   }
   $data['title'] = $data['meetings_item']['Subject'];
   $data['reciever'] = $this->users_model->getUser($data['meetings_item']['RecieverID']);
   $this->load->view('templates/header', $data);
   $this->load->view('meetings/view', $data);
   $this->load->view('templates/footer');
  }

  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['title'] = 'Create a meetings item';
    $this->form_validation->set_rules('subject', 'Title', 'required');
    $this->form_validation->set_rules('location', 'Location', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    if ($this->form_validation->run() === FALSE) {
      $data['lecturers'] = $this->users_model->getUsers(2,"Bournemouth University");
      $this->load->view('templates/header', $data);
      $this->load->view('meetings/create', $data);
      $this->load->view('templates/footer');
    } else {
      $this->meetings_model->setMeetings();
      $this->load->view('meetings/success');
    }
  }
}
?>
