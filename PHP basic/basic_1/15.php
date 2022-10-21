<?php
// ""안에서 변수를 사용하고 싶다 => "{$i}"
  for($i = 0; $i < 10; $i++){
    if($i === 5){
      break;
    }
    echo "Hello {$i}<br>";
  }
?>
