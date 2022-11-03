<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
<?php
    if(isset($_COOKEI['userid'])){
      $_SESSION['userid']=$_COOKEI['userid'];
    }

    if(!isset($_SESSION['userid'])){
?>
      <form action="loginPro.php" method="post">
        <input type="text" name="userid" placeholder="아이디" required autofocus><br>
        <input type="password" name="userpw" placeholder="비밀번호" required><br>
        <input type="checkbox" name="chbox" value="yes">로그인 상태 유지<br>
        <input type="submit" value="로그인">
      </form>
<?php
} //if
else{
?>
    <?=$_SESSION['userid']?>님 환영합니다.<br>
    <a href="logout.php">로그아웃</a>
<?php
}
?>
  </body>
</html>
