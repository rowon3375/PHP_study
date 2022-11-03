<!-- 회원정보 수정 페이지 -->
<?php
  # 보내진 id 값 받기
  $id = $_REQUEST['id'];

  # db 연동
  require_once("mydb.php");
  $pdo=db_connect();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>updateForm</title>
  </head>
  <body>
    <?php
      try {
        # where 조건문 사용시 => prepare메소드 사용하여 바인딩한다.
        $sql="select * from member where id = ?";
        # 해당 sql문을 미리 실행해라
        $stmh=$pdo->prepare($sql);
        # 실행된 문에 대한 값을 받는다 => bindValue(해당 필드 이름, 입력값)
        $stmh->bindValue(1, $id);
        # sql문을 실행시킨다.
        $stmh->execute();

        # 행단위로 들어오는 데이터를 담는다.
        $count=$stmh->rowCount();

      } catch (\Exception $e) {
        print "오류 : ".$Exception->getMessage();
      }



        if($count < 1){
          header("Location:http://localhost:8080/insertForm");
        } else{
          # 해당 연관된 배열이 할당된다.
          $row=$stmh->fetch(PDO::FETCH_ASSOC);
    ?>
    <form action="updatePro.php" method="post">
      <table border="1">
        <tr>
          <th>아이디</th>
          <td>
            <!-- 입력값 고정하기 -->
            <?=$row['id']?>
          </td>
        </tr>

        <tr>
          <th>비밀번호</th>
          <td>
            <input type="text" name="pw" size="20" value="<?=$row['pw']?>">
          </td>
        </tr>

        <tr>
          <th>이메일</th>
          <td>
            <input type="text" name="email" size="20" value="<?=$row['email']?>">
          </td>
        </tr>

        <tr>
          <th>전화번호</th>
          <td>
            <input type="text" name="tel" size="20" value="<?=$row['tel']?>">
          </td>
        </tr>

        <tr>
          <td colspan="2" style="text-align:center">
            <input type="submit" value="수정하기">
          </td>
        </tr>
      </table>
      <!-- 위에서 받아온 id를 보낸다 -->
      <input type="hidden" name="id" value="<?=$id?>">
    </form>
    <?php
} //else
    ?>
  </body>
</html>
