<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('meetings/create'); ?>
  <label for="subject">Subject</label>
  <input type="input" name="subject" /><br />
  <label for="date">Date</label>
  <input type="datetime-local" name="date"><br>
  <label for="location">Location</label>
  <input type="input" name="location" /><br />
  <?php    foreach ($lecturers as $lecturer):?>
        <h1><?php $lecturer?></h1>
      <?php endforeach;?>
  <input type="submit" name="submit" value="Create Meeting" />
</form>
