<?php // Add custom register/login CSS ?>
<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>login.css">
<div class="center">
	<h3>UniChat create account</h3>
	<?php echo form_open("users/register"); ?>
		<input type="text" name="firstNameInput" placeholder="First name" value="<?php echo(set_value("firstNameInput"))?>"> <br>
		<input type="text" name="secondNameInput" placeholder="Second name" value="<?php echo(set_value("secondNameInput"))?>"> <br>
		<input type="text" name="emailInput" placeholder="Email address" value="<?php echo(set_value("emailInput"))?>"> <br>
		<input type="password" name="passwordInput" placeholder="Password"> <br>
		<input type="password" name="confirmPasswordInput" placeholder="Confirm password"> <br>
		<input type="submit" name="registerButton" value="Create account"> <br>
	</form>
	<?php// if (set_value("firstNameInput") || set_value("secondNameInput") || set_value("emailInput") || set_value("passwordInput") || set_value("confirmPasswordInput")) { ?>
		<!--<p class="center text-danger">Please complete all fields</p>-->
	<?php //} ?>
</div>
