<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>site.css">
<div class="editprofile">
	<div class="container-fluid">
		<h1 style="text-align:center"><?php echo "Edit profile - ".$profile["FirstName"]." ".$profile["LastName"]; ?></h1>
		<?php echo form_open("users/editprofile"); ?>
		<div class="row">
			<div class="col-6">
				First name:
			</div>
			<div class="col-0">
				<input type="text" name="firstNameInput" placeholder="First name" value="<?php echo($profile["FirstName"]) ?>">
			</div>	
		</div>
		<div class="row">
			<div class="col-6">
				Last name:
			</div>
			<div class="col-0">
				<input type="text" name="lastNameInput" placeholder="Last name" value="<?php echo($profile["LastName"]) ?>">
			</div>			
		</div>
		<div class="row">
			<div class="col-6">
				Email:
			</div>
			<div class="col-0">
				<input type="text" name="emailInput" placeholder="Email address" value="<?php echo($profile["Email"]) ?>">
			</div>			
		</div>
		<div class="row">
			<div class="col-6">
				University:
			</div>
			<div class="col-0">
				<input type="text" name="universityInput" placeholder="University" value="<?php echo($profile["University"]) ?>">
			</div>			
		</div>
		<div class="row">
			<div class="col-6">
				Bio:
			</div>	
			<div class="col-0">
				<textarea rows="4" cols="36" name="bioInput" placeholder="Bio"><?php echo($profile["Bio"]) ?></textarea>
			</div>			
		</div>
		<div class="row">
			<div class="col-6">
				Phone:
			</div>	
			<div class="col-0">
				<input type="text" name="phoneInput" placeholder="Phone number" value="<?php echo($profile["PhoneNumber"]) ?>">
			</div>			
		</div>
		<div class="row">
			<div class="col-8">
				<input type="submit" name="saveButton" value="Save">
			</div>	
		</div>
		<div class="row">
			<div class="col-8">
				<input type="submit" name="cancelButton" value="Cancel">	
			</div>
		</div>
		</form>
	</div>
</div>