<?php
//by Alex T.
	$title="Agent Insert";
   session_start();
   include("variable.php");
   if (!isset($_SESSION["AgtUserId"]))
   {
      header("Location: agentlogin2.php");
   }
?>
   <script>
       function validate()
		 {
		    var status = true;
			var message = "";
			var myfname = document.getElementById("fname");
			if (myfname.value == "")
			{
			   message += "First Name must have a value<br />";
			   myfname.style.backgroundColor = "red";
			   status = false;
			}

      var mymname = document.getElementById("mname");
			if (mymname.value == "")
			{
			   message += "mymname must have a value<br />";
			   mymname.style.backgroundColor = "red";
			   status = false;
			}

			var mylname = document.getElementById("lname");
			if (mylname.value == "")
			{
			   message += "Last Name must have a value<br />";
			   mylname.style.backgroundColor = "red";
			   mylname.focus();
			   status = false;
			}

			var phone = document.getElementById("busphone");
			if (phone.value == "")
			{
			   message += "Phone must have a value<br />";
			   phone.style.backgroundColor = "red";
			   phone.focus();
			   status = false;
			}

			if (status)
			{
			   return confirm("continue to submit?");
			}
			else
			{
			   return false;
			}
			
		 }
         /*if (message != "")
            {
			   document.getElementById("message").innerHTML = message;
			}
			else
            {
			   document.getElementById("message").innerHTML = "";
			}*/
		 function showHideInfo(id, visCode)
		 {
		    document.getElementById(id).style.visibility = visCode;
		 }
   </script>

	<?php 
	include_once 'grpheader.php';
	include("mainmenu_agent.php");
	?>

<h2>Add New Agent</h2>
<?php
   if (isset($_SESSION["message"]))
 {
    print($_SESSION["message"]);
  unset($_SESSION["message"]);
 }
?>
<article style="margin-left:27%">
      <table>
      	  <form method="post" action="tester.php">
        <!--<tr>
           <td>Agent Id:</td><td><input type="text" id="agtid" name="AgentId"  readonly="readonly" /></td>
        </tr>-->
        <tr>
      	    <td> First Name:</td><td><input type="text" id="fname" name="AgtFirstName" onfocus="showHideInfo('fn', 'visible')" onblur="showHideInfo('fn', 'hidden')" /></td>
        </tr>
        <tr>
             <td>Middle Name:</td><td><input type="text" id="mname" name="AgtMiddleInitial" onfocus="showHideInfo('mn', 'visible')" onblur="showHideInfo('mn', 'hidden')" /></td>
        </tr>
        <tr>
             <td>Last Name:</td><td><input type="text" id="lname" name="AgtLastName"  onfocus="showHideInfo('ln', 'visible')" onblur="showHideInfo('ln', 'hidden')"  /></td>
        </tr>
        <tr>
             <td>Business Phone:</td><td><input type="text" id="busphone" name="AgtBusPhone"  onfocus="showHideInfo('bp', 'visible')" onblur="showHideInfo('bp', 'hidden')" /></td>
        </tr>
        <tr>
             <td>Email:</td><td><input type="text" id="email" name="AgtEmail" onfocus="showHideInfo('em', 'visible')" onblur="showHideInfo('em', 'hidden')" /></td>
        </tr>
        <tr>
      		 <td>Agent Position:</td><td><input type="text" id="position" name="AgtPosition"  onfocus="showHideInfo('ap', 'visible')" onblur="showHideInfo('ap', 'hidden')" /></td>
        </tr>
        <tr>
      		 <!--<td>Agency Id:</td><td><input type="text" id="agency" name="AgencyId"  onfocus="showHideInfo('ai', 'visible')" onblur="showHideInfo('ai', 'hidden')" /></td>-->
               <td>Agency Id:</td><td><select name="AgencyId">
					<?php

						$dbh = mysqli_connect($host, $user, $password, $database); //handle
						if(!$dbh)
						{
						  print(mysqli_connect_error());
						}
						$sql="select AgencyId, AgncyAddress, AgncyCity, AgncyProv, AgncyCountry from agencies";
						$result = mysqli_query($dbh, $sql);
						if(!$result)
						{
							myqli_error($dbh);
						}
						while($row = mysqli_fetch_row($result)) //stores query results as enum array
						  {
							print("<option value='$row[0]'>$row[1],\n $row[2], $row[3], $row[4]</option>");
						  }

						  mysqli_close($dbh);
						   ?>
						 </select>
					   </td>
	    </tr>
        <tr>
           <td>Agent User Id:</td><td><input type="text" id="userid" name="AgtUserId"  onfocus="showHideInfo('au', 'visible')" onblur="showHideInfo('au', 'hidden')" /></td>
        </tr>
        <tr>
           <td>Agent Password:</td><td><input type="password" id="password" name="AgtPassword"  onfocus="showHideInfo('pp', 'visible')" onblur="showHideInfo('pp', 'hidden')" /></td>
        </tr>
        <tr>
          <td><input type="reset" onclick="return window.confirm('Did you really want to reset?')" /></td>
           <td><input type="submit" onClick="return validate()"/></td>
        </tr>

      	  </form>
      </table>
    </article>
	<!--<p id="message" style="background-color:yellow"></p>
  	  <p class="info" id="fn">Enter your first name</p>
      <p class="info" id="mn">Enter middle name initials</p>
  	  <p class="info" id="ln">Enter your last name</p>
  	  <p class="info" id="bp">Phone number format: (xxx) xxx-xxxx</p>
  	  <p class="info" id="em">Enter your email</p>
      <p class="info" id="ap">Enter your position</p>
      <p class="info" id="ai">Enter your agency Id</p>
      <p class="info" id="au">Your User Id</p>
      <p class="info" id="pp">Your new Password</p>-->
<!--<article style="margin-left:27%">
  <table>
    <form method="get" action="tester.php">
<tr>
    <td>First Name:</td><td><input type="text" name="AgtFirstName" /></td>
</tr>
<tr>
    <td>Middle Initial:</td><td><input type="text" name="AgtMiddleInitial" /></td>
</tr>
<tr>
    <td>Last Name:</td><td><input type="text" name="AgtLastName" /></td>
</tr>
<tr>
    <td>Business Phone:</td><td><input type="text" name="AgtBusPhone" /></td>
</tr>
<tr>
    <td>Email:</td><td><input type="text" name="AgtEmail" /></td>
</tr>
<tr>
    <td>Position:</td><td><input type="text" name="AgtPosition" /></td>
</tr>
<tr>
    <td>User Id:</td><td><input type="text" name="AgtUserId" /></td>
</tr>
<tr>
    <td>Password:</td><td><input type="text" name="AgtPassword" /></td>
</tr>
    <tr>
      <td>Agency Id:</td><td><select name="AgencyId">
<?php

    /*$dbh = mysqli_connect($host, $user, $password, $database); //handle
    if(!$dbh)
    {
      print(mysqli_connect_error());
    }
    $sql="select AgencyId, AgncyAddress, AgncyCity, AgncyProv, AgncyCountry from agencies";
    $result = mysqli_query($dbh, $sql);
    if(!$result)
    {
        myqli_error($dbh);
    }
    while($row = mysqli_fetch_row($result)) //stores query results as enum array
      {
        print("<option value='$row[0]'>$row[1],\n $row[2], $row[3], $row[4]</option>");
      }

      mysqli_close($dbh);*/
       ?>
     </select>
   </td>
   </tr></br>
    <tr>
      <td><input type="submit" value="Save" /></td>
    </tr>
   </form>
 </table>
 </article>-->
 <?php
  require("grpfooter.php");
 ?>
