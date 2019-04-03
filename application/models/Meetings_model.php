<?php
class Meetings_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function getMeetings($meeting = FALSE) {
   if ($meeting === FALSE) {
   $query = $this->db->get('Meetings');//add below
   $query = $this->db->get_where('Meetings', array('SenderID' => '1'));
   return $query->result_array();
   }
   $query = $this->db->get_where('Meetings', array('meetingID' => $meeting));
   $query2 = $this->db->get_where('Users', array('UserID' => $meeting));
   return $query->row_array();
  }

  public function setMeetings() {
    $this->load->helper('url');
    $data = array(
      'Subject' => $this->input->post('subject'),
      'MeetingDate' => $this->input->post('date'),
      'Location' => $this->input->post('location'),
      'SenderID' => '1',
      'RecieverID' => '2',

    );
    return $this->db->insert('Meetings', $data);
  }
}


?>
