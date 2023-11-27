<?php

include_once("config.php");
 $Subject_Code = $_POST['subcode'];
 $Subject_Description = $_POST['subdescription'];

 $sql = "INSERT INTO subject (Subject_Code, Subject_Description) VALUES ('$Subject_Code', '$Subject_Description')";

 if (!mysqli_query ($connect, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Subject Added!");
                         location="home.php";
                           </script>';
 }


?>
