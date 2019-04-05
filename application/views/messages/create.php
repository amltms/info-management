<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('messages/create'); ?>
  <label for="email">Email</label>
  <input placeholder="<?php echo $user['Email']?>" type="input" name="email"/><br />
  <label for="title">Title</label>
  <input type="input" name="title" /><br />
  <label for="message">Message</label>
  <input type="input" name="message" /><br />
  <input type="submit" name="submit" value="Send" />
</form>
