<?php
  $conn = new mysqli("localhost", "root", 337575, "opentutorials");
  mysqli_query($conn, 'select * from topic');
  echo mysqli_error($conn);
  echo mysqli_errno($conn);
?>
