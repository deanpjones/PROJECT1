<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
   session_start();
   $title="Travel Experts Process Book page";
   include("signinheader.php");
   include("signinmenu.php");
   include("functions.php");
   $message = "";
   function validate()
   {
       global $message;
	 if ($_REQUEST["Adult"] == "")
	  {
	     $message .= "Please select the number of adults<br />";
		 
	  }
     
       if($message)
	  {
		  return false;
	  }
	  else{
		  return true;
	  }
      
	 
   }
   
   if (!isset($_REQUEST['BookingDate']))
   {
      $_SESSION["loginmessage"]="You must enter booking date";
	  header("Location: grppackbook.php");
   }
   else
   {
	   if (validate())
	   {
		   if (insertData($_REQUEST, "bookings"))
		   { 
	       
			  header("Location:credicard.php");
		   }
		   else
		   {
			  print("Sorry, ".$_SESSION["user"]." you have to try again!");
		   }
	   }
	   else
	   {
	      $_SESSION["loginmessage"]=$message;
		  header("Location: grppackbook.php");
	   }
   }
?>
