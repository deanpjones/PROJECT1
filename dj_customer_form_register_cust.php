<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.08, 2016
	#DJ_CUSTOMER_FORM_REGISTER.PHP (customer insert data form)
	#-------------------------
	#SUPPORTING FILES
		#DJ_FORM_VALIDATION.JS					(javascript validation)
		#DJ_CUSTOMER_TESTER.PHP					(InsertData FUNCTION, not on FUNCTIONS.PHP)
		#DJ_CUSTOMER_REGISTER_SUCCESSFUL.PHP	(if validated)
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "Customer Registration";

?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8">
		<meta name="Description" content="Travel Agency Project - Register">
		<meta name="Keywords" content="travel, contact, destination, html, css, php">
		<meta name="Author" content="Dean Jones">
		<meta name="Date" content="Nov.14, 2016">
		
		<!-- JAVASCRIPT - FORM VALIDATION -->
		<script type="text/javascript" src="dj_form_validation.js"></script>
		
		<!--TAB ON BROWSER-->
		<title> Travel Experts - Register</title>
	</head>
	<body>
			<!-- HEADER -->
			<?php 
			include_once 'grpheader.php';
			include("mainmenu.php");
			?>
			
			<main>
			<h2>Customer Registration</h2>
				<article style="margin-left: 27%">			
					<!--
					`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, 
							`CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`,
					-->
				<!--ADDED (ONSUBMIT) TO FORM, instead of SEND BUTTON -->
				<form method="post" name="cust_form" action="dj_customer_tester_cust.php" onsubmit="return validateForm()">
					<table id="tbl-register">
						<!-- NAME -->
						<!--<th align="left">Customer Registration</th>-->
						<tr>
							<td> First Name: </td>
							<td> <input id="firstname" type="text" name="CustFirstName" placeholder="Firstname" onfocus="myinfoON('FirstName')" onfocusout="myinfoOFF('FirstName')" /></td> 	<!-- oninput="myvalidate()"  -->
							<td id="FirstName"></td>
							<!--USE EMPTY DATA TO SHOW CONFIRMATION <td id="fname"> </td> -->
						</tr>
						<tr>
							<td> Last Name: </td>
							<td> <input id="lastname" type="text" name="CustLastName" placeholder="Lastname" onfocus="myinfoON('LastName')" onfocusout="myinfoOFF('LastName')" /></td>	<!-- oninput="myvalidate2()"  -->																								<!-- <td id="comment2"></td> -->
							<td id="LastName"></td>
						</tr>
					
						<!-- ADDRESS -->
						<tr>
							<td> Address: </td>
							<td> <input id="addr1" type="text" name="CustAddress" placeholder="444 Road SW" onfocus="myinfoON('Address')" onfocusout="myinfoOFF('Address')" /></td>
							<td id="Address"></td>
						</tr>
						<!-- CITY -->
						<tr>
							<td> City: </td>
							<td> <input id="city" type="text" name="CustCity" placeholder="City" onfocus="myinfoON('City')" onfocusout="myinfoOFF('City')" />
							<td id="City"></td>
						</tr>
						<!-- PROVINCE (SELECT) -->
						<tr>
							<td> Province: </td>
							<td>
								<select id="prov" name="CustProv">
									<option value="nil">&lt;  Select Province  &gt;</option>
									<option value="AB">Alberta</option>
									<option value="BC">British Columbia</option>
									<option value="MB">Manitoba</option>								
									<option value="NB">New Brunswick</option>
									<option value="NL">Newfoundland and Labrador</option>
									<option value="NT">Northwest Territories</option>
									<option value="NS">Nova Scotia</option>
									<option value="NU">Nunavut</option>
									<option value="ON">Ontario</option>
									<option value="PE">Prince Edward Island</option>
									<option value="QC">Quebec</option>
									<option value="SK">Saskatchewan</option>
									<option value="YT">Yukon</option>
								</select>
							</td>
							<td id="Province"></td>
						</tr>
						<!-- POSTAL CODE -->
						<tr>
							<td> Postal Code: </td>
							<td> <input id="postalcode" type="text" name="CustPostal" placeholder="T2B2J5" oninput="validate_postal_code()" onfocus="myinfoON('PostalCode')" onfocusout="myinfoOFF('PostalCode')" />
							<td id="PostalCode"></td>
						</tr>
						<!-- COUNTRY -->
						<tr>
							<td> Country: </td>
							<td> <input id="country" type="text" name="CustCountry" placeholder="Country" onfocus="myinfoON('Country')" onfocusout="myinfoOFF('Country')" />
							<td id="Country"></td>
						</tr>
						<!-- HOME PHONE NUMBER -->
						<tr>
							<td> Home Phone: </td>
							<td> <input id="hphone" type="text" name="CustHomePhone" placeholder="403-555-5555" oninput="validate_phone('hphone')" onfocus="myinfoON('HomePhone')" onfocusout="myinfoOFF('HomePhone')" />
							<td id="HomePhone"></td>
						</tr>
						<!-- BUSINESS PHONE NUMBER -->
						<tr>
							<td> Business Phone: </td>
							<td> <input id="bphone" type="text" name="CustBusPhone" placeholder="403-555-5555" oninput="validate_phone('bphone')" onfocus="myinfoON('BusPhone')" onfocusout="myinfoOFF('BusPhone')" />
							<td id="BusPhone"></td>
						</tr>
						<!-- EMAIL -->
						<tr>
							<td> Email: </td>
							<td> <input id="email" type="text" name="CustEmail" placeholder="name.last@email.com" onfocus="myinfoON('Email')" onfocusout="myinfoOFF('Email')" /> </td>
							<td id="Email"></td>
						</tr>
						<tr>
							<td> User ID: </td>
							<td> <input id="UserId" type="text" name="CustUserName" placeholder="enter user name" /> </td>
							<td id="CustUserName"></td>
						</tr>
						<tr>
							<td> Password: </td>
							<td> <input id="Password" type="text" name="CustPassword" placeholder="enter password" /> </td>
							<td id="CustPassword"></td>
						</tr>
						
						<tr>
							<!--- BUTTONS --->
							<!-- <td> <input type="submit" value="Send" /> </td> -->
							<!-- SUBMIT BUTTON -->
							<!-- <td> <input id="send" class="button" type="submit" value="Send" onclick="return validate_send()" /> </td>	 -->
							<td> <input id="send" class="button" type="submit" value="Send" /> </td>
							<!-- <td> <input type="reset" value="Reset" /> </td> -->
							<!-- RESET BUTTON -->
							<td> <input id="reset" class="button" type="reset" value="Reset" onclick="return confirm('Are you sure you want to RESET this form?')" /> </td>
						</tr>
					</table>
				</form>
					
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'grpfooter.php';?>
	</body>
</html>