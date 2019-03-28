		<?php // Add custom login/register CSS ?>
		<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>login.css">
		<div class="login">
			<h3>Create an account</h3>
			<form method="post">
				<input type="text" name="nameInput" placeholder="Name"> <br>
				<input type="text" name="usernameInput" placeholder="Username"> <br>
				<input type="text" name="emailInput" placeholder="Email address"> <br>
				<input type="password" name="passwordInput" placeholder="Password"> <br>
				<input type="password" name="confirmPasswordInput" placeholder="Confirm Password"> <br>
				<input type="submit" name="registerButton" value="Create account"> <br>
			</form>
			<?php if (isset($_POST["usernameInput"]) && isset($_POST["passwordInput"])) { // If username and password textbox have values 
					$algorithm = "sha256"; // Which hashing algorithm should be used
					$pwrdHash = hash($algorithm, $_POST["passwordInput"]); // Hash passwords so they are not sent as plain text
				} ?>
		</div>