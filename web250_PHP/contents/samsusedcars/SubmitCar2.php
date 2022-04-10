<html>
<head>
    <title>Sam's Used Cars with Submit</title>
    <style>
  /* The grid is used to format a table instead of a grid control on the list of Notes */
#Grid
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:80%;
border-collapse:collapse;
margin-left: auto;
margin-right: auto;
}
#Grid td, #Grid th
{
font-size:1em;
border:1px solid #61ADD7;
padding:3px 7px 2px 7px;
}
#Grid th
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#C2D9FE;
color: lightslategray;

}
#Grid tr.odd td
{
color:#000000;
background-color: #F2F5A9;
}

#Grid tr.even
{
color:#000000;
background-color: white;
}
#Grid head
{
color:#000000;
background-color:teal;
}
.auto-style1 {
	text-align: center;
}


</style>

</head>
<body bgcolor="#FFFFFF" text="#000000" >

<?php
include 'header.php';
// Capture the values posted to this php program from the text fields
echo ("<br />");
echo ("<br />");

$VIN =  trim( $_REQUEST['VIN']) ;
$Make = trim( $_REQUEST['Make']) ;
$Model = trim( $_REQUEST['Model']) ;
$Price =  $_REQUEST['Asking_Price'] ;


//Build a SQL Query using the values from above

$query = "INSERT INTO inventory
  (VIN, Make, Model, ASKING_PRICE)
   VALUES (
   '$VIN',
   '$Make',
   '$Model',
    $Price
    )";

// Print the query to the browser so you can see it
echo ($query. "<br>");

include 'db.php';

  echo 'Connected successfully to mySQL. <BR>';

//select a database to work with
$mysqli->select_db("Cars");
   Echo ("Selected the Cars database. <br><br>");

/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
    echo "You have successfully entered $Make $Model into the database.";
}
else
{
    echo "Error entering $VIN into database: " . $mysqli->error."<br>";
}
$mysqli->close();
?>
<?php

echo ("<br />");
echo ("<br />");
  ?>
<h1>Sam's Used Cars</h1>
<h3>Current Inventory</h3>
<div class="auto-style1">
<?php


include 'db.php';
$query = "SELECT * FROM inventory";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
 // Don't do anything if successful.
}
else
{
  echo "Error getting cars from the database: " . mysql_error()."<br>";
}

// Create the table headers
echo "<table id='Grid' style='width: 80%'>\n";
echo "<tr>";
echo "<th style='width: 50px'>Make</th>";
echo "<th style='width: 50px'>Model</th>";
echo "<th style='width: 50px'>Asking Price</th>";
echo "<th style='width: 50px'>Action</th>";
echo "</tr>\n";

$class ="odd";  // Keep track of whether a row was even or odd, so we can style it later

// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
  echo "<tr class=\"$class\">";
  echo "<td><a href='viewcar.php?VIN=".$result_ar['VIN']."'>" . $result_ar['Make'] . "</a></td>";
  echo "<td>" . $result_ar['Model'] . "</td>";
     echo "<td>" . $result_ar['ASKING_PRICE'] . "</td>";
      echo "<td><a href='FormEdit.php?VIN=".$result_ar['VIN']."'>Edit</a>  <a href='deletecar.php?VIN=".$result_ar['VIN']."'>Delete</a></td>";
 echo "</tr>\n";

 // If the last row was even, make the next one odd and vice-versa
  if ($class=="odd"){
      $class="even";
  }
  else
  {
      $class="odd";
  }
}
echo "</table>";
$mysqli->close();
include 'footer.php';
?>
</body>
</html>