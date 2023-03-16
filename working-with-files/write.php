<?php
      // If you serve this file with php -S localhost:4000 -t .
      // The file will be created when a user access the page
      $file = fopen("test.txt", "w");

        $text = "Hello ";
        fwrite($file, $text);
        $text = "World\n";
        fwrite($file, $text);
  
        fclose($file);

      // Use one of the following modes to open the file.
      // r: Opens file for read only.
      // w: Opens file for write only. Erases the contents of the file or creates a new file if it doesn't exist.
      // a: Opens file for write only.
      // x: Creates new file for write only.
      // r+: Opens file for read/write.
      // w+: Opens file for read/write. Erases the contents of the file or creates a new file if it doesn't exist.
      // a+: Opens file for read/write. Creates a new file if the file doesn't exist
      // x+: Creates new file for read/write.
      ?>
