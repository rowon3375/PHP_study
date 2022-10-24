<?php
 // get host name from URL
 preg_match('@^(?:http://)?([^/]+)@i',
            "http://www.php.net/index.html", $matches);

 print_r($matches);
 $host = $matches[1];

 // get last two segments of host name
 preg_match('/[^.]+\.[^.]+$/', $host, $matches);

 echo "<br>";
 echo "domain name is: {$matches[0]} \n";
?>
