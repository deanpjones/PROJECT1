<?php
/*Author:Ryan*/
   session_start();
   include("variable.php");
   
   $message = "";
   function validate()
   {
      global $message;
	  if ($_REQUEST["AgtUserId"] == "")
	  {
	     $message .= "User Id must have a value<br />";
		 
	  }
	  if ($_REQUEST["AgtPassword"] == "")
	  {
	     $message .= "Password must have a value<br />";
		 
	  }
	  if ($message)
	  {
	     return false;
	  }
	  else
	  {
	     return true;
	  }
   }
   
   
   
   //*** CODE MAIN STARTS HERE ***
   if (!isset($_REQUEST["AgtUserId"]))
   {
	  $_SESSION["amessage"] = "You must log in first";
	  header("Location: agentlogin2.php");
   }
   else
   {
      if (validate())
	  {
		  $dbh = mysqli_connect($host, $user, $password, $database);
		  if (!$dbh)
		  {
			 $fh = fopen("log/errorlog.txt", "a");
			 fwrite($fh, mysqli_connect_error() . "\n");
			 fclose($fh);
			 exit;
		  }
		  $sql = "SELECT AgtPassword from agents where AgtUserId=?";
		  $stmt = mysqli_prepare($dbh, $sql);
		  mysqli_stmt_bind_param($stmt, "s", $_REQUEST[AgtUserId]);
		  mysqli_stmt_execute($stmt);
		  mysqli_stmt_bind_result($stmt, $pwd);
		  if (mysqli_stmt_fetch($stmt))
		  {
			 if ($pwd != $_REQUEST[AgtPassword])
			 {
				
				$_SESSION["loginmessage"] = "Invalid user or password";
				header("Location: checkagentlogin2.php");
			 }
			 else
			 {
				/*$_SESSION["scriptname"] = "agentscreen.php";*/
				$_SESSION["loggedin"] = "yes";
				if (!isset($_SESSION[scriptname]))
				{
				  
				   header("Location: agentscreen.php");
				}
				else
				{ 
					
				   header("Location: $_SESSION[scriptname]");
				}
			 }
		  }
		  else
		  {
			 $_SESSION["loginmessage"] = "Invalid user or password";
			 header("Location: checkagentlogin2.php");
		  }
		  mysqli_close($dbh);
	  }
	  else
	  {
			 $_SESSION["loginmessage"] = $message;
			 header("Location: checkagentlogin2.php");
	  }
   }
?>





