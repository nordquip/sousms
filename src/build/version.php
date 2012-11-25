<?php
$file_handle = fopen("version.txt", "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
      echo $line;
      }
      fclose($file_handle);
?>
