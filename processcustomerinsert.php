<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
   session_start();
   $title="Travel Experts Process Customer Insert page";
     include("grpheader.php");
	 require("mainmenu.php");
  include("functions.php");
   
   if (!isset($_REQUEST['CustFirstName'])||!isset($_REQUEST['CustUserName'])|| !isset($_REQUEST['CustPassword']) )
   {
      header("Location: custregister.php");
   }
   else
   {
	   
		   if (insertData($_REQUEST, "customers"))
		   {
			  header("Location: dj_customer_register_successful_cust.php");
		   }
		   else
		   {
			  print("Data could not be saved to the database, call tech support");
		   }
	  
   }
?>
