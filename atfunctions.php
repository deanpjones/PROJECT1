<?php
//by Alex T.
   require("variable.php");

   function printname($myname)
   {
      //global $name;
	  $myname = "fred";
	  print("My Name is: $myname");
   }



   function insertData($data, $table)
   {
      global $host, $user, $password, $database;
	  $keys = array_keys($data);
	  //array_shift($keys)
	  $colnames = implode(", ", $keys);

	  $values = array_values($data);
	  $colvalues = "'" . implode("', '", $values) . "'";

	  $sql = "INSERT INTO $table ($colnames) VALUES ($colvalues)";
	  print($sql);

	  //connect to database and run query
	  $dbh = mysqli_connect($host, $user, $password, $database);
	  if (!$dbh)
	  {
	     print(mysqli_connect_error());
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

   function insertPreparedData($data, $table)
   {
      global $host, $user, $password, $database, $message;
	  $keys = array_keys($data);
	  $colnames = implode(", ", $keys);
	  $values = array_values($data);

	  $sql = "INSERT INTO $table ($colnames) VALUES (?,?,?,?,?,?,?)";
	  print($sql);

	  //connect to database and run query
	  $dbh = mysqli_connect($host, $user, $password, $database);
	  if (!$dbh)
	  {
	     print(mysqli_connect_error());
	     return false;
	  }

	  $stmt = mysqli_prepare($dbh, $sql);
	  mysqli_stmt_bind_param($stmt, "ssssssi", $values[0], $values[1], $values[2], $values[3], $values[4], $values[5], $values[6]);
	  mysqli_execute($stmt);
	  $result = mysqli_stmt_affected_rows($stmt);
	  if (!$result)
	  {
	     print(mysqli_error($dbh));
	  }

	  mysqli_close($dbh);
	  return $result;
   }

   function updateData($data, $table)
   {
      global $host, $user, $password, $database, $message;
$dbh2=mysqli_connect($host, $user, $password, $database);
$sql2="SELECT AgtUserId FROM agents";
$result2 = mysqli_query($dbh2, $sql2);
while($row2 = mysqli_fetch_row($result2))
{   #if ($_REQUEST=$_SESSION["AgtUserId"])
  /*
  if ($_REQUEST['AgtUserId']==$_SESSION["AgtUserId"])
    {

    }


    else if ($_REQUEST['AgtUserId']==$row2[0])
    {
      $message .= 'Error This user Id already taken!';
      return false;
    }*/
}

	  $keys = array_keys($data);
	  //array_shift($keys)
	  $colnames = implode(", ", $keys);

	  $values = array_values($data);
	  $colvalues = "'" . implode("', '", $values) . "'";

	  $sql = "UPDATE $table SET `AgtFirstName`='$data[AgtFirstName]',`AgtMiddleInitial`='$data[AgtMiddleInitial]',`AgtLastName`='$data[AgtLastName]',`AgtBusPhone`='$data[AgtBusPhone]',`AgtEmail`='$data[AgtEmail]',`AgtPosition`='$data[AgtPosition]',`AgencyId`='$data[AgencyId]',`AgtUserId`='$data[AgtUserId]',`AgtPassword`='$data[AgtPassword]' WHERE `AgentId`='$data[AgentId]'";
	  print($sql);

	  //connect to database and run query
	  $dbh = mysqli_connect($host, $user, $password, $database);
	  if (!$dbh)
	  {
	     print(mysqli_connect_error());
	     return false;
	  }
    print("<p>DB Connected.</p>");

	  $result = mysqli_query($dbh, $sql);
	  if (!$result)
	  {
	     print(mysqli_error($dbh));
	  }
    print("<p>DB Updated.</p>");

	  mysqli_close($dbh);
	  return $result;
   }
   function validate()
    {
   	  global $message;
       if ($_REQUEST["AgtFirstName"]=="")
       {
          $message .= "First name must have a value<br />";

       }

   	  if ($_REQUEST["AgtLastName"]=="")
   	  {
   	     $message .= "Last Name must have a value<br />";

   	  }
   	  if ($_REQUEST["AgtBusPhone"]=="")
   	  {
   	     $message .= "Phone Number must have a value<br />";

   	  }

       if ($_REQUEST["AgtEmail"]=="")
       {
          $message .= "Email must have a value<br />";

       }

   	  if ($message != "")
   	  {
   	     return false;
   	  }
   	  else
   	  {
   	     return true;
 	    }
    }


?>
