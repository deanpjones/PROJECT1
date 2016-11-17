<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
     session_start();

     $title="Travel Experts Package Book";
     include("signinheader.php");
	 include("signinmenu.php");
     include("variable.php");
	 
?>
 
 
	  <div class="rform">
		<form class="form-horizontal" action="processpackbook.php" method="get" >
		    <div class="row" style="margin-bottom:1%;">
		        <div class="col-sm-3 col-md-offset-4" >
		            <h3 style="color: white;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px darkblue;font-family:Broadway;">Book a Vacation</h3>
		        </div>
		    </div>
		    <!--<div class="row" style="margin-bottom:5%;">
		        <div class="col-sm-3 col-md-offset-4" >
					  <?php
					  
							  /*if(isset($_SESSION["loginmessage"]))
							{
								print("<h5 style='text-align:center;margin-bottom:30px;color:#ff00ff;'>$_SESSION[loginmessage]</h5>");
								unset($_SESSION['loginmessage']);
							}*/
					  
					  ?>
                </div>		  
		    </div>-->
			<div class="form-group required" >
					<label class="col-sm-4 control-label" for="bookingdate">Booking Date</label>
						<div class="col-sm-3">  	  
						 <input type="date" class="form-control" required="required" name="BookingDate" id="bookingdate" /> 
						</div>
			 </div>
			 <div class="form-group" >
					 <label class="col-sm-4 control-label" for="bookingno">Booking No</label> 
						<div class="col-sm-3">  
							<input type="text" class="form-control" name="BookingNo" id="bookingno" /> 
						</div>
			 </div>
			 <div class="form-group required" >
					  <label class="col-sm-4 control-label" for="adult">Adult(12+)</label>
					   <div class="col-sm-3">
					   <select class="form-control" id="adult" required="required" name="Adult" >
										 <option ></option>
										 <option  >0</option>
										 <option  >1</option>
										 <option  >2</option>
										 <option >4</option>
										 <option  >5</option>
										 <option  >6</option>
						</select>
					  </div>
				</div>
				<div class="form-group" >
					  <label class="col-sm-4 control-label" for="child">Child(2-11)</label>
					  <div class="col-sm-3">
					  <select class="form-control" id="child"  name="Child" >
										 <option ></option>
										 <option >0</option>
										 <option >1</option>
										 <option >2</option>
										 <option >4</option>
					  </select>
				  </div>
				</div>
				<div class="form-group required" >
				  <label class="col-sm-4 control-label" for="customerid">CustomerId</label>
					<div class="col-sm-3">
					  <select name="CustomerId" required="required" id="customerid" class="form-control" >
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
				<div class="form-group required" >
				  <label class="col-sm-4 control-label" for="triptype">Trip Type</label>
				  <div class="col-sm-3">
				   <select name="TripTypeId" required="required" id="triptype" class="form-control" >
						<?php
							 $dbh = mysqli_connect($host, $user, $password, $database);
							 //put connection checking here
							 if (!$dbh)
							 {
								print(mysqli_connect_error());
							 }
							 $sql = "select TripTypeId, TTName from triptypes";
							 $result = mysqli_query($dbh, $sql);
							 //check if result is there
							 if (!$result)
							 {
								mysqli_error($dbh);
							 }
							 while ($row = mysqli_fetch_row($result))
							 {
								print("<option value='$row[0]'>$row[1]</option>");
							 }
							 mysqli_close($dbh);
						?>     
				   </select>
				  </div>
				</div>
				<div class="form-group required"">
				  <label class="col-sm-4 control-label" for="packageid">PackageId</label>
				  <div class="col-sm-3">
				   <select name="PackageId" required="required" id="packageid" class="form-control" >
						<?php
							 $dbh = mysqli_connect($host, $user, $password, $database);
							 //put connection checking here
							 if (!$dbh)
							 {
								print(mysqli_connect_error());
							 }
							 $sql = "select PackageId,PkgName from packages";
							 $result = mysqli_query($dbh, $sql);
							 //check if result is there
							 if (!$result)
							 {
								mysqli_error($dbh);
							 }
							 while ($row = mysqli_fetch_row($result))
							 {
								print("<option value='$row[0]'>$row[1]</option>");
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
		
		
  