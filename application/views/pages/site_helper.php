<?php if (!function_exists("logout")) {
	function logout() {
		session_start();
		$_SESSION['username'] = array(); // Unset everything in the session
		session_destroy();
		header("Location: ".base_url());
	}
} ?>