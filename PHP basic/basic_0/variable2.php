<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $a = 100;
      echo gettype($a);
      settype($a, 'double');
      echo "<br>";
      echo gettype($a);
    ?>
  </body>
</html>
