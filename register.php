<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
?>
<html>

<head align="center">
    	<link rel="shortcut icon" href="images/smart.svg" type="image/x-icon">
      <link rel="stylesheet" href="styleindex.css">

      <title>Smartschoolbell</title>
  <style>
body {
background-image: url();
  background-size: cover;
  background-color: white;
}
</body>
</style>
</head>
<body>
<div class="logo" align="center">
<img src="images/smart.jpg" class="smart">
</div>
		<div class="form">
		<form class="form-horizontal" method="post" action="regis.php">
			<fieldset>

			<legend></legend>


			<br><div class="form-group" align="center">
			  <label class="col-md-4 control-label" for="username">Username</label>
			  <div class="col-md-4 ">
			  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">

			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password</label>
			  <div class="col-md-4">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">

			  </div>
			</div>


			<div class="form-group" align="center">
			  <label class="col-md-4 control-label" for="Signup"></label>
        <div class="col-md-4">
				<input type="submit" name="lgn" class="btn btn-success " value="Add">
        </div>
			</div>
      <div class="form-group" align="center">
        <div class="col-md-12">
        <font color="grey" align="center">Already have an acount?</font><br> <a href="index.php">Login here </a>
        </div>
			</div>



			</fieldset>
		</form>
		</div>
		</div>
	</div>
</body>
</html>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>
