<?php
 // i는 패턴 매칭을 할 떄 대소문자를 구분하지 않도록 한다.
# preg_match: 첫번째 인자로 전달된 정규 표현식으로 두번째 인자를 검색했을 때, 검색이 된다면(true) 1을 리턴하고 아니면(false) 0을 리턴한다.
 if(preg_match("/php/i", "PHP is the web scripting language of choice.")){
   echo "A match was found.";
 } else {
   echo "A match was not found.";
 }
?>
