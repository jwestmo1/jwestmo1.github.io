 <?php
$mysqli = new mysqli('sql309.epizy.com', 'epiz_31044230', 'eItLbV2g7Bk40uE', 'epiz_31044230_cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("Cars");

?>
