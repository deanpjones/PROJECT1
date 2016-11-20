<?php
/*Author:Ryan*/
   session_start();
   require("grpheader.php");
   include("mainmenu.php");
   if (isset($_SESSION["loginmessage"]))
   {
      print("<h2>$_SESSION[loginmessage]</h2>");
	  unset($_SESSION['loginmessage']);
   }
?>  
<!--Dean Jones, Nov.16, added header-->
<h2>Agent Login</h2>
<br/><br/><br/>
<table align='center' width=40%>
	<tr>
		<td>
		<form method="post" action="checkagentlogin2.php" align='center' >
		User Id: <input type="text" name="AgtUserId" /><br />
		Password:<input type="password" name="AgtPassword" /><br /><br/>
		<input type="submit" value=" Log In " />
		</form>
		</td>
	</tr>
</table>


<?php
   require("grpfooter.php");
?>