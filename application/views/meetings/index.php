<link rel="stylesheet" type="text/css" href="<?php echo css_url(); ?>site.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<h3><?php echo $meetings_item['Subject']; ?></h3>
		</div>	
		<div class="col-3">
			<?php echo $meetings_item['Location'].'<br>'; ?>
		</div>	
		<div class="col-3">
			<a href="<?php echo base_url()."user/".$reciever['UserID'] ?>"><?php echo $reciever['FirstName'].' '.$reciever['LastName']; ?></a>
		</div>	
		<div class="col-3">
			<form method="get" action="<?php echo base_url().'meetings/'.$meetings_item['MeetingID']; ?>">
				<button type="submit">View</button> <br>
			</form>
		</div>			
	</div>
</div>