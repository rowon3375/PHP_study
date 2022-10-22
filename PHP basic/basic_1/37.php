<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      ini set("display_errors", "1");
      $uploaddir = "./Application/mampstack-8.1.11-0/apache2/htdocs";
      $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

      echo "<pre>";
      // 파일 옮기기(실제 파일 경로, 파일을 이동시킬 경로가 필요)
      if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        echo "파일이 유효하고 성공적으로 업로드 되었습니다 \n";
      } else{
        print "파일이 업도르 공격의 가능성이 있습니다. \n"
      }
      echo "자세한 디버깅 정보입니다 : ";
      print_r($_FILES);
      print "</pre>"

     ?>
     <img src="file/<?=$_FILES['userfile']['name']?>">
  </body>
</html>
