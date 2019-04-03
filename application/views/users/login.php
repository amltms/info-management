<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>login.css">
<div class="center">
	<h3>Login to UniChat</h3>
	<?php echo form_open("users/login"); ?>
		<input type="text" name="emailInput" placeholder="Email address" value="<?php echo(set_value("emailInput"))?>"> <br>
		<input type="password" name="passwordInput" placeholder="Password"> <br>
		<input type="submit" name="loginButton" value="Login"> <br>
	</form>
	<hr>
	or
	<form method="get" action="<?php echo base_url(); ?>register">
		<button type="submit">Click to create an account</button> <br>
	</form>
	<?php if ((set_value("emailInput") && !set_value("passwordInput")) || (!set_value("emailInput") && set_value("passwordInput"))) { ?>
		<p class="center text-danger">Please complete both email and password fields.</p>
	<?php } ?>
</div>
