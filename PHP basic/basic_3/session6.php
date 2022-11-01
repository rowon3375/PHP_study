<?php
# 세션 시작
  session_start();

  print "세션 시작<p>";
# 글로벌 변수 = 다른 문서에서도 영향을 미쳐, 다른 문서에서도 사용이 가능하다
  $_SESSION['userid'] = "hong";
  $_SESSION['username'] = "홍길동";
  $_SESSION['time'] = time();   // time(): 현재시간

  print "3개의 세션 변수 등록 완료<br>";
  print $_SESSION['userid']."<br>";
  print $_SESSION['username']."<br>";
  print $_SESSION['time ']."<br>";

# 세션 삭제
  unset($_SESSION['userid']);
  unset($_SESSION['username']);
  unset($_SESSION['time']);

  print "세션삭제 완료!";
?>
