<?php
include("connection.php");
$number = $_GET['Number'];
$sql = "DELETE from bookings where Number = $number";
mysqli_query($con,$sql) or die ("Record not found");
echo"Record Deleted";
mysqli_close($con);
?>