<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
     session_start();
     $title="Travel Experts Payfor Package Page";
     include("signinheader.php");
	 include("signinmenu.php");
     include("variable.php");
	 
?>
 
 <h1 style="margin-left:32%">Payment Info</h1>
	 <div>
	 </div>
	<div class="rform">
		<form class="form-horizontal" action="processcredicard.php" method="get" >
			<div class="form-group" >
					<label class="col-sm-4 control-label" for="CCName">Credicard Name</label>
						<div class="col-sm-3">  	  
						 <input type="text" class="form-control" name="CCName" id="CCName" /> 
						</div>
			</div>
			<div class="form-group" >
					 <label class="col-sm-4 control-label" for="CCNumber">Credicard Number</label> 
						<div class="col-sm-3">  
							<input type="text" class="form-control" name="CCNumber" id="CCNumber" /> 
						</div>
			</div>
			<div class="form-group" >
					 <label class="col-sm-4 control-label" for="CCExpiry">Credicard Expiry Date</label> 
						<div class="col-sm-3">  
							<input type="date" class="form-control" name="CCExpiry" id="CCExpiry" /> 
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