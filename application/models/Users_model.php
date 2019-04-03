<?php
class Users_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function getUser($id){
    $query = $this->db->get_where('Users', array('UserID' => $id));
    return $query->row_array();
  }
}


?>
