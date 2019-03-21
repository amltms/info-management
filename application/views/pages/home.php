<?php if (isset($_SESSION['username'])) { ?>
	Logged in as <?php echo $_SESSION['username']; ?>, this is the home page.
<?php } else { ?>
	Welcome guest, this is the home page
	
<?php } ?>