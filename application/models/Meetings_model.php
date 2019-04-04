<?php
session_start();
class Meetings_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function getMeetings($meeting = FALSE) {
   if ($meeting === FALSE) {
   $query = $this->db->get('Meetings');//add below
   $query = $this->db->get_where('Meetings', array('SenderID' => $_SESSION["userID"],'RecieverID' => $_SESSION["userID"]));
   return $query->result_array();
   }
   $query = $this->db->get_where('Meetings', array('meetingID' => $meeting));
   return $query->row_array();
  }


  public function setMeetings() {
    $this->load->helper('url');
    $data = array(
      'Subject' => $this->input->post('subject'),
      'MeetingDate' => $this->input->post('date'),
      'Location' => $this->input->post('location'),
      'SenderID' => $_SESSION["userID"], // Make a session
      'RecieverID' => '2',

    );
    return $this->db->insert('Meetings', $data);
  }
}


?>
