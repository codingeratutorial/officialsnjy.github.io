


function pay()

{


	var a = document.getElementById("usname").value;

	 if(a=="")
    {	
    document.getElementById("mess").innerHTML="**please enter Card Holder name";
    return false;
	}


	 if(!isNaN(a))
    {	
    document.getElementById("mess").innerHTML="**please enter valid name";
    return false;
	}

   
   
   
	var b = document.getElementById("card").value;

	 if(b=="")
    {	
    document.getElementById("error_card").innerHTML="**please enter Card number";
    return false;
	}
  
    if(b.length<16 || b.length>16)
    {
       document.getElementById("error_card").innerHTML="**please enter valid 16-digit card no.";
       	return false;
      }
   
   
      
   var f = document.getElementById("amount").value;

	 if(f<25)
    {	
    document.getElementById("error_amount").innerHTML="**amount should be more than 25 rupee";
    return false;
	}
   
   
     
    var c = document.getElementById("mm").value;
	
	 if(c>12 || c<1)
    {	
    document.getElementById("error_mm").innerHTML="**please enter valid month";
    return false;
	}
	
  
    if(c.length < 1 || c.length> 2)
    {
       document.getElementById("error_mm").innerHTML="**please enter valid month  ";
       	return false;
      }
   
   
   
   
   
   
    var d = document.getElementById("yy").value;

	
  
  
   if(d<2020 || d>2026)
    {	
    document.getElementById("error_yy").innerHTML="**please enter valid year";
    return false;
	}
	
	
    if(d.length != 4)
    {
       document.getElementById("error_yy").innerHTML="**please enter valid year ";
       	return false;
      }
   
   
   
   var e = document.getElementById("cvv").value;

	 if(e=="")
    {	
    document.getElementById("error_cvv").innerHTML="**please enter valid CVV no.";
    return false;
	}
  
    if(e.length !=3)
    {
       document.getElementById("error_cvv").innerHTML="**please enter valid CVV no. ";
       	return false;
      }
   else{

    alert("Payment Successfull");

   }
  
   
}




$(function() {
$('[data-toggle="tooltip"]').tooltip()
})
