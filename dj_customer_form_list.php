<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.14, 2016
	#DJ_CUSTOMER_UPDATE.PHP (AGENT ONLY) CUSTOMER LIST PULLDOWN
	#-------------------------
	#SUPPORTING FILES
		#DJ_CUSTOMER_FORM_UPDATE.PHP				(customer UPDATE data form)
		#DJ_CUSTOMER_TESTER_UPDATE.PHP				(tester)
		#DJ_CUSTOMER_FORM_UPDATE_SUCCESSFUL.PHP		(if validated)
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "Customer Update (Agent Only)";
	
	//GLOBAL VARIABLES
	include("variable.php");

?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8">
		<meta name="Description" content="Travel Agency Project - Register">
		<meta name="Keywords" content="travel, contact, destination, html, css, php">
		<meta name="Author" content="Dean Jones">
		<meta name="Date" content="Nov.14, 2016">
		
		<!--TAB ON BROWSER-->
		<title> Travel Experts - Customer Update</title>
	</head>
	<body>
			<!-- HEADER -->
			<?php 
			include_once 'grpheader.php';
			include("mainmenu_agent.php");
			?>
			
			<main>
			<h2>Customer Update</h2>
				<article style="margin-left: 40%">
				<table>	
					<th align="left">--- Pick a Customer ---</th>

					<!-- UPDATE SQL QUERY --->
					<tr>
						<td>
					<form method="post" action="dj_customer_form_update.php">					
						<select name="CustomerId" >
						<?php
						#--------------------------------------------------------------------------------------------------------
						#--------------------------------------------------------------------------------------------------------
						#CREATE A PULLDOWN (CUSTOMERS)
							#-------------------------------------------------------------
							#DB CONNECT
								global $host, $user, $password, $database;
								$dbh = mysqli_connect($host, $user, $password, $database);
									#ERROR IF DATABASE DOESN'T CONNECT
									if(!$dbh)											#IF (NOT CONNECTED) TO DATABASE
									{
										#CREATE A (LOG FILE)
										$file = fopen("log/errorlog.txt", "a");			#OPENS FILE (OR CREATES)(TO APPEND)
										fwrite($file, mysqli_connect_error() . "\n");	#WRITES TO FILE
										fclose($file);									#CLOSES FILE
										exit();											#MAKES SURE IT DOESN'T CONTINUE WITHOUT A CONNECTION
									}
									else
									{
										#print("*** SQL DATABASE CONNECTED ***<br />");
										error_log("*** SQL DATABASE CONNECTED ***");
									}			
							#END DB CONNECT
							#-------------------------------------------------------------
							#SQL QUERY
								#$sql = "SELECT `CustomerId` FROM `customers`";
								$sql = "SELECT CustomerId, CustFirstName, CustLastName FROM customers";
							#-----------------------------
							#GET RESULT
							$result = mysqli_query($dbh, $sql);
							#-----------------------------
							#CHECK CONNECTION FIRST...
							if (mysqli_errno($dbh))
							{
								print(mysqli_error($dbh));
								exit;
							}
							#-----------------------------
							#GENERATE (<option>) PULLDOWN
							while ($row = mysqli_fetch_row($result))
							{
								print("<option value='$row[0]'>$row[1] $row[2]</option>");
							}
							#-----------------------------
						?>
						</select>
						<input type="submit" value="Edit Customer Info" />				
					</form>
						</td>
					</tr>
				</table>									
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'grpfooter.php';?>
	</body>
</html>