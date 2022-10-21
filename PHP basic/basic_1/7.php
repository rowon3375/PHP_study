<?php
  if($_GET['id'] === 'hwawon'){
    if($_GET['pw'] === '1111'){
        echo "login";
    } else{
      echo "password wrong";
    }
  } else {
    echo "id wrong";
  }
?>
