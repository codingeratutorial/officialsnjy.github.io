function validation(){
  var a= document.getElementById("first_name").value;
		
		if(a == ""){
		  document.getElementById("error_first").innerHTML= "** empty not allowed";
		  return false;
		}
		if(!isNaN(a))
		{
		  document.getElementById("error_first").innerHTML= "** only chracters are allowed";
		  return false;
		}
		if( (a.length<= 2) || (a.length> 50) ){
		  document.getElementById("error_first").innerHTML= "**Length must  between 3 to 20";
		  return false;
		}




 var b= document.getElementById("last_name").value;

	if(b == "")
	{
		  document.getElementById("error_last").innerHTML= "** empty not allowed";
		  return false;
		}
		if(!isNaN(b))
		{
		  document.getElementById("error_last").innerHTML= "** only chracters are allowed";
		  return false;
		}
		if( (b.length<= 2) || (b.length> 50) ){
		  document.getElementById("error_last").innerHTML= "**Length must  between 3 to 20";
		  return false;
		}



     var c= document.getElementById("email").value;

	if(c == "")
	{
		  document.getElementById("error_email").innerHTML= "** empty not allowed";
		  return false;
		}





     var d= document.getElementById("password").value;

	if(d == "")
	{
		  document.getElementById("error_pass").innerHTML= "** empty not allowed";
		  return false;
     }



     var e= document.getElementById("comfirm_password").value;

	if(e == "")
	{
		  document.getElementById("error_com").innerHTML= "** empty not allowed";
		  return false;
     }

     if(d!=e)
     {
		  document.getElementById("error_com").innerHTML= "** password must be same";
		  return false;
     }
	


		
      else{
			alert("Your Account is created Successfully");
		}


}