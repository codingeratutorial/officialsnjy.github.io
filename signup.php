<?php
session_start();
include"confg.php";
mysqli_select_db($conn,'fashion'); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />  
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"></head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="signup.php" method="post">
		        <h2 class="form-login-heading">sign up now</h2>
		        <div class="login-wrap">

		        	
		            <input type="email" name="userid" class="form-control" placeholder="Email ID" autofocus ="">
		            <br>

		            <input type="password" name="password" class="form-control" placeholder="Password" required="">
					<br>
					<input type="password" name="cpassword" class="form-control" placeholder="Retype Password" required="">
					<br>
					
					
		            <button class="btn btn-theme btn-block" name="submit_btn" type="submit"><i class="fa fa-lock"></i> SIGN UP</button>
		            <hr>
		            
		           
		            <div class="registration">
		                Already a User?<br/>
		                <a class="" href="signin.php">
		                    Login Here
		                </a>
		            </div>
		
		        </div>
		
		        <?php
			if(isset($_POST['submit_btn']))
			
				{	

					
					$username=$_POST['userid'];
					$password=$_POST['password'];
					$cpassword=$_POST['cpassword'];
					
					
						if ($username!='' AND $password==$cpassword){
							$query= " select * from signup WHERE username='$username'";
						//$uery is a userdefined varible which the database query


							$query_run = mysqli_query($conn,$query);
						//mysqli_query is a predefined variable that is used to fire the query	

                        // query_run is a userdefined varible that stores the result of mysqli_query(); function


							if(mysqli_num_rows($query_run)>0) 
							{
								echo '<script type="text/javascript"> alert("User ID already exits.. Try Another User ID")</script>';
							}
					


				 // mysqli_num_rows is a userdefined varible that return the no of rows that filled in the table of given database

							else
							{
							$query1= "INSERT INTO `signup`(`username`,`password`,`conpassword`)
							VALUES ('$username','$password','$cpassword')";
							$query_ = mysqli_query($conn,$query1);
						
							if($query_)
							{
								echo '<script type="text/javascript"> alert("You Have Registered Successfully... Go To Login Page")</script>';
								echo "<script> location.href = 'signin.php';</script>";
							}
							}
						} //closing of top most if condtion	
						else
						{
							echo '<script type="text/javascript"> alert("Unable To Register!")</script>';
						}
				}
				?>
		      </form>	  	
	  	
	  	</div>
	  </div>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
<script>
$.backstretch("snjy.jpeg", {speed: 500});
</script>
  </body>
</html>
