<?php
session_start();
include 'confg.php';
                        
 
  $_SESSION['start']= time();
  $_SESSION['expire']= $_SESSION['start'] + (5 * 60 );                       
 
                        
                        

                             

                            $uu=uniqid(tc);
                            $_SESSION['uniquee']=$uu;
                               //argument that is passed in $_POST is a name that is given to tha HTML element
				          
							
						
							
							
						   
                            $c=$_POST['mode'];
                            $d=$_POST['status'];
						    $e=$_POST['usname'];
							$f=$_POST['card'];
							$g=$_POST['amount'];
						
							
                        $query= "INSERT INTO delivery(transaction,name,phone,date,delivery,product,rupee,mode,status,usname,card,amount,delivered) values  
     ('$uu', '{$_SESSION['username']}',  '{$_SESSION['phone']}', '{$_SESSION['date']}',  '{$_SESSION['address']}', 
'{$_SESSION['allItems']}','{$_SESSION['grand_total']}' ,'$c','$d','$e','$f','$g'  , '{$_SESSION['deli']}' )";   // insert into table_name(column1 , column2 , column3 , ...) values( varible1, varible2 varible3,..    );

   

    //column1, column2 , ... are the columns name that are present in the table of given database
    mysqli_query($conn,$query);
    header("location:thank1.php");


?>
