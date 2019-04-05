<?php
class Messages_model extends CI_Model {
  public function __construct() {
    $this->load->database();
    session_start();
  }

  public function getSentMessages() {
    $query = $this->db->get_where('Messages', array('SenderID' => $_SESSION["userID"]));
    return $query->result_array();
  }

  public function getRecievedMessages() {
    $query = $this->db->get_where('Messages', array('RecieverID' => $_SESSION["userID"]));
    return $query->result_array();
  }

  public function createMessage() {
    date_default_timezone_set('Europe/London');
    $dateTime = date('Y-m-d H:i:s', time());
    $this->load->helper('url');
    $query = $this->db->get_where('Users', array('Email' => $this->input->post('email')));
    $ret = $query->row();

    $data = array(
      'MessageTitle' => $this->input->post('title'),
      'Message' => $this->input->post('message'),
      'MessageDate' => $dateTime,
      'SenderID' => $_SESSION["userID"],
      'RecieverID' => $ret->UserID,

    );
    return $this->db->insert('Messages', $data);
  }
}


?>
