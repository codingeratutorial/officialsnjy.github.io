<?php
session_start();
include "confg.php";
$a= $_POST['pid'];
$b= $_POST['pname'];
$c= $_POST['pprice'];
$d= $_POST['pimage'];
$e= $_POST['pcode'];

$sql="Insert into winter (id, product_name,product_price,product_image,product_code)
        values('$a', '$b' ,  '$c',  '$d' ,  '$e')";
		
$result=mysqli_query($conn, $sql);


echo "<script> location.href = 'winter.php';</script>";


?>