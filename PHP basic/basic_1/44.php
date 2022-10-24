<?php
  $str = 'foobar: 2008';

  preg_match('/(?P<name>\w+): (?P<digit>\d+)/',
            $str, $matches);

  /*
    This also works in PHP 5.2.2 (PCRE 7.0) and later,
    however the above form is recommended for backwards compatibility
    preg_match('/(?<name>\w+): (?<digit>\d+)/',$str,$matches);
  */

  print_r($matches);
?>
