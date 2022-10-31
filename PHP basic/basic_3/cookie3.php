<?php
  # setcookie()함수를 이용한 쿠키 생성_쿠키 세팅
  $a = setcookie("userid", "hong");
  $b = setcookie("username", "honggidong", time()+60);

// 실행이되면 변수가 true값을 가진다.
  if($a && $b){
    print "쿠키 'userid'와 'username' 생성 완료!<br>";
    print "쿠키 'username'은 60초간 지속된다.";
  }

?>
