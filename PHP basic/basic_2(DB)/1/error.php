<?php
// 데이터 베이스 접속 및 데이터 베이스 사용
  $conn = new mysqli("localhost", "root", 337575, "opentutorials");
  mysqli_query($conn, 'select * from topic');
  echo mysqli_error($conn);
  echo mysqli_errno($conn);
?>
