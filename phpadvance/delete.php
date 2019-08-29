
<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "kyc";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$id=$_GET['id'];

$q = "DELETE FROM log where id=$id";
mysqli_query($conn, $q)

?>