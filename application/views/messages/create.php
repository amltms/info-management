<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('messages/create'); ?>
  <label for="title">Title</label>
  <input type="input" name="title" /><br />
  <label for="message">Message</label>
  <input type="input" name="message" /><br />
  <input type="submit" name="submit" value="Create Meeting" />
</form>
