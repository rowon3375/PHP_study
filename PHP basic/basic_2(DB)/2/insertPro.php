<!-- 회원정보 추가 -->
<?php
  # 전달 된 값 받아오기
  $id = $_REQUEST['id'];
  $pw = $_REQUEST['pw'];
  $email = $_REQUEST['email'];
  $tel = $_REQUEST['tel'];

  # db 접속 파일 불러오기
  require_once("mydb.php"); // 한번만 불러온다
  $pdo=db_connect();

  # form 양식으로 받은 데이터를 db에 insert하는 구문
  try {
    # sql문 4개를 사용하여 해당 테이블의 내용에 변동이 생길떄만 사용
    # 트렌젝션(여러 처리를 하나의 처리로 묶는 것) 시작
    $pdo->beginTransaction();
    /*$sql="insert into member(id,pw,email,tel,reg_date)
          values(:id, :pw, :email, :tel, :reg_date)";*/
    $sql="insert into member(id, pw, email, tel, reg_date)
          values(?, ?, ?, ?, now())";
    # placeholder를 이용한 구성을 안전하게 실행하기 위한 기능
    $stmh=$pdo->prepare($sql);
    # 각 placeholder의 값을 바인드 한다. => bindValue & bindParam
    $stmh->bindValue(1, $id, PDO::PARAM_STR); //PARAM_STR=> 데이터형
    $stmh->bindValue(2, $pw, PDO::PARAM_STR);
    $stmh->bindValue(3, $email, PDO::PARAM_STR);
    $stmh->bindValue(4, $tel, PDO::PARAM_STR);

    $stmh->execute();
    $pdo->commit();
    //print "데이터가 성공적으로 추가되었습니다.";
    header("Location:http://localhost:8080/selectPro.php");

  } catch (\Exception $e) {
    # 원상태로 돌리고 종료
    $pdo->rollBack();
    print "오류 : ".$Exception->getMessage();
  }

?>
