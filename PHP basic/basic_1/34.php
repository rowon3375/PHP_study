<?php
$filename = 'read3.txt';
if (is_readable($filename)){
  echo "This file is readable";
} else{
  echo "This file is not readable";
}
?>
