<?php
session_start();
class Messages_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function getMessages($user = FALSE) {
   if ($user === FALSE) {
   $query = $this->db->get('Messages');//add below
   $query = $this->db->get_where('Messages', array('RecieverID' => $_SESSION["userID"]));
   return $query->result_array();
   }
   $query = $this->db->get_where('Meetings', array('SenderID' => $user));
   return $query->row_array();
  }


  public function createMessage() {
    date_default_timezone_set('Europe/London');
    $dateTime = date('Y-m-d H:i:s', time());
    $this->load->helper('url');
    $data = array(
      'MessageTitle' => $this->input->post('title'),
      'Message' => $this->input->post('message'),
      'MessageDate' => $dateTime,
      'SenderID' => $_SESSION["userID"],
      'RecieverID' => '2',

    );
    return $this->db->insert('Meetings', $data);
  }
}


?>
