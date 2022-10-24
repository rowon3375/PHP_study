<?php
 /*
  \b => 단어의 경계
  그렇기 때문에 \b로 감싸진 web은 web이라는 독립된 단어를 의미한다.
 */
 if(preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")){
   echo "A match was found";
 } else {
   echo "A match was not found";
 }


 if(preg_match("/\bweb\b/i", "PHP is the webstie scripting language of choice.")){
   echo "A match was found";
 } else {
   echo "A match was not found";
 }
?>
