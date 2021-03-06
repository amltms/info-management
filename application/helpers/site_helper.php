<?php 
// Logs the user out
if (!function_exists("logout")) {
	function logout() {
		session_start();
		$_SESSION['username'] = array(); // Unset everything in the session
		session_destroy();
		header("Location: ".base_url());
	}
} 

// Return the url of the assets directory
if (!function_exists("asset_url")) {
	function asset_url() {
		return base_url()."assets/";
	}
} 

// Return the url of the CSS directory
if (!function_exists("css_url")) {
	function css_url() {
		return asset_url()."css/";
	}
} 

// Return the url of the images directory
if (!function_exists("image_url")) {
	function image_url() {
		return asset_url()."images/";
	}
} 

// Return the url to view pages
if (!function_exists("page_url")) {
	function page_url() {
		return base_url()."pages/view/";
	}
} 

?>