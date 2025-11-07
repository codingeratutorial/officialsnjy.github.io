<?php

session_start();
include "confg.php";
$sql="TRUNCATE table cart";
mysqli_query($conn,$sql) or die ("query failed");

session_destroy();

header('Location:signin.php');
//after logout , if user go to the back page then it only stable to signin page untill your login 




?>
