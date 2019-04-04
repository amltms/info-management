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
	<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>site.css">
	
	<?php $this->load->helper("site_helper"); // Load site helper ?>
	
	<!-- Add favicon to the page -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico?t='.time().'" />
		
	<nav class="navbar navbar-expand-sm navbar-light bg-light" style="background-color: #e3f2fd;">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">UniChat</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>messages">Messages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>meetings">Meetings</a>
				</li>
			</ul>
			
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					</li>
					<li class="nav-item">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</li>
					<?php session_start();
					if (isset($_SESSION["name"])) { // If user is logged in, display the logout and dashboard nav items?>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo(ucfirst($_SESSION["name"]." ⮟")); // Add name to the top corner as a drop down title ?>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="<?php echo base_url()."users/user/".$_SESSION["userID"]; ?>">Profile</a>
								<a class="dropdown-item" href="<?php echo base_url(); ?>users/edit-profile">Update profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>users/logout">Logout</a>
							</div>
						</a>
					</li>

				</ul>
			<?php } else { ?>
				<ul class="nav navbar-nav navbar-right">
					<a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
				</ul>
			<?php } ?>
		</div>
		</div>
	</nav>
  
	</head>
	<body>
