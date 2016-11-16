<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
   session_start();
   $title="Travel Experts Process credicard page";
   include("signinheader.php");
   include("signinmenu.php");
   include("functions.php");

   function validate()
   {
      if ($_REQUEST["CCNumber"] == "")
	  {
	     $message = "Please enter your credicard number<br />";
		 return false;
	  }
	  if ($_REQUEST["CCExpiry"] == "")
	  {
	     $message = "Please enter your credicard expiry date<br />";
		 return false;
	  }
       return true; 
   }
   
   if (!isset($_REQUEST['CCName']))
   {
      header("Location:credicard.php");
   }
   else
   {
	   if (validate())
	   {
		   if (insertData($_REQUEST, "creditcards"))
		   { 
	       
			  print("<h2>Thanks, ".$_SESSION["user"]."! You have booked the package successfully!</h2>");
		   }
		   else
		   {
			  print("Sorry, ".$_SESSION["user"]." you have to try again!");
		   }
	   }
	   else
	   {
	      header("Location: credicard.php");
	   }
   }
?>
