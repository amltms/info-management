		<?php // Add custom login CSS ?>
		<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>login.css">
		<div class="login">
			<h3>Login to UniChat</h3>
			<form method="post">
				<input type="text" name="usernameInput" placeholder="Username or email address"> <br>
				<input type="password" name="passwordInput" placeholder="Password"> <br>
				<input type="submit" name="loginButton" value="Login"> <br>
			</form>
			<hr>
			or
			<form action="<?php echo base_url(); ?>index.php/pages/view/register" method="post">
				<input type="submit" name="createAccount" value="Create an account" /> <?php // post createAccount and refresh the page ?>
			</form>
			<?php if (isset($_POST["usernameInput"]) && isset($_POST["passwordInput"])) { // If username and password textbox have values 
					$algorithm = "sha256"; // Which hashing algorithm should be used
					$pwrdHash = hash($algorithm, $_POST["passwordInput"]); // Hash passwords so they are not sent as plain text
					if ($_POST["usernameInput"] == "test" && $_POST["passwordInput"] == "test") {
						$_SESSION['username'] = "test"; 
						header("Location: ".base_url());
					} else { ?>
						<br>
						<h6 class="text-danger">Invalid username or password, please try again.</h6>
					<?php }
				} ?>
		</div>