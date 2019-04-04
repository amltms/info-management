<h2><?php echo $title; ?></h2>
<h3><?php echo $meetings_item['Subject']; ?></h3>
<div class="main">
	<?php echo 'Location: '.$meetings_item['Location'].'<br>'; ?>
	With: <a href="<?php echo base_url()."user/".$reciever['UserID'] ?>"><?php echo $reciever['FirstName'].' '.$reciever['LastName']; ?></a>
</div>
<p><a href="<?php echo site_url('meetings/'.$meetings_item['MeetingID']); ?>">View Meeting</a></p>
