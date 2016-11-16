<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.14, 2016
	#DJ_CUSTOMER_UPDATE_SUCCESSFUL.PHP
	#-------------------------
	#SUPPORTING FILES
		#DJ_CUSTOMER_FORM_UPDATE.PHP		(customer UPDATE data form)
		#DJ_CUSTOMER_TESTER_UPDATE.PHP		(tester)
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "Customer Register";
	
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
		<title> Travel Experts - Register</title>
	</head>
	<body>
			<!-- HEADER -->
			<?php 
			include_once 'grpheader.php';
			include("mainmenu_agent.php");
			?>
			
			<main>
				<article style="margin-left: 20%">
					<table>
						<tr>
							<td><h2>*** Customer UPDATE - SUCCESSFUL! ***</h2></td>
						</tr>
					</table>
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'grpfooter.php';?>
	</body>
</html>