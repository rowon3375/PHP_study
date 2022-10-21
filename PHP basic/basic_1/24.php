<?php
  function get_student(){
    return ['abc', 'efg', 'hij', 'klm', 'opq'];
  }

  $members = get_student();

  for($i = 0; $i < count($members); $i++){
    echo ucfirst($members[$i])."<br>";
    //첫 글자를 대문자로 변경시킨다.
  }
?>
