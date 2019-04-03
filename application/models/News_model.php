<?php
class News_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function get_news($slug = FALSE) {
		if ($slug === FALSE) {
			$queery = $this->db->get("news");
			return $queery->result_array();
		}
		
		$queery = $this->db->get_where("news", array("slug" => $slug));
		return $queery->row_array();
	}
}