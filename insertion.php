<?php

include_once("config.php");




$id = "";
$name = "";
$subject = "";
$room = "";
$startTime = "";
$endTime = "";


function getPosts()
{
    $posts = array();
  //  $posts[0] = $_POST['faculty'];
    $posts[0] = $_POST['course'];
    $posts[1] = $_POST['subject'];
    $posts[2] = $_POST['room'];
	$posts[3] = $_POST['start_time'];
	$posts[4] = $_POST['end_time'];
    return $posts;
}


if(isset($_POST['insert']))
{
    $data = getPosts();


		$existing_Query = "SELECT * from `data` WHERE  `course`='$data[0]'
		`subject`='$data[1]' OR `room`='$data[2]' OR `start_time`='$data[3]' OR `end_time`='$data[4]'";
		$existing_Result = mysqli_query($connect, $existing_Query);
		if (0 < mysqli_num_rows($existing_Result)) {

			echo '<script type="text/javascript">
                  alert("Duplicate Data! There is already existing schedule at the table. please choose another schedule. thank you");
                   location="insertion.php";
                 </script>';
        }


    $insert_Query = "INSERT INTO `data`( `subject`, `room`, `start_time`, `end_time`) VALUES ('$data[0]','$data[1]', '$data[2]', '$data[3]')";

    try{
        $insert_Result = mysqli_query($connect, $insert_Query);

        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {

                echo '<script type="text/javascript">
                      alert("New Schedule Added Successfully");
                         location="tb.php";
                           </script>';

            }
			else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

?>
<?php
   include_once("header.php");
    include_once("navbar.php");
?>

<?php

include_once("config.php");
// mysql select query
$query = "SELECT * FROM `course`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `faculty`";
$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>
<html>
<head>
<style>

body {
	background-image: url();
	background-color: white;
}
</body>
</style>
</head>

<body>
 <div class="content">
		<div class="form">
		<form class="form-horizontal" method="post" action="insertion.php">
			<fieldset>
	        <legend>Add Schedule Here</legend>

			 <div class="form-group">
			<label class="col-md-4 control-label" for="faculty">Faculty</label>
			<div class="col-md-5">
		<select id="faculty" name="faculty" class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>

        <!--Method One-->
        <div class="form-group">
			<label class="col-md-4 control-label" for="Course">Course</label>
			<div class="col-md-5">
		<select  id="course" name="course"  class="form-control">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option  value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>

            <?php endwhile;?>

        </select>



		</div>
    </div>
    </body>
</head>
</html>


			<?php

include_once("config.php");
// mysql select query
$query = "SELECT * FROM `rooms`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `subject`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>


<html>
<head>
</head>
<body>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="subject">Subject</label>
			<div class="col-md-5">
		<select  id="subject" name="subject"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>



            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[2];?></option>

            <?php endwhile;?>

        </select>
		<?php

include_once("config.php");
		// mysql select query
$query = "SELECT * FROM `rooms`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `rooms`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}


?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="room">Room</label>
			<div class="col-md-5">
		<select  id="room" name="room"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>

        <!--Method One-->



            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>


            <?php endwhile;?>

        </select>


           <?php

include_once("config.php");
// mysql select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}


?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>



        <!--Method One-->
        <div class="form-group">
			<label class="col-md-4 control-label" for="start_time">Start time</label>
			<div class="col-md-5">
		<select  id="start_time" name="start_time" class="form-control">
		  <?php echo $options;?>


            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>


            <?php endwhile;?>

        </select>

		</div>
    </div>
    </body>
</head>
</html>


<?php

include_once("config.php");
// mysql select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>





        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="end_time">End time</label>
			<div class="col-md-5">
		<select  id="end_time" name="end_time" class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>



            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>

            <?php endwhile;?>

        </select>


            <div>
                <div class="form-group">
			  <label class="col-md-4 control-label" for="add"></label>
			  <div class="col-md-4">
                <input id="button"  class="" type="submit" name="insert" value="Add">

				</fieldset>
				</div>
        </form>


				<div id="field">
		Note: Please fill all the fields.
		</div>
	</div>
    </body>


<?php
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
