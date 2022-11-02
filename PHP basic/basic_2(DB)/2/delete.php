<!-- 회원정보 삭제 -->
<?php
  # 프라이머리 키 값 받아오기
  $id = $_REQUEST['id'];

  # db 접속 파일 불러오기
  require_once("mydb.php");
  $pdo=db_connect();

  try {
    # sql문 4개를 사용하여 해당 테이블의 내용에 변동이 생길떄만 사용(select외에 모두 사용)
    $pdo->beginTransaction();
    $sql="delete from member where id=?";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $id, PDO::PARAM_STR);

    $stmh->execute();
    $pdo->commit();
    //print "데이터 삭제 완료";
    header("Location:localhost:8080/selectPro.php");

  } catch (\Exception $e) {
    $pdo->rollBack();
    print "오류 : ".$Exception->getMessage();
  }

?>
