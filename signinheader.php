<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<!DOCTYPE html>
<html>
   <head>
		<title><?php print($title); ?></title>
		<meta charset="utf-8"/>
		
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="grp_style.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-sacle=1.0">
		<style>
			.menu a:link, .menu a:visited {
					 color:#999999;
					 }
			.menu a:hover, .dropdown:hover .dropbtn,.menu a:active {
										background-color:#C8C8C8;
										color:black;
									  }
		</style>

    </head>
   
   <body class="body" >
        <div class="container-fluid">
		    <header class="mainheader" style="background-image:url(grpheader.jpg); background-size:100%;">
		        <div class="container">
				    <div class="row"> 
					    <img src="flyplane.png" class="col-md-2"/>
					    <h1 class="col-md-6" style="color: white;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px darkblue;font-family:Broadway;"><em>Welcome to Travel Experts</em></h1>
					    <p class="col-md-3" style="color:white;font-family:Times New Roman;font-size:150%">Call:1-855-349-7896(Canada)</p>
				    </div>
				    <div  class="row">
					    <p class="col-md-3 col-md-offset-7" style="color:white;font-family:Broadway;font-size:150%;width:20%;">Good
						    <?php
						
								 date_default_timezone_set('MST7MDT');
								 $time = date("H");
								 if ($time>=5 && $time<12)
								 {
									print("Morning<br>");
									
								 }elseif ($time>=12 && $time<18)
								 {
									print("Afternoon<br>");
									  
								 }elseif ($time>=18 && $time<22)
								 {
									print("Evening<br>");
									 
								 }else{
									 print("Night<br>");
										 
								 }
							 
						    ?>
						</p>
						<span class="col-md-2" style="color:white;font-family:Broadway;font-size:200%;"><?php if(isset($_SESSION["user"]))
								 {
									 print($_SESSION["user"]);
									
								 } ?>
						</span>
					 </div>  
			    </div>
	         </header>