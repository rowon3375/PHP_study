<?php
  $a = ['a', 'b', 'c'];
  echo $a[0].",".$a[1].",".$a[2];

  function get_members(){
    return ['c', 'd', 'e'];
  }
  echo "<br>";
  echo get_members()[2];

  echo "<br>";
  $tem = get_members();
  echo $tem[0];
?>
