<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
   session_start();
   $title="Travel Expert Booking Login";
   include("grpheader.php");
   include("mainmenu.php")
?>
   
    <div class="rform">
	    <form class="form-horizontal" method="post" action="checkpacklogin.php">
		    <div class="row" style="margin-bottom:1%;">
		        <div class="col-sm-3 col-md-offset-4" >
		            <h3 style="color: white;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px darkblue;font-family:Broadway;">Customer Sign In</h3>
		        </div>
		    </div>
		    <div class="row" style="margin-bottom:5%;">
		        <div class="col-sm-3 col-md-offset-4" >
		        <?php
		  
					  if(isset($_SESSION["loginmessage"]))
					{
						print("<h4 style='text-align:center;margin-bottom:30px;color:#ff00ff;'>$_SESSION[loginmessage]</h4>");
						unset($_SESSION['loginmessage']);
					}
			  
		        ?>
                </div>		  
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
    <div>
	    <h4 style='margin-left:37%;margin-bottom:30px;'>Don't have an account?<a href="newcustomerregisterforbooking.php"> Register</a></h4>
    </div>
	<?php
       require("grpfooter.php");
    ?>