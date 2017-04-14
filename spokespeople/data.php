<?php
error_reporting(2);
//session_start();
$servername = "vdb1a.pair.com";
$username = "working_37";
$password = "Sm57bZ4P";
$dbname = "working_spokespeople";
$table = "spokespeople";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$db = mysqli_select_db($conn,$dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
