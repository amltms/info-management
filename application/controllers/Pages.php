<?php
class Pages extends CI_Controller {
	public function view($page = "home") {
		if (!file_exists(APPPATH."views/pages/".$page.".php")) { // If no page found
			show_404();
		}
		//session_start();
		//if (isset($_SESSION["name"];
		
		$this->load->helper("url"); // Load url helper
		
		$data["title"] = "UniChat - ".ucfirst($page); // Makes first letter capital
		
		if (isset($_SESSION["account_created"])) {
			$_SESSION["account_created"] = null;
			$this->load->view("templates/header", $data);
			$this->load->view("templates/account_created", $data);
			$this->load->view("pages/".$page, $data);
			$this->load->view("templates/footer", $data);
		} else { 
			$this->load->view("templates/header", $data);
			$this->load->view("pages/".$page, $data);
			$this->load->view("templates/footer", $data);
		}
	}
}