<?php
//$host = "192.138.21.104";
//$username ="gomecadm_root";
//$password = "SO4#36bb!nTM";
//$database = "gomecadm_quickitchen";

$host = "localhost";
$username ="root";
$password = "";
$database = "quick_kitchen";

$db_link = mysqli_connect($host, $username, $password, $database) or die("Error " . mysqli_error($db_link));

?>