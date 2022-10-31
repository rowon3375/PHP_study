<?php
 # 쿠키 사용 방법
$userid = $_COOKIE['userid'];
$username = $_COOKIE['username'];

print "cookie 'userid': $userid <br>";
print "cookie 'username: $username'";


 # 쿠키 삭제
 $a = setcookie("userid", "");
 $b = setcookie("username", "");

 if($a && $b){
   print "쿠키 삭제 완료!";
 }
?>
