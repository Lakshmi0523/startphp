<?php

$dbhost = "starttooldev01.mysql.database.azure.com";
$dbname = "startdb";
$dbuser = "srtadmin01";
$dbpass ="Ugw6h1daE5";


$link = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}
?>