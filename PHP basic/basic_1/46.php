<?php
  $string = 'The quick brown fox jumped over the lazy dog';
  $pattern = array();
  $pattern[0] = '/quick/';
  $pattern[1] = '/brown';
  $pattern[2] = '/fox/';

  $replacements = array();
  $replacements[2] = 'bear';
  $replacements[1] = 'black';
  $replacements[0] = 'slow';

  echo preg_replace($pattern, $replacements, $string);
?>
