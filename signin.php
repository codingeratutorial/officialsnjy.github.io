<?php
	session_start();
	include"confg.php";

   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />  
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
   </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="alpha.php" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">

		        	
		            <input type="email" name="username" class="form-control" placeholder="Email ID" required>
		            <br>
	
		            <input type="password"  name="password"  class="form-control" placeholder="Password"  required>
				
					<br>
				
				
				<br>
		            <button class="btn btn-theme btn-block" name="login" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		           
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="signup.php">
		                    Create an account
		                </a>
                       <br>
                        <a class="" href="forgett.php">
		                    Forget Password
		                </a>


		            </div>
		
		        </div>
			
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("snjy.jpeg", {speed: 500});
    </script>


  </body>
</html>
