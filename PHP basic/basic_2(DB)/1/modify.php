<?php
// 데이터 베이스 접속 및 데이터 베이스 사용
$conn = new mysqli("localhost", "root", 337575, "opentutorials");

// 기존 데이터 가져오기
$result = mysqli_query($conn, 'SELECT * FROM topic WHERE id = '.mysqli_real_escape_string($conn, $_GET['id']));
$topic = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="./process.php?mode=modify" method="POST">
            <input type="hidden" name="id" value="<?=$topic['id']?>" />
            <p>제목 : <input type="text" name="title" value="<?=htmlspecialchars($topic['title'])?>"></p>
            <p>본문 : <textarea name="description" id="" cols="30" rows="10"><?=htmlspecialchars($topic['description'])?></textarea></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
