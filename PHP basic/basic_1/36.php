<?php
 $dir = './';
 $file1 = scandir($dir);
 $file2 = scandir($dir, 1);

 print_r($file1);
 print_r($file2);
?>
