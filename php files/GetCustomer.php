<?php
include"connection.php";
$number = $_GET['Number'];
$sql = "select Name from bookings where Number = $number";
$result = mysqli_query($con,$sql) or
die ("Record not found");
$row = mysqli_fetch_row($result);
   if (isset($row))    
       echo $row[0];
   else
       echo "Record not found"; 
  // Free result set
  mysqli_free_result($result);
mysqli_close($con);
?>