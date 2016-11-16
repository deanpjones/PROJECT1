<?php
//by Alex T.
	$title="Agent Update";
   session_start();
   include("variable.php");
   if (!isset($_SESSION["AgtUserId"]))
   {
      header("Location: agentlogin2.php");
   }
		#header and main menu (Dean Jones)
		include_once 'grpheader.php';
		include("mainmenu_agent.php");
			
      $con = mysqli_connect($host, $user, $password, $database);
	  if (!$con)
	  {
	     print(mysqli_connect_error());
		 exit;
	  }
	  $sql = "select * from agents where AgtUserId=?";
	  $stmt = mysqli_prepare($con, $sql);
	  mysqli_stmt_bind_param($stmt, "i", $_SESSION["AgtUserId"]);
	  mysqli_execute($stmt);
	  mysqli_stmt_bind_result($stmt, $agtid, $fname, $mname, $lname, $busphone, $email, $agtposition, $agencyid, $agtuserid, $agtpassword);
	  if (mysqli_stmt_fetch($stmt))
	  {
	     //do nothing at this point
	  }
	  else
	  {
	     print("Something went wrong");
       echo $_SESSION["AgtUserId"];
	  }
	  mysqli_close($con);
//   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Agent Update</title>
	  <style>
		 input[value='a'] {
		    background-color: pink;
		 }
		 .info {
		  position:absolute;
			right: 10%;
			top: 60%;
			width:30%;
			background-color: turquoise;
			visibility: hidden;
		 }
	  </style>
	  <script>
	     //var myfname;
		/* function validate()
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


			if (message != "")
            {
			   document.getElementById("message").innerHTML = message;
			}
			else
            {
			   document.getElementById("message").innerHTML = "";
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

		 function showHideInfo(id, visCode)
		 {
		    document.getElementById(id).style.visibility = visCode;
		 }*/
	  </script>
   </head>
   <body>
      <h2>AGENT Update Form</h2>
	  <div>
	  <?php
	     if (isset($_SESSION["message"]))
		 {
		    print($_SESSION["message"]);
			unset($_SESSION["message"]);
		 }
	  ?>
	  </div>
    <article style="margin-left:27%">
      <table>
      	  <form method="post" action="processagentupdate.php">
        <tr>
           <td>Agent Id:</td><td><input type="text" id="agtid" name="AgentId" value="<?php print($agtid); ?>" readonly="readonly" /></td>
        </tr>
        <tr>
      	    <td> First Name:</td><td><input type="text" id="fname" name="AgtFirstName" value="<?php print($fname); ?>"onfocus="showHideInfo('fn', 'visible')" onblur="showHideInfo('fn', 'hidden')" /></td>
        </tr>
        <tr>
             <td>Middle Name:</td><td><input type="text" id="mname" name="AgtMiddleInitial" value="<?php print($mname); ?>"onfocus="showHideInfo('mn', 'visible')" onblur="showHideInfo('mn', 'hidden')" /></td>
        </tr>
        <tr>
             <td>Last Name:</td><td><input type="text" id="lname" name="AgtLastName" value="<?php print($lname); ?>" onfocus="showHideInfo('ln', 'visible')" onblur="showHideInfo('ln', 'hidden')"  /></td>
        </tr>
        <tr>
             <td>Business Phone:</td><td><input type="text" id="busphone" name="AgtBusPhone" value="<?php print($busphone); ?>" onfocus="showHideInfo('bp', 'visible')" onblur="showHideInfo('bp', 'hidden')" /></td>
        </tr>
        <tr>
             <td>Email:</td><td><input type="text" id="email" name="AgtEmail" value="<?php print($email); ?>" onfocus="showHideInfo('em', 'visible')" onblur="showHideInfo('em', 'hidden')" /></td>
        </tr>
        <tr>
      		 <td>Agent Position:</td><td><input type="text" id="position" name="AgtPosition" value="<?php print($agtposition); ?>" onfocus="showHideInfo('ap', 'visible')" onblur="showHideInfo('ap', 'hidden')" /></td>
        </tr>
        <tr>
      		 <td>Agency Id:</td><td><input type="text" id="agency" name="AgencyId" value="<?php print($agencyid); ?>" onfocus="showHideInfo('ai', 'visible')" onblur="showHideInfo('ai', 'hidden')" /></td>
        </tr>
        <tr>
           <td>Agent User Id:</td><td><input type="text" id="userid" name="AgtUserId" value="<?php print($agtuserid); ?>" onfocus="showHideInfo('au', 'visible')" onblur="showHideInfo('au', 'hidden')" /></td>
        </tr>
        <tr>
           <td>Agent Password:</td><td><input type="text" id="password" name="AgtPassword" value="<?php print($agtpassword); ?>" onfocus="showHideInfo('pp', 'visible')" onblur="showHideInfo('pp', 'hidden')" /></td>
        </tr>
        <tr>
          <td><input type="reset" onclick="return window.confirm('Did you really want to reset?')" /></td>
           <td><input type="submit" /></td>
        </tr>

      	  </form>
      </table>
    </article>
  	  <p id="message" style="background-color:yellow"></p>
  	  <p class="info" id="fn">Enter your first name</p>
      <p class="info" id="mn">Enter middle name initials</p>
  	  <p class="info" id="ln">Enter your last name</p>
  	  <p class="info" id="bp">Phone number format: (xxx) xxx-xxxx</p>
  	  <p class="info" id="em">Enter your email</p>
      <p class="info" id="ap">Enter your position</p>
      <p class="info" id="ai">Enter your agency Id</p>
      <p class="info" id="au">Your User Id</p>
      <p class="info" id="pp">Your new Password</p>

  <?php
   require("grpfooter.php");
  ?>
