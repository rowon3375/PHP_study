<?php
 $subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
# math 변수 => preg_match가 해당 변수를 자동 생성해서 내용을 채워넣음
 preg_match('/c..../', $subject, $match);
 preg_match('/http:\/\//', $subject, $a);
 //preg_match('~http://~', $subject, $a);
 preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $b);
 print_r($match);
 print_r($a);
 print_r($b);

 echo "<br>";
 echo "홈페이지:".$b[1];
 echo "<br>";
 echo "이메일:".$b[2];
?>
