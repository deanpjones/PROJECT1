<?php
   require("variable.php");
   
   
   
   
   
   function insertData($data,$table)
   {
	  global $host; 
	    global $user, $password, $database; 
		
	  $keys = array_keys($data);
	  //array_shift($keys);
	  $colnames = implode(", ",$keys);
	  $values = array_values($data);
	  $colvalues = "'".implode("', '",$values)."'";
	  $sql = "INSERT INTO $table ($colnames) VALUES ($colvalues)"; 
	  //connect to database and run query
      $dbh = mysqli_connect($host,$user,$password,$database);
	    if(!$dbh)
	{
	 print(mysqli_connect_error($dbh));
	 return false;
	 }
	 $result = mysqli_query($dbh, $sql);
	if (!$result) 
	{
      print(mysqli_error($dbh));
     }
	 
	  mysqli_close($dbh);
	  return $result;
   }
  
    function updateData($data,$table)
   {
	  global $host; 
	    global $user, $password, $database; 
		
	  $keys = array_keys($data);
	  //array_shift($keys);
	  $colnames = implode(", ",$keys);
	  $values = array_values($data);
	  $colvalues = "'".implode("', '",$values)."'";
	  $sql = "UPDATE `customers` SET `CustFirstName`='$data[CustFirstName]',`CustLastName`='$data[CustLastName]',`CustAddress`='$data[CustAddress]',`CustCity`='$data[CustCity]',`CustProv`='$data[CustProv]',`CustPostal`='$data[CustPostal]',`CustCountry`='$data[CustCountry]',`CustHomePhone`='$data[CustHomePhone]',`CustBusPhone`='$data[CustBusPhone]',`CustEmail`='$data[CustEmail]',`AgentId`=$data[AgentId] WHERE CustomerId=$data[CustomerId]";
	  print($sql);
	  //connect to database and run query
      $dbh = mysqli_connect($host,$user,$password,$database);
	    if(!$dbh)
	{
	 print(mysqli_connect_error());
	 return false;
	 }
	 $result = mysqli_query($dbh, $sql);
	if (!$result) 
	{
    print(mysqli_error());
     }
	 
	  mysqli_close($dbh);
	  return $result;
   }
?>

<?php
// new function
require("variable.php");

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
   print("<table id='list' align='center'>");
   
   while ($row = mysqli_fetch_assoc($result))
   {
   if ($odd=='odd')
   
   {
   
   print("<tr >");
		  foreach($row as $col)
		  {
			 print("<td >$col</td>");
		  }
		  print("</tr>");	  		  
   $odd='even';
   } else {
		  print("<tr bgcolor='#B3B3F2'>");		  
		  foreach($row as $col)
		  {
			 print("<td >$col</td>");
		  }
		  print("</tr>");
		  $odd='odd';
		  }
			
	  
   }
   print("</table>");
   
   mysqli_close($dbh);
  }
  
  ?>