<?php
session_start();
include "confg.php";
$a= $_POST['pid'];
$b= $_POST['pname'];
$c= $_POST['pprice'];
$d= $_POST['pimage'];
$e= $_POST['pcode'];

$sql="UPDATE women SET  product_name='$b' , product_price='$c', product_image='$d' , product_code='$e'
        where id='$a'";
		
$result=mysqli_query($conn, $sql);

 
echo "<script> location.href = 'women.php';</script>";
?>