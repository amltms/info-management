<?php // Add custom login CSS ?>
<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>login.css">
<?php echo form_open("login/login"); ?>
	<input type="text" name="usernameInput" placeholder="Username or email address"> <br>
	<input type="password" name="passwordInput" placeholder="Password"> <br>
	<input type="submit" name="loginButton" value="Login">
</form>