<?php if (isset($_SESSION['name'])) { ?>
	Logged in as <?php echo $_SESSION['name']; ?>, this is the home page.
<?php } else { ?>
	Welcome guest, this is the home page
<?php date_default_timezone_set('Europe/London');
	$dateTime = date('Y-m-d H:i:s', time());
	echo $dateTime;
} ?>