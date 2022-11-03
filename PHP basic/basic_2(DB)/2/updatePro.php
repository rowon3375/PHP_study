<!-- 회원정보 수정 -->
<?php
  # 전달 된 값 받아오기
  $id = $_REQUEST['id'];  // hidden으로 받아온 id
  $pw = $_REQUEST['pw'];
  $email = $_REQUEST['email'];
  $tel = $_REQUEST['tel'];

  # db 접속 파일 불러오기
  require_once("mydb.php");
  $pdo=db_connect();

  # form 양식으로 받은 데이터를 db에 insert하는 구문
  try {
    # sql문 4개를 사용하여 해당 테이블의 내용에 변동이 생길떄만 사용
    # 트렌젝션(여러 처리를 하나의 처리로 묶는 것) 시작
    $pdo->beginTransaction();

    $sql="update member set pw=?, email=?, tel=? where id =?";

    $stmh=$pdo->prepare($sql);

    $stmh->bindValue(1, $pw, PDO::PARAM_STR);
    $stmh->bindValue(2, $email, PDO::PARAM_STR);
    $stmh->bindValue(3, $tel, PDO::PARAM_STR);
    $stmh->bindValue(4, $id, PDO::PARAM_STR);

    $stmh->execute();
    $pdo->commit();
    header("Location:http://localhost:8080/selectPro.php");

  } catch (\Exception $e) {
    # 원상태로 돌리고 종료
    $pdo->rollBack();
    print "오류 : ".$Exception->getMessage();
  }

?>
