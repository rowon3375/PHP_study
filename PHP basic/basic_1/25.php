<?php
  //배열의 끝에서 추가&삭제
  $li = ['a','b','c','d','e'];
  array_push($li, 'f');
  var_dump($li);

  array_pop($li);
  var_dump($li);



  //배열 처음에 추가&삭제
  $la = ['a','b','c','d','e'];
  array_unshift($la, 'z');
  var_dump($la);

  array_shift($la);
  var_dump($la);
?>
