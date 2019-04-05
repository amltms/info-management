<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>site.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h3>Meetings</h3>
			<form method="get" action="<?php echo base_url(); ?>meetings/create">
				<button type="submit" style="width=100%">Create a new meeting</button> <br>
			</form>
		</div>			
	</div>
	<div class="row">
		<div class="col-3">
			Subject
		</div>	
		<div class="col-3">
			Location
		</div>	
		<div class="col-3">
			With
		</div>	
		<div class="col-3">
		</div>	
	</div>
</div>