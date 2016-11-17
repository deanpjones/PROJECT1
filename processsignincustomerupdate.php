<!--Author:Hua Hong CPRG210-->
<?php
   session_start();
   print (session_id());
   $message = "";
   include("signinheader.php");
	 include("signinmenu.php");
   include("functions.php");
   
   function validate()
   {  
     global $message;
	 if($_REQUEST["CustLastName"]=="")
	  {
		  $message .="Last name must have value <br>";
	  }
	   if($_REQUEST["CustHomePhone"]=="")
	  {
		  $message .="home phone must have value <br>";
	  }
	  if($message != "")
	  {
		  return false;
	  }else{
		   return true;
	  }
	 
   }
   
   if (!isset($_REQUEST['CustFirstName']))
   {
      header("Location: customerupdate.php");
   }
   else
   {
	   if (validate())
	   {
		   if (updateData($_REQUEST, "customers"))
		   {
			  print("<h1 style='color:#cc0099;text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px darkblue;font-family:Broadway;'>Congradulations! You have successfully updated your information.</h1>");
		   }
		   else
		   {
			  print("Data could not be saved to the database, call tech support");
		   }
	   }
	   else
	   {  
           if($message)
		   {
			  $_SESSION["message"] = $message;
			  
		   }
		 
	      header("Location: signincustomerupdate.php?CustUserName=$_SESSION[user]");
	   }
   }
?>
