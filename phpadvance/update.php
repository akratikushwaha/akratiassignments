<?php
//connnection


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "kyc";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$id=$_GET['id'];

$q = "UPDATE log set status =1 where id=$id";
mysqli_query($conn,$q);
echo $q;
header('location: dashclient.php');
?>