<?php
# 데이터베이스에 접속(호스트, 유저네임, 비밀번호)
    $conn = new mysqli("localhost", "root", 337575, "opentutorials");

# 데이터베이스 선택(데이터베이스 명)
    //mysqli_select_db($conn, "opentutorials");

# if-if else문과 동일하다
# GET 방식 => URL안에 값을 포함해서 전달하는 방식
  /*  if($_GET['mode']){
      $sql = "insert into topic(title, description, created)
              values (
              '".mysqli_real_escape_string($conn, $_POST['title'])."',
              '".mysqli_real_escape_string($conn, $_POST['description'])."',
              now()
              )";
      mysqli_query($conn, $sql);
      echo "성공";

    } else {
      echo "실패";
    }
*/

 switch($_GET['mode']){
        case 'insert':
    # SQL 테이블 제어(insert문)
    $sql = "insert into topic(title, description, created)
            values (
            '".mysqli_real_escape_string($conn, $_POST['title'])."',
            '".mysqli_real_escape_string($conn, $_POST['description'])."',
            now()
            )";

            mysqli_query($conn, $sql);
    # http 헤더에 대한 부분을 작성 =>  redirect
            header("Location: list.php");
            break;
        case 'delete':
    # SQL 테이블 제어(delete문)
            mysqli_query($conn, 'DELETE FROM topic WHERE id = '.mysqli_real_escape_string($conn, $_POST['id']));
            header("Location: list.php");
            break;
        case 'modify':
    # SQL 테이블 제어(update문)
            mysqli_query($conn, 'UPDATE topic SET title = "'.mysqli_real_escape_string($conn, $_POST['title']).'", description = "'.mysqli_real_escape_string($conn, $_POST['description']).'" WHERE id = '.mysqli_real_escape_string($conn, $_POST['id']));
            header("Location: list.php?id={$_POST['id']}");
            break;
    }

?>
