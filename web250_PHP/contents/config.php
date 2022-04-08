<?php
  session_start();
  $host = "sql309.epizy.com"; /* Host name */
  $user = "epiz_31044230"; /* User */
  $password = "eItLbV2g7Bk40uE"; /* Password */
  $dbname = "epiz_31044230_login"; /* Database name */

  $con = mysqli_connect($host, $user, $password,$dbname);
  // Check connection
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
