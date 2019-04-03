<?php // Add custom register/login CSS ?>
<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>login.css">
<div class="center">
	<h3>UniChat create account</h3>
	<?php echo form_open("register/register"); ?>
		<input type="text" name="firstNameInput" placeholder="First name"> <br>
		<input type="text" name="secondNameInput" placeholder="Second name"> <br>
		<input type="text" name="emailInput" placeholder="Email address"> <br>
		<input type="password" name="passwordInput" placeholder="Password"> <br>
		<input type="password" name="confirmPasswordInput" placeholder="Confirm password"> <br>
		<input type="submit" name="registerButton" value="Create account"> <br>
	</form>
</div>