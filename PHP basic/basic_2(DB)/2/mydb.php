<?php
function db_connect(){
  # db 접속 하기
  $db_user = "root";
  $db_pw = "337575";
  $db_host = "localhost";
  $db_name = "phptest";
  $db_type = "mysql";
  # db 접속 관련 데이터 소스
  $dsn = "$db_type:host=$db_host;dbname=$db_name";

  # db 접속 시도(오류 체크)
  try {
    # 클래스 생성(객체 지향적인 방식)
    $pdo = new PDO($dsn, $db_user, $db_pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    //print "접속에 성공하였습니다.<br>";
  } catch (PDOException $e) {
    die('오류: '.$e->getMessage());
  }

  return $pdo;
}

?>
