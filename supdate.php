<?php
session_start();
include "confg.php";



$a= $_POST['name'];
$b= $_POST['status'];
$c= $_POST['ampaid'];
$d=$_POST['date'];
$e=$_POST['remark'];


$sql="UPDATE delivery SET Status='$b' , amount='$c' , delivered='$d', remark= '$e' where transaction='$a'";
$result=mysqli_query($conn, $sql);

echo "<script> location.href = 'admin_order.php';</script>";

?>