
<?php
session_start();

 if(!isset($_SESSION['username'])){
  header("Location:signin.php");  //If any user directly access this page using url of this page then it can't open untill there is any     session 
}
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
	 <script src="jsfol/jquery-3.5.1.min.js" >  </script>

  
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
          <a class="dropdown-item" href="admin_order_online.php">ONLINE</a>
   
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="admin_product.php">Product Details</a>
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
			
         <h4 class="tect-center text-info p-2"> Search Products</h4>

<div class="container" id="contain">
	   
	
         <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="post-form">
         <input type="text" name="ppid"  class="form-control" placeholder="Enter Product ID" >
         <br>
		 
			
         <input class="btn btn-success" type="submit" name="sub" value="Show"><br><br>
  
        
         </form>
		 <?php
		 
		 if(isset($_POST['sub'])){
			 include "confg.php";
			 $pro_id= $_POST['ppid'];
            $q= "select * from product where id='$pro_id'";
 $fire= mysqli_query($conn,$q);
 
 if(mysqli_num_rows($fire)>0)
 {
	 while($row= mysqli_fetch_assoc($fire))
	 {

		 ?>
		 
		 
		 

            </div>
			
			
			
<div class="container" id="contain">
	   
	
         <form class="post-form" action="#" method="post">
         Product ID<input type="text" name="name" id="name" class="form-control"  value="<?php echo $row['id'];?>"readonly>
		 
         Product Name<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['product_name'];?>"readonly>
		 
         Product Price<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['product_price'];?>"readonly >
		 
         Product Image<input type="text" name="name" id="name" class="form-control"value="<?php echo $row['product_image'];?>" readonly >
		 
         Product Code<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['product_code'];?>"readonly >
		 
		 
         <br>
		 
			
         <input class="btn btn-success" style="width:70px;" onclick="redir();" name="sub" value="Back"><br><br>
			
  
        
         </form>
		<?php
	 }
 }
		 }
		 ?>




             <script>
			
		
		function redir()
		{
			window.location="admin_product.php";
		}
		
		</script>
			 

            </div>
			
			