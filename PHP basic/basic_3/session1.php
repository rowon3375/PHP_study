<?php
// 사용자가 session 데이터를 모든 페이지에서 가져고오 싶을 때, 파일로 저장되는 세션의 위치를 지정하는 것
  //session_save_path('./session');
  session_start();
  $_SESSION['title'] = '생활코딩';
?>
