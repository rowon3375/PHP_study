<!-- 일반 웹페이지 -->
<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header('Location: ./session3_1.html');
}
?>
<html>
    <body>
        <?php echo $_SESSION['nickname'];?>님 환영합니다<br />
        <a href="./session5.php">로그아웃</a>
    </body>
</html>
