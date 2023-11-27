<?php
// php select option value from database
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysql database
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
//$options = "";
if (!$connect) {
	echo 'no connection';
}
 ?>
