<?php
include"connection.php";
$number = addslashes(strip_tags($_POST['Number']));
$name = addslashes(strip_tags($_POST['Customer's Name']));
$time = addslashes(strip_tags($_POST['Time']));
$barberid = addslashes(strip_tags($_POST['Barber's ID']));
$key = addslashes(strip_tags($_POST['key']));
if ($key != "cuBubcDE" or trim($name) == "")
    die("access denied");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "insert into bookings values ($number, '$name', '$time', barberid)";
mysqli_query($con,$sql) or
    die ("can't add record");
echo "Record Added";
mysqli_close($con);
?> 