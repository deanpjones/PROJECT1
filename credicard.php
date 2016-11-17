<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
     session_start();
     $title="Travel Experts Payfor Package Page";
     include("signinheader.php");
	 include("signinmenu.php");
     include("variable.php");
	 
?>
 
    
	 <div>
	 </div>
	<div class="rform">
		<form class="form-horizontal" action="processcredicard.php" method="get" >
			<div class="row" style="margin-bottom:1%;">
		        <div class="col-sm-3 col-md-offset-4" >
		            <h3 style="color: white;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px darkblue;font-family:Broadway;">Pay for Package</h3>
		        </div>
		    </div>
		    <!--<div class="row" style="margin-bottom:5%;">
		        <div class="col-sm-3 col-md-offset-4" >
					  <?php
					  
							 /* if(isset($_SESSION["loginmessage"]))
							{
								print("<h5 style='text-align:center;margin-bottom:30px;color:#ff00ff;'>$_SESSION[loginmessage]</h5>");
								unset($_SESSION['loginmessage']);
							}*/
					  
					  ?>
                </div>		  
		    </div>-->
			<div class="form-group required" >
					<label class="col-sm-4 control-label" for="CCName">Credicard Name</label>
						<div class="col-sm-3">  	  
						 <input type="text" required="required" class="form-control" name="CCName" id="CCName" /> 
						</div>
			</div>
			<div class="form-group required" >
					 <label class="col-sm-4 control-label" for="CCNumber">Credicard Number</label> 
						<div class="col-sm-3">  
							<input type="text"  required="required" pattern="[0-9]{16}" title="credicard number must be 16 digits" class="form-control" name="CCNumber" id="CCNumber" /> 
						</div>
			</div>
			<div class="form-group required" >
					 <label class="col-sm-4 control-label" for="CCExpiry">Credicard Expiry Date</label> 
						<div class="col-sm-3">  
							<input type="date" required="required" class="form-control"  name="CCExpiry" id="CCExpiry" /> 
						</div>
			</div>
	 
			<div class="form-group" >
			  <label class="col-sm-4 control-label" for="customerid">CustomerId</label>
				<div class="col-sm-3">
				  <select name="CustomerId" id="customerid" class="form-control" >
				    <?php
						 $dbh = mysqli_connect($host, $user, $password, $database);
						 //put connection checking here
						 if (!$dbh)
						 {
							print(mysqli_connect_error());
						 }
						 $sql = "select CustomerId, CustFirstName,CustLastName from customers where CustUserName='$_SESSION[user]'";
						 $result = mysqli_query($dbh, $sql);
						 //check if result is there
						 if (!$result)
						 {
							mysqli_error($dbh);
						 }
						 while ($row = mysqli_fetch_row($result))
						 {
							print("<option value='$row[0]'>$row[1],$row[2]</option>");
						 }
						 mysqli_close($dbh);
			        ?>
				   </select>
				</div>
			</div>
			<input type="submit" value="Continue" />
		</form>
	</div>
	<?php
	    include("signinfooter.php");
	?>