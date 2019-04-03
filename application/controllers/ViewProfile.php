<?php
class ViewProfile extends CI_Controller {
	public function view($page = "home") {
		if (!file_exists(APPPATH."views/pages/".$page.".php")) { // If no page found
			show_404();
		}
		
		$this->load->helper("url"); // Load url helper
		
		$data["title"] = "UniChat - ".ucfirst($page); // Makes first letter capital
		
		$this->load->view("templates/header", $data);
		// profile view goes here
		$this->load->view("templates/footer", $data);
	}
}