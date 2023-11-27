<?php
include_once("config.php");
?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>

<html>
<head>
  <link rel="stylesheet" href="styleindex.css">
<style>
body {
  background-image: url(smart.png);
  background-color: white;
}
</body>
</style>
</head>
<body>
<br><div class="container" >

  <div class="row" align="center">
    <div class="col-lg-6">
		<div class="jumbotron">

    <form class ="form-horizontal" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">

			<fieldset>
			<!-- Form Name -->
			<legend></legend>

      <input type="submit" value="Upload apk" name="submit">
       <a href="smartschoolbell.apk" Download>Download File </a>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </form>

    </head>


</head>
</html>


</fieldset>
			</form>

		</div>
    </div>
    </body>


</head>

</html>
