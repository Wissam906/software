<?php
include"connection.php";
$id = addslashes(strip_tags($_POST['ID']));
$name = addslashes(strip_tags($_POST['Name']));
$key = addslashes(strip_tags($_POST['key']));
if ($key != "cuBubcDE" or trim($name) == "")
    die("access denied");
$sql = "insert into employees values ($id, '$name')";
mysqli_query($con,$sql) or
    die ("can't add record");
echo "Record Added";
mysqli_close($con);
?> 