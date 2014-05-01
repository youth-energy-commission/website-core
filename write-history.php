<?php
$ip_address=$_SERVER['REMOTE_ADDR'];
$sep = ";";
$filin = fopen("history.csv", "a");
$date_parse = date('l, jS M, Y, H:i:s O T',time());

fwrite($filin, "$date_parse$sep$ip_address\n");

fclose($filin);

?>