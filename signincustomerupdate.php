<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
     session_start();
     $title="Travel Experts Customer Update";
     include("signinheader.php");
	 include("signinmenu.php");
     include("variable.php");
	 
	 if (!isset($_REQUEST["CustomerId"]))
	 {
		 header("Location:customerlist.php");
	 }
       else
	   {
		 $dbh = mysqli_connect($host, $user, $password, $database);
		if(mysqli_connect_errno())
		   {
			   print(mysqli_connect_error()); 
			   exit;
		   }
		   $sql = "select * from customers where CustUserName='$_SESSION[user]'";
		   //retrieve the related customer data 
		   $stmt = mysqli_prepare($dbh,$sql);
		   mysqli_stmt_bind_param($stmt,"i",$_REQUEST["CustomerId"]);
		   mysqli_execute($stmt);
		 
		  mysqli_stmt_bind_result($stmt,$custid,$fname,$lname,$address,$city,$prov,$postal,$country,$hphone,$bphone,$email,$agentid);
		  if(mysqli_stmt_fetch($stmt))
		  {
			  
		  }
		  else
		  {
			  print("something went wrong,call tech service");
	      }
		  mysqli_close($dbh);
	   }
		

	   
?>
 
 <h1>Customer data</h1> 
	 <div>
	 <?php
	    if (isset($_SESSION["message"]))
		{
			
			print($_SESSION["message"]);
			unset($_SESSION["message"]); 
		}
	 ?>
	 </div>
	  <!--Construct an HTML form page that will allow the user to enter the data --> 
	  <div class="rform">
	 <form class="form-horizontal" action="processcustomerupdate.php" method="get" >
	 <div class="form-group" >
	  <label class="col-sm-4 control-label" for="custid">Customer ID</label>
       <div class="col-sm-3">  	  
	     <input type="text" class="form-control" name="CustomerId" id="custid" value="<?php print($custid);?>" readonly="readonly" /> 
	   </div>
	   </div>
	    <div class="form-group" >
	     <label class="col-sm-4 control-label" for="fname">First Name</label> 
		  <div class="col-sm-3">  
		    <input type="text" class="form-control" name="CustFirstName" id="fname" value="<?php print($fname);?>"/> 
		 </div>
		</div>
		<div class="form-group" >
		  <label class="col-sm-4 control-label" for="lname">Last Name</label>
		  <div class="col-sm-3">
		   <input type="text" class="form-control" name="CustLastName" id="lname" value="<?php print($lname);?>"/> 
		  </div>
		</div>
		<div class="form-group" >
		  <label class="col-sm-4 control-label" for="address">CustAddress</label>
		  <div class="col-sm-6">
		 <input type="text" class="form-control" name="CustAddress" id="address" value="<?php print($address);?>"/> 
		  </div>
		</div>
		<div class="form-group" >
		  <label class="col-sm-4 control-label" for="city">CustCity</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" name="CustCity" id="city" value="<?php print($city);?>"/> <br>        
		    </div>
		</div>
		<div class="form-group" >
		  <label class="col-sm-4 control-label" for="province">provice</label>
		  <div class="col-sm-3">
		    <input type="text" class="form-control" name="CustProv" id="province" value="<?php print($prov);?>" />
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-4 control-label" for="postal">Postal Code</label>
		  <div class="col-sm-3">
		  <input type="text" class="form-control" name="CustPostal" id="postal" value="<?php print($postal);?>"/>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-4 control-label" for="country">Country</label>
		  <div class="col-sm-3">
		  <input type="text" class="form-control" name="CustCountry" id="country" value="<?php print($country);?>"/>
		 </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-4 control-label" for="hphone">Home Phone</label>
		  <div class="col-sm-4">
		  <input type="text" class="form-control" name="CustHomePhone" id="hphone" value="<?php print($hphone);?>"/>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-4 control-label" for="bphone">Business Phone</label>
		  <div class="col-sm-4">
		  <input type="text" class="form-control" name="CustBusPhone" id="bphone" value="<?php print($bphone);?>"/> 
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="col-sm-4 control-label" for="email">Email</label>
		  <div class="col-sm-3">
		 <input type="text" class="form-control" name="CustEmail" id="email" value="<?php print($email);?>"/>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-4 control-label" for="agentId">Agent Id </label>
		  <div class="col-sm-4">
		  <input type="text" class="form-control" name="AgentId" id="agentid" value="<?php print($agentid);?>"/>
		  </div>
		</div>
        <input type="submit" value="Save" />
	 </form>
	 </div>
		
		
  