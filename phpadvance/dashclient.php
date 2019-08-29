<link rel="stylesheet" href="form.css" type="text/css">

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "kyc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<table id="customerdata" class=" table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">

<th> Id </th>
<th> Name </th>
<th> Phone </th>
<th> Email </th>
<th> Gender </th>
<th> Activate Customer</th>
<th> Delete </th>

</tr >

<?php

//SQL Query for fetching the data
$q = "SELECT id, username, phone, email, gender from client WHERE status = 1";

$query = mysqli_query($link,$q);

while($res = mysqli_fetch_array($query)){

?>

<tr class="text-center">
    <td> <?php echo $res['id']; ?> </td>
    <td> <?php echo $res['username']; ?> </td>
    <td> <?php echo $res['phone']; ?> </td>
    <td> <?php echo $res['email']; ?> </td>
    <td> <?php echo $res['gender']; ?> </td>
    <td> <button class="btn-danger btn"><a href="logdetail.php?id=<?php echo $res['id']; ?>" class="text-white"> Active </a></button></td>
    <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a></button></td>
</tr>
<?php 
}
?>
</table>
