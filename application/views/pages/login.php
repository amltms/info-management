		<div class="center">
			<h3>Login to UniChat</h3>
				<input type="text" name="usernameInput" placeholder="Username or email address"> <br>
			<form method="post">
				<input type="password" name="passwordInput" placeholder="Password"> <br>
				<input type="submit" name="loginButton" text="Login">
			</form>
			<hr>
			or
			<form action="login.php" method="post">
				<input type="submit" name="createAccount" value="Create an account" /> <?php // post createAccount and refresh the page ?>
			</form>
			<?php if (isset($_POST["usernameInput"]) && isset($_POST["passwordInput"])) { // If username and password textbox have values 
					$algorithm = "sha256"; // Which hashing algorithm should be used
					$pwrdHash = hash($algorithm, $_POST["passwordInput"]); // Hash passwords so they are not sent as plain text
				} ?>
		</div>