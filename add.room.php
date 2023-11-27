<?php


include_once("config.php");
 $Room = $_POST['room'];


 $sql = "INSERT INTO rooms (Room) VALUES ('$Room')";

 if (!mysqli_query ($connect, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Room Reserved!");
                         location="home.php";
                           </script>';
 }


?>
