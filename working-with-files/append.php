<?php
$file = fopen("test.txt", "a");
fwrite($file, "Ciao Mondo \n");
fclose($file);

//  "w" -> write new text into a file and deleting old text 
// "a" -> go to the end of file and then add new data
?>
