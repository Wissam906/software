<?php
include("connection.php");
$id = $_GET['ID'];
$sql = "DELETE from employees where ID = $id";
mysqli_query($con,$sql) or die ("Record not found");
echo"Record Deleted";
mysqli_close($con);
?>