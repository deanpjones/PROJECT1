<?php
// authored by RYAN EBY
   require("variable.php");
  
 
function listAgency()
{
$count=0;
global $host; 
	global $user, $password, $database; 
   $dbh = mysqli_connect($host, $user, $password, $database);
   if (!$dbh)
   {
      print(mysqli_connect_error());
   }
   else
   {
   }
   //do something
   $result = mysqli_query($dbh, "SELECT AgncyAddress, AgncyCity, AgncyProv FROM `agencies`");
      
   while ($row = mysqli_fetch_assoc($result))
   {
   $count++;
   
   
   print("<h1 align='center'>");
		  foreach($row as $col)
		  {
			 print("$col | ");
			
			 
		  }  // end foreach
		  print("</h1><hr/>");
		  
	listAgentsByAgencyNumber($count);
	
   }// end while
   print("<br /><br/><br/>");
   
   
   
   mysqli_close($dbh);
  }





 
function listAgentsByAgencyNumber($agency)
{
	global $host; 
	global $user, $password, $database; 
   $dbh = mysqli_connect($host, $user, $password, $database);
   if (!$dbh)
   {
      print(mysqli_connect_error());
   }
   else
   {
      // print("connected");
	  // * * * it works!  * * *
   }
   //do something
   $result = mysqli_query($dbh, "SELECT AgtFirstName, AgtLastName, AgtBusPhone FROM `agents` WHERE AgencyId='$agency'");
   $odd = 'odd';
   print("<table  width=40% style='font-size:125%; margin-left:30%;'>");
   
   while ($row = mysqli_fetch_assoc($result))
   {
   if ($odd=='odd')
   
   {
   
   print("<tr align='center'  bgcolor='#CCCCCC'>");
		  foreach($row as $col)
		  {
			 print("<td >$col</td>");
		  }
		  print("</tr>");	  		  
   $odd='even';
   } else {
		  print("<tr align='center' bgcolor='#B3B3F2'>");		  
		  foreach($row as $col)
		  {
			 print("<td >$col</td>");
		  }
		  print("</tr>");
		  $odd='odd';
		  }
			
	  
   }
   print("</table>");
   print("<br /><br/>");
   
   mysqli_close($dbh);
  }

   
  