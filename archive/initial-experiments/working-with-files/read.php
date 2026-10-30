<?php
// file() function reads a file and returns an array of lines
$read = file('names.txt');

// loop through the array of lines
foreach ($read as $line) {
  echo $line . '<br>';
}

// read first line of a file
// echo $read[0];

// read last line of a file
// echo $read[count($read) - 1]

// check how many lines are in a file
echo 'lines: '. count($read);
?>
