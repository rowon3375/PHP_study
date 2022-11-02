<!-- 회원가입 조회 -->
<!DOCTYPE html>
<?php
  # db 연동
  require_once("mydb.php");
  $pdo=db_connect();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>selectInfo</title>
  </head>
  <body>
    <?php
      try {
        $sql="select * from member";
        $stmh=$pdo->query($sql);

        # 행단위로 들어오는 데이터를 담는다.
        $count=$stmh->rowCount();
        print "검색 결과는 $count 건입니다.<br>";

      } catch (\Exception $e) {
        print "오류 : ".$Exception->getMessage();
      }



        if($count < 1){
          print "가입회원이 존재하지 않습니다.";
        } else{
    ?>
      <table border="1" width="600">
        <tr align="center">
          <th>아이디</th>
          <th>비밀번호</th>
          <th>이메일</th>
          <th>전화번호</th>
          <th>가입일시</th>
          <th>수정</th>
          <th>삭제</th>
        </tr>
    <?php
    # 정보 다 들고오기
      while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
    ?>
        <tr align="center">
          <td>
            <?=$row['id']?>
          </td>
          <td>
            <?=$row['pw']?>
          </td>
          <td>
            <?=$row['email']?>
          </td>
          <td>
            <?=$row['tel']?>
          </td>
          <td>
            <?=$row['reg_date']?>
          </td>
          <td>
            <a href="updateForm.php">수정</a>
          </td>
          <td>
            <a href="delete.php?id=<?=$row['id']?>">삭제</a>
          </td>
        </tr>
    <?php
  } //while
} //if
    ?>
      </table>
  </body>
</html>
