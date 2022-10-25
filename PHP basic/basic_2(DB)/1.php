<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
      <!-- GET이면서 POST방식으로 전송한다.  -->
        <form action="./1_1.php?mode=insert" method="POST">
            <p>제목 : <input type="text" name="title"></p>
            <p>본문 : <textarea name="description" cols="30" rows="10"></textarea></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
