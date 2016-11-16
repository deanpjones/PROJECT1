<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
   session_start();
   $title="Travel Expert Booking Login";
   include("grpheader.php");
   include("mainmenu.php")
?>
   
    <div class="rform">
	    <form class="form-horizontal" method="post" action="checkpacklogin.php">
		    <div class="row">
		        <?php
		  
					if(isset($_SESSION["loginmessage"]))
					{
						print("<h4 style='text-align:center;margin-bottom:30px;color:#ff00ff;'>$_SESSION[loginmessage]</h4>");
						unset($_SESSION['loginmessage']);
					}
			  
		       ?> 
		    </div>
		    <div class="form-group">
			    <label class="col-sm-4 control-label" for="username">User Name:</label>
			    <div class="col-sm-3">  
			        <input id="userid" class="form-control" type="text" name="CustUserName"/>
			    </div>
		    </div>
		    <div class="form-group">
			    <label class="col-sm-4 control-label" for="password">Password:</label>
				<div class="col-sm-3"> 
			        <input type="password" id="password" class="form-control" name="CustPassword"/>
				</div>
		    </div>	
		    <input type="submit" value="Sign In"/>
	    </form>
    </div>
   <!-- <div>
	    <h4 style='margin-left:37%;margin-bottom:30px;'>Don't have an account?<a href="custregister.php"> Register</a></h4>
    </div>-->
	<?php
       require("grpfooter.php");
    ?>