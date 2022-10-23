<?php
// header => http프로토콜과 관련, 헤더의 값= 서버와 클라이언트가 통신할 때, 부가적인 정보를 제공하는 부분 --> 웹 서버가 해당 줄을 기준으로 서버가 클라이언트로 전송하는 헤더 안에 해당 내용을 포함시킨다. ===> 항상 제일 위에 출력해야한다.
 header("Content-type: image/png");
# url상에 입력된 값이 get으로 전달된다.
 $string = $_GET['text'];
# gd_lib의 내장함수
# imagecreatefrompng: png형식의 이미지를 가져온다.
 $im = imagecreatefrompng("white.png");
# imagecolorallocate: 이미지에 대한 식별자의 색을 할당한다.(RGB)
 $blue = imagecolorallocate($im, 60, 87, 156);
# px=> 화면상의 이미지 안에 표시되는 글자를 가운데로 정렬하기 위한 계산식
# imagesx: 인자로 전달된 이미지의 폭
# strlen: 인자로 전달된 문자의 길이
 $px = (imagesx($im) - 7.5 * strlen($string))  / 2;
#imagestring: 이미지로 된 문자열. (이미지 식별자, 폰트, x축의 값, y축의 값, 입력내용, 입력내용의 색)
 imagestring($im, 4, $px, 9, $string, $blue);
# imagepng: png라는 형식의 이미지를 전송한다.
 imagepng($im);
# imagedestroy: 이미지에 대한 자원을 삭제한다. 이미지 끄기
 imagedestroy($im);
?>
