<?php

include_once("config.php");

 function getPosts()
   {
    $posts = array();
    $posts[0] = $_POST['subject'];
    $posts[1] = $_POST['room'];
	  $posts[2] = $_POST['start_time'];
	  $posts[3] = $_POST['end_time'];
    return $posts;
}

if (isset($_POST['insert'])) {

	$data = getPosts();

	$existing_Query ="SELECT * FROM `addtable` WHERE  `subject`='$data[0]' OR `room`='$data[1]' OR `start_time`='$data[2]' OR `end_time`='$data[3]'";
	$existing_Result = mysqli_query($connect, $existing_Query);
	if(0 < mysqli_num_rows ($existing_Result)){
		echo '<script type="text/javascript">
                      alert("your entry is already in the tablelist. please choose another schedule.");
                         window.location="home.php";
                           </script>';
	} else {
    $insert_Query = "INSERT INTO `addtable` ( `subject`, `room`, `start_time`, `end_time`) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";
    $insert_Result = mysqli_query($connect, $insert_Query);

    if ($insert_Result) {
      echo "<script type='text/javascript'>
                      alert('New schedule added successfuly');
                         window.location='tablelist.php';
                           </script>";
    } else {
      echo "<script type='text/javascript'>
                      alert('Data not inserted!');
                         window.location='home.php';
                           </script>";
    }
  }

  }
?>
