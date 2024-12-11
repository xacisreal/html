<?php
$mysql_host = "localhost";
$mysql_user = "20mca20";
$mysql_password = "2547";
$mysql_db = "20mca20";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
