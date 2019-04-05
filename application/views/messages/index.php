<div class="main">
	<h4><a href="<?php echo base_url()."users/user/".$user['UserID'] ?>"> <?php echo $user['FirstName'].' '.$user['LastName'];?></a></h4>
	<p>Title<?php echo' - '.$message['MessageTitle']; ?></p>
	<p class="small"><?php echo($message["MessageDate"]); ?></p>
	<p>Message: <?php echo($message["Message"]); ?></p>
	<p><a href="<?php echo site_url('messages/create/'.$user['UserID']); ?>">Reply</a></p>
</div><hr>
