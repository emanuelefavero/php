<?php

// isset checks if the variable is set 
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $file = fopen('names.txt', 'a'); // a -> append, w -> write
  fwrite($file, $username . "\n");
  fclose($file);
}

?>

<!-- We did not specify an action attribute for the form, so it will submit to itself -->
<form method="post">
  <input type="text" name="username" placeholder="Your username...">
  <input type="submit">
</form>
