<?php
$conn = new mysqli("localhost", "root", 337575, "opentutorials");
$list_result = mysqli_query($conn, 'SELECT * FROM topic');

if(!empty($_GET['id'])) {
    $topic_result = mysqli_query($conn, 'SELECT * FROM topic WHERE id = '.mysqli_real_escape_string($conn, $_GET['id']));
    $topic = mysqli_fetch_array($topic_result);
# mysqli_fetch_array($topic_result): 한 행의 내용을 배열로 만들어 출력. 더 이상 행이 없으면 false 리턴
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style type="text/css">
            body {
                font-size: 0.8em;
                font-family: dotum;
                line-height: 1.6em;
            }
            header {
                border-bottom: 1px solid #ccc;
                padding: 20px 0;
            }
            nav {
                float: left;
                margin-right: 20px;
                min-height: 1000px;
                min-width:150px;
                border-right: 1px solid #ccc;
            }
            nav ul {
                list-style: none;
                padding-left: 0;
                padding-right: 20px;
            }
            article {
                float: left;
            }
            .description{
                width:500px;
            }
        </style>
    </head>

    <body id="body">
        <div>
            <nav>
                <ul>
            <!-- 목차 반복문 -->
            <!-- htmlspecialchars: 보안 관련. 인자로 전달된 내용 전부가 출력된다. -->
                    <?php
                    while($row = mysqli_fetch_array($list_result)) {
                        echo "<li><a href=\"?id={$row['id']}\">".htmlspecialchars($row['title'])."</a></li>";
                      }
                    ?>
                </ul>
                <ul>
                    <li><a href="input.php">추가</a></li>
                </ul>
            </nav>
          <!-- 본문 -->
            <article>
                <?php
                if(!empty($topic)){
                ?>
                <h2><?=htmlspecialchars($topic['title'])?></h2>
                <div class="description">
                    <?=htmlspecialchars($topic['description'])?>
                </div>

                <div>
          <!-- 수정버튼 -->
                    <a href="modify.php?id=<?=$topic['id']?>">수정</a>
          <!-- 삭제 -->
                    <form method="POST" action="process.php?mode=delete">
                        <input type="hidden" name="id" value="<?=$topic['id']?>" />
                        <input type="submit" value="삭제" />
                    </form>
                </div>
                <?php
                }
                ?>
            </article>
        </div>
    </body>
</html>
