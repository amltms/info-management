<h2><?php echo $title; ?></h2>
<h3><?php echo $message['MessageTitle']; ?></h3>
<div class="main">
	<?php echo 'Message: '.$message['message'].'<br>'; ?>
	With: <a href="<?php echo base_url()."users/user/".$sender['UserID'] ?>"><?php echo $sender['FirstName'].' '.$sender['LastName']; ?></a>
</div>
<p><a href="<?php echo site_url('meetings/'.$message['MessageID']); ?>">View Message</a></p>
