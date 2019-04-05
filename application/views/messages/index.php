<div class="main">
	<h4><a href="<?php echo base_url()."users/user/".$user['UserID'] ?>"> <?php echo $user['FirstName'].' '.$user['LastName'];?></a><?php echo' - '.$message['MessageTitle']; ?></a></h4>
	<?php echo 'Message: '.$message['Message'].'<br>'; ?>
	<p><a href="<?php echo site_url('messages/create/'.$user['UserID']); ?>">Reply</a></p>
</div>
