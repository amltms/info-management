<!doctype html>
<html lang="en">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/site.css">
	
	<!-- Add favicon to the page -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico?t=' . time() . '" />
		
	<nav class="navbar navbar-expand-sm navbar-light bg-light" style="background-color: #e3f2fd;">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">UniChat</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Messages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Meetings</a>
				</li>
				<li class="nav-item">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				</li>
				<li class="nav-item">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</li>
			</ul>
			<?php session_start();
				if (isset($_SESSION['username'])) { // If user is logged in, display the logout and dashboard nav items?>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php session_start();
							echo(ucfirst($_SESSION['username'])); // Add the current username to the top corner?>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="logout.php">Logout</a>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profile.php">My profile</a>
					</li>
				</ul>
			<?php } else { ?>
				<ul class="nav navbar-nav navbar-right">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/pages/view/login">Login</a>
				</ul>
			<?php } ?>
		</div>
		</div>
	</nav>
  
	</head>
	<body>
