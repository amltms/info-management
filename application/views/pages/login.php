<?php // Add custom login CSS ?>
<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>login.css">
<div class="center">
	<h3>Login to UniChat</h3>
	<?php echo form_open("login/login"); ?>
		<input type="text" name="usernameInput" placeholder="Username or email address"> <br>
		<input type="password" name="passwordInput" placeholder="Password"> <br>
		<input type="submit" name="loginButton" value="Login"> <br>
	</form>
	<hr>
	or
	<form method="get" action="<?php echo page_url(); ?>register">
		<button type="submit">Click to create an account</button>
	</form>
</div>