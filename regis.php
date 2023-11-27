<?php

include_once("config.php");

 $username = $_POST['username'];
 $password = $_POST['password'];


 $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

 if (!mysqli_query ($connect, $sql))
 {
	 echo 'not registered';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("Welcome! Your account has been created. please login to manage your schedules!");
                         location="index.php";
                           </script>';
 }


?>
