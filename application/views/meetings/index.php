<h2><?php echo $title; ?></h2>
  <h3><?php echo $meetings_item['Subject']; ?></h3>
  <div class="main">
    <?php echo 'Location: '.$meetings_item['Location'].'<br>'; ?>
    <?php echo 'With: '.$reciever['FirstName'].' '.$reciever['LastName']; ?>
  </div>
  <p><a href="<?php echo site_url('meetings/'.$meetings_item['MeetingID']); ?>">View Meeting</a></p>
