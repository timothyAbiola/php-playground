<?php
$filename = 'home.csv';
 $handle = fopen($filename, "w");
//  $contents = fread($handle, filesize($filename));
$rcontents = fwrite($handle, 'welcome homeeeeeee!');
echo $rcontents;
// echo $contents;
    fclose($handle);  
  $file = fopen($filename, 'r');
  $mainfile = fread($file, filesize($filename));
  echo $mainfile;
  fclose($file);
?>
