<?php if (!function_exists("logout")) {
	function logout() {
		session_start();
		$_SESSION['username'] = array(); // Unset everything in the session
		session_destroy();
		header("Location: ".<?php echo base_url(); ?>);
	}
} ?>