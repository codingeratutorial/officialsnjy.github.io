<?php
session_start();
include"confg.php";


if(isset($_SESSION['username']))
{
  header("Location:indexx.php");
}

else
{
	 echo "<script>
	       alert('Login Your Account first')
	       </script>";
	 echo "<script> location.href = 'index.php';</script>";

}

?>


