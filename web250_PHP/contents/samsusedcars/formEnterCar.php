<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Joy of PHP</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css" />
</head>

<body>
  <?php
  include 'header.php';
  echo ("<br />");
  echo ("<br />"); ?>

<h1>Sam's Used Cars
</h1>
<form action="SubmitCar.php" method="post">
	VIN: <input name="VIN" type="text" /><br />
	<br />
	Make: <input name="Make" type="text" /><br />
	<br />
	Model: <input name="Model" type="text" /><br />
	<br />
	Price: <input name="Asking_Price" type="text" /><br />
	<br />
	<input name="Submit1" type="submit" value="submit" /><br />
	&nbsp;</form>
</body>

</html>
<?php
include 'footer.php'
 ?>
