<?php

$name = 'John';

// Print variable value to the client console
$age = 40;
echo("<script>console.log($age)</script>");

// * define a function to print variable value to the client console
function console_log($data) {
  if (is_array($data))
      $data = implode(',', $data);

  if (is_object($data))
      $data = json_encode($data);

  echo "<script>console.log('$data' );</script>";
}

// * print variable value to the client console using the defined function
$color = 'red';
console_log($color);
?>

<!-- Print variable value to the client console -->
<script>
  console.log(<?= json_encode($name) ?>)
</script>
