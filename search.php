<?php
  session_start();

   if(!isset($_SESSION['username'])){
  header("Location:signin.php");  //If any user directly access this page using url of this page then it can't open untill there is any     session 
}

include "confg.php";
 
  $pro_id=$_GET['id'];
  
  
 
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cssfol/bootstrap.min.css" >
    <link rel="stylesheet" href="cssfol/font-awesome.min.css" >
    <link rel="stylesheet" href="1.css" >



	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jsfol/jquery-3.5.1.slim.min.js"  >  </script>
    <script src="jsfol/popper.min.js" >  </script>
    <script src="jsfol/bootstrap.min.js" >  </script>
  
  </head>
  <body>


    <nav class="navbar navbar-expand-md bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand"><img src="flippin.jpeg"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link " href="admin.php"> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  " href="admin_user.php"> User A/C Details</a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Ordered Details
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admin_order.php">COD</a>
          <a class="dropdown-item" href="#">Online</a>
   
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Product Details</a>
      </li> 
     
    

<li class="nav-item">
        <a class="nav-link " href="logout1.php">Logout</a>
      </li>
    </ul>
  </div> 
</nav>
<br>
<br>



<div class="container ">
	<div class="row justify-content-center">
		
		<div class= "col-lg-6 px4 pb-4 " id="order">
			
         <h4 class="tect-center text-info p-2"> Update Products</h4>
		 
		 
<?php 

$q= "select * from product where id={$pro_id}";
 $fire= mysqli_query($conn,$q);
 
 if(mysqli_num_rows($fire)>0)
 {
	 while($row= mysqli_fetch_assoc($fire))
	 {
		 ?>
		 <form action="updateser.php"  method="post">
         <div class="form-group">
         <input type="hidden" name="pid" value="<?php echo $row['id'];?>" class="form-control"  required ><span id="mess" style="color:red"></span>
         </div>

         <div class="form-group">
         	Product Name<input type="text"name="pname" value="<?php echo $row['product_name'];?>"class="form-control"  required=""><span id="error_email" style="color:red"></span>
         </div>
		  <div class="form-group">
         	Product Price<input type="text" name="pprice" value="<?php echo $row['product_price'];?>"class="form-control"  required=""><span id="error_email" style="color:red"></span>
         </div>
		  <div class="form-group">
         	Product Image<input type="text" name="pimage"value="<?php echo $row['product_image'];?>"class="form-control"  required=""><span id="error_email" style="color:red"></span>
         </div>
		  <div class="form-group">
         	Product Code<input type="text"name="pcode"  value="<?php echo $row['product_code'];?>" class="form-control"  required=""><span id="error_email" style="color:red"></span>
         </div>

 
        <input class="btn btn-primary"  type="submit" value="Update">
		
        <input class="btn btn-danger" style="width:80px; margin-left:06px;" onclick="redir();"  value="Cancel">
		</form>
		
		<script>
		
		function redir()
		{
			window.location="admin_product.php";
		}
		
		</script>
		
		<?php
	 }
 }
 
 ?>