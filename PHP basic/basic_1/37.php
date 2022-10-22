<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
#php설정을 runtime(php가 실행되는 시점)으로 지정하는 것
      ini_set("display_errors", "1");
#php애플리케이션이 업로드된 파일을 임시 저장소에서 파일 디렉토리로 이동하기 위해서 사용된 경로=>컴퓨터상의 경로(드라이브)
      $uploaddir = "./Application/mampstack-8.1.11-0/apache2/htdocs";
#basename=>파일에 실제이름이 정확하게 해당 파일의 이름을 의미하도록 한다.(보안 관련)
      $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

      echo "<pre>";
      // 파일 옮기기(실제 파일 경로, 파일을 이동시킬 경로가 필요)
      if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        echo "파일이 유효하고 성공적으로 업로드 되었습니다 \n";
      } else{
        print "파일이 업도르 공격의 가능성이 있습니다. \n";
      }
      echo "자세한 디버깅 정보입니다 : ";
      print_r($_FILES);
      print "</pre>"

     ?>
<!-- 도메인, url 경로 -->
     <img src="file/<?=$_FILES['userfile']['name']?>">
  </body>
</html>
