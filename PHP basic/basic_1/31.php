<?php
//파일 복제
  $file = 'read.txt';
  $newfile = 'example.txt.bak';

  if(!copy($file, $newfile)){
    echo "failed to copy $file....\n";
  }

//파일삭제
  unlink('read.txt');
?>
