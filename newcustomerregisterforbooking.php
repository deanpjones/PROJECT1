<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
     $title="Travel Experts Customer Register";
     include("grpheader.php");
	 require("mainmenu.php");
	 include("variable.php");
   ?>
    <script>
	    function showHiddenInfo(id, visicode) {
		document.getElementById(id).style.display = visicode;
		}
	</script>
	<div class="regis">
		<h1>Register Here</h1>
	</div>
	<div class="rform">
		<form class="form-horizontal" action="processnewcustinsertforbooking.php" method="get" >
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustFirstName">First Name</label> 
			    <div class="col-sm-3">  
			        <input type="text" class="form-control" name="CustFirstName"  required="required" title="" maxlength="25"  id="CustFirstName" onfocus="showHiddenInfo('p1', 'inline')" onblur="showHiddenInfo('p1', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p1" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>The maxmum length of firstname is 25</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustLastName">Last Name</label>
			    <div class="col-sm-3">
			        <input type="text" class="form-control" name="CustLastName" maxlength="25" required="required" title="" id="CustLastName" onfocus="showHiddenInfo('p4', 'inline')" onblur="showHiddenInfo('p4', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p4" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>The maxmum length of lastname is 25</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustAddress">CustAddress</label>
			    <div class="col-sm-6">
			        <input type="text" class="form-control" name="CustAddress" required="required" title="" id="CustAddress" onfocus="showHiddenInfo('p9', 'inline')" onblur="showHiddenInfo('p9', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p9" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>Address must have the value</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustCity">CustCity</label>
				<div class="col-sm-3">
			        <select id="CustCity" class="form-control" name="CustCity" required="required" title="" onfocus="showHiddenInfo('p10', 'inline')" onblur="showHiddenInfo('p10', 'none')">
						 <option></option>
						 <option value="AI">Airdir</option>
						 <option value="BR">Brooks</option>
						 <option value="CAL">Calgary</option>
						 <option value="CAM">Camrose</option>
						 <option value="CH">Chestermere</option>
						 <option value="CL">Cold Lake</option>
						 <option value="ED">Edmonton</option>
						 <option value="RD">Red Deer</option>
						 <option value="LA">Lacombe</option>
						 <option value="VI">Victoria</option>
						 <option value="WI">Winnipeg</option>
						 <option value="FR">Fredericton</option>
						 <option value="SJ">St.Join's</option>
						 <option value="HA">Halifax</option>
						 <option value="TO">Toronto</option>
						 <option value="CHAR">Charlottetown</option>
						 <option value="qc">Quebec City</option>
						 <option value="RE">Regina</option>
						 <option value="YK">YellowKnife</option>
						 <option value="IQ">Iqaluit</option>
						 <option value="wh">Whitehorse</option>
			        </select>
			    </div>
			</div>
			<div class="row"> 
			    <p id="p10" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>Please select your city</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustProv">provice</label>
				<div class="col-sm-3">
			        <select id="CustProv" class="form-control" name="CustProv" required="required" title="" onfocus="showHiddenInfo('p11', 'inline')" onblur="showHiddenInfo('p11', 'none')">
						  <option></option>
						 <option value="AB">Alberta</option>
						 <option value="ON">Ontario</option>
						 <option value="QC">Quebec</option>
						 <option value="NS">Nova Scotia</option>
						 <option value="NB">New Brunswick</option>
						 <option value="MB">Manitoba</option>
						 <option value="BC">British Columbia</option>
						 <option value="PE">Prince Edward Island</option>
						 <option value="SK">Saskatchewan</option>
						 <option value="NL">Newfoundland and Labrador</option>
			        </select>
			    </div>
			</div>
			<div class="row"> 
			    <p id="p11" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>Please select your province</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustPostal">Postal Code</label>
			    <div class="col-sm-3">
			        <input type="text" class="form-control" name="CustPostal" required="required" title="Please follow the postal code format:X4X 4X4" pattern="^[A-Z]\d[A-Z] ?\d[A-Z]\d$" id="CustPostal" onfocus="showHiddenInfo('p5', 'inline')" onblur="showHiddenInfo('p5', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p5" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>Please follow the postal code format:X4X 4X4</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustCountry">Country</label>
			    <div class="col-sm-3">
			        <input type="text" class="form-control" name="CustCountry" required="required" title="" id="CustCountry" onfocus="showHiddenInfo('p12', 'inline')" onblur="showHiddenInfo('p12', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p12" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>Please enter country here</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustHomePhone">Home Phone</label>
			    <div class="col-sm-4">
			        <input type="text" class="form-control" name="CustHomePhone" required="required" pattern="^[0-9]{3}\-[0-9]{7}$" title="The home phone number includes 10 digits, add dash sign between the first three digits and the rest seven digits" id="CustHomePhone" onfocus="showHiddenInfo('p7', 'inline')" onblur="showHiddenInfo('p7', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p7" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>The home phone number includes 10 digits, add dash sign between the first three digits and the rest seven digits </p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustBusPhone">Business Phone</label>
			    <div class="col-sm-4">
			        <input type="text" class="form-control" name="CustBusPhone" required="required" pattern="^[0-9]{3}\-[0-9]{7}$" title="The business phone number includes 10 digits, add dash sign between the first three digits and the rest seven digits" id="CustBusPhone" onfocus="showHiddenInfo('p13', 'inline')" onblur="showHiddenInfo('p13', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p13" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>The business phone number includes 10 digits, add dash sign between the first three digits and the rest seven digits </p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustEmail">Email</label>
			    <div class="col-sm-3">
			        <input type="email" class="form-control" name="CustEmail"  required="required" title="Please include an @ in the email address and enter a part following @" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="CustEmail" onfocus="showHiddenInfo('p6', 'inline')" onblur="showHiddenInfo('p6', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p6" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>Please include an @ in the email address and enter a part following @</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="AgentId">Agent Id </label>
			    <div class="col-sm-4">
			        <select name="AgentId" id="AgentId" class="form-control"  required="required" title="" onfocus="showHiddenInfo('p15', 'inline')" onblur="showHiddenInfo('p15', 'none')">>
					    <?php
							 $dbh = mysqli_connect($host, $user, $password, $database);
							 //put connection checking here
							 if (!$dbh)
							 {
								print(mysqli_connect_error());
							 }
							 $sql = "select AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone from agents";
							 $result = mysqli_query($dbh, $sql);
							 //check if result is there
							 if (!$result)
							 {
								mysqli_error($dbh);
							 }
							 while ($row = mysqli_fetch_row($result))
							 {
								print("<option value='$row[0]'>$row[1],$row[2], $row[3], $row[4]</option>");
							 }
							 mysqli_close($dbh);
				        ?>
		            </select><br />
			    </div>
			</div>
			<div class="row"> 
			    <p id="p15" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>Please select an agent</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustUserName">User Name</label> 
			    <div class="col-sm-3">  
			        <input type="text" class="form-control" name="CustUserName"  required="required" title="" maxlength="25"  id="CustUserName" onfocus="showHiddenInfo('p16', 'inline')" onblur="showHiddenInfo('p16', 'none')">
			    </div>
			</div>
			<div class="row"> 
			    <p id="p16" class="col-md-5 col-md-offset-5" style="background-color: #ffff66; color:#0033cc; font-family:Times New Roman, Times, serif;"  hidden>The maxmum length of username is 25</p>
			</div>
			<div class="form-group required">
			    <label class="col-sm-4 control-label" for="CustPassword">Password</label>
			    <div class="col-sm-3">
			        <input type="password" class="form-control" name="CustPassword" required="required" title="" id="CustPassword"  />
			    </div>
			</div>
			<input type="reset" value="Reset" onClick="return window.confirm('Really reset?')">
			<input type="submit" value="Save" >	
		</form>
    </div>
   <?php
     include("grpfooter.php");
	 
   ?>