<div class="container-fluid">
	<h1><?php echo $profile["FirstName"]." ".$profile["LastName"]; ?></h1>
	<div class="row">
		<div class="col-3">
			<h6><?php echo $profile["Bio"]; ?></h6>
		</div>
		<div class="col-9">
			<h6><?php echo $profile["University"]; ?></h6> <hr>
			<h6><?php echo $profile["PhoneNumber"]; ?></h6>
			<h6><?php echo $profile["RoleID"]; ?></h6>
		</div>			
	</div>
</div>