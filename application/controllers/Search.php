<?php
class Search extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Search_model');
		$this->load->helper('url_helper');
	}
	
	public function search() {
		$data["title"] = "UniChat - Search";
		$search = $_GET["search"];
		$data["meetingsResults"] = $this->Search_model->getMeetings($search);
		$data["messagesResults"] = $this->Search_model->getMessages($search);
		$data["usersResults"] = $this->Search_model->getUsers($search);
		
		$this->load->view('templates/header', $data);
		if ($data["meetingsResults"]) {
			$this->load->view('search/meetings', $data);
		}
		if ($data["messagesResults"]) {
			$this->load->view('search/messages', $data);
		}
		if ($data["usersResults"]) {
			$this->load->view('search/users', $data);
		}
		if (empty($data["meetingsResults"]) && empty($data["messagesResults"]) && empty($data["usersResults"])) {
			$this->load->view('errors/search/nothing_found');
		}
		$this->load->view('templates/footer');
	}
	
} ?>
