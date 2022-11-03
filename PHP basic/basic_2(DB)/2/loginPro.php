<?php
  # 세션 시작
  session_start();

  # 로그인 폼에서 받은 정보들
  $userid = $_REQUEST['userid'];
  $userpw = $_REQUEST['userpw'];

  # db 접속
  require("mydb.php");
  $pdo = db_connect();


  try {
    # 로그인 정보=> id, pw 만 들고 온다.
    $sql="select pw from member where id = ?";

    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $userid);
    $stmh->execute();

    $count=$stmh->rowCount();

  } catch (\Exception $e) {
    print "오류 : ".$Exception->getMessage();
  }

    # 해당 연관된 배열이 할당된다. => 값을 가지고 온다.
    $row=$stmh->fetch(PDO::FETCH_ASSOC);


    # 유효성 체크
    if($count < 1){
      ?>
      <script>
        alert("아이디가 올바르지 않습니다.");
        history.back();
      </script>
<?php
} //if
    else if($userpw !== $row['pw']){
?>
      <script>
        alert("비밀번호가 올바르지 않습니다.");
        history.back();
      </script>
<?php
}
else{
    # 모두 일치하는 경우
    if(isset($_REQUEST['chbox'])){
      $a = setcookie("userid", $userid, time()+60*60*24);
      $b = setcookie("userpw", $userpw, time()+60*60*24);
    }

    # 세션 변수 할당
    $_SESSION['userid'] = $userid;  //관리자 로그인 성공시
    print $_SESSION['userid'];
    header("Location:http://localhost:8080/loginForm.php");
    exit;
}

?>
