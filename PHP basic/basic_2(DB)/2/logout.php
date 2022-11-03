<!-- 로그아웃 -->
<?php
  session_start();

  # 세션 접속 끊기
  unset($_SESSION['userid']);
  unset($_SESSION['userpw']);

  # 쿠키 지우기
  setcookie("userid", "");
  header("Location:http://localhost:8080/loginForm.php");
 ?>
