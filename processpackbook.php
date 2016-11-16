<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
   session_start();
   $title="Travel Experts Process Book page";
   include("signinheader.php");
   include("signinmenu.php");
   include("functions.php");
  
   function validate()
   {
      if ($_REQUEST["Adult"] == "")
	  {
	     $message = "Please select the number of adults<br />";
		 return false;
	  }
     
       return true;
      
	 
   }
   
   if (!isset($_REQUEST['BookingDate']))
   {
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
	      header("Location: grppackbook.php");
	   }
   }
?>
