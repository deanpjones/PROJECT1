<!--Author:Hua Hong  Course Code:CPRG207 PHP-->
<?php
  $title = "Travel Expert Home Page";
 require("grpheader.php");
 require("mainmenu.php");
 include("variable.php");
?>


   <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:90%; margin-left:5%">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2" ></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox" style="height:450px;">
			<div class="item active">
				<img src="it1.jpg" alt="Image" style="width:100%;height:450px;">
			</div>

			<div class="item">
				<img src="it2.jpg" alt="Image" style="width:100%;height:450px;">
			</div>
			<div class="item">
				<img src="it3.jpg" alt="Image" style="width:100%;height:450px;">
			</div>
			<div class="item">
				<img src="it4.jpg" alt="Image" style="width:100%;height:450px;">
			</div>  
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div>
	<section class="mainsection">
	    <div class="container-fluid">
				<div id="firstsectionpart">
				   <div class="container-fluid">
						<div class="row">
							<h1 style="color: yellow;
								text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px darkblue;font-family:Times New Roman;font-style:bold;font-size:180%">About Us</h1>
							<p style="font-style:none;font-size:200%;color:#ffcc00;font-family:Times New Roman">
								<img src="flyplane.png" style="float:left;width:42px;height:42px;">
								<img src="enjoylife.jpg"  style="float:right;width:12%; height:50%;">
								The goal of Travel Experts is to help you enjoy real life by taking vacations.We offer different travel packages that suitable for couples,children,groups and children. We earn business by always ensuring satisfaction.
							</p>
						</div>
				   </div> 
				</div>
				<!--<div class="secondsectionpart">
					<div class="container-fluid">
						<div class="row">				
							<h1 style="color: yellow;text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px darkblue;font-family:Times New Roman;font-style:bold;font-size:180%">Travel Agents</h1>
						
							<h2 style="font-style:none;color:#ffcc00;font-family:Times New Roman">Already registered with us?</h2>
						
							<button type="button"  style="background-color: #66ff33; color: white;text-align: center;text-decoration: none;display: inline-block;cursor: pointer;">
								Join Us Now!
							</button>
						</div>
						
					</div>
				</div>-->
				<div  id="thirdsectionpart">
				    
						<h1 style="color: yellow;text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px darkblue;font-family:Times New Roman;font-style:bold;font-size:180%">Vacation Package</h1>

						<div class="container-fluid text-center" style="border:1px solid #ccc; border-radius:10px;box-sizing:border-box;box-shadow:rgb(110, 110, 110)10px 10px 10px;margin-bottom:3%;">
							<div class="row">
								<div class="col-sm-3">
									<img src="caribbean6.jpg" class="img-responsive" style="width:100%; height:180px;margin-bottom:10%;margin-top:10%;" alt="Image">
								</div>
								<div class="col-sm-3">
									<img src="caribbean4.jpg" class="img-responsive" style="width:100% ; height:180px;margin-bottom:10%;margin-top:10%;" alt="Image">
								</div>
								<div class="col-sm-4" style="margin-top:3%;">
									<?php
										   
											$num=1;
											include("package2.php")
										   
									?>	  
							    </div>
								
						</div>
						<div class="container-fluid text-center" style="border:1px solid #ccc; border-radius:10px;box-sizing:border-box;box-shadow:rgb(110, 110, 110)10px 10px 10px;margin-bottom:3%;">
							<div class="row">
								<div class="col-sm-3">
									<img src="polynesia3.jpg" class="img-responsive" style="width:100%; height:180px;margin-bottom:10%;margin-top:10%;" alt="Image">
								</div>
								<div class="col-sm-3">
									<img src="polynesia2.jpg" class="img-responsive" style="width:100% ; height:180px;margin-bottom:10%;margin-top:10%;" alt="Image">
								</div>
								<div class="col-sm-4" style="margin-top:3%;">
									<?php
										$num=2;
										include("package2.php")
								   ?>	  
							    </div>
							
						</div>
						<div class="container-fluid text-center" style="border:1px solid #ccc; border-radius:10px;box-sizing:border-box;box-shadow:rgb(110, 110, 110)10px 10px 10px;margin-bottom:3%;">
							<div class="row">
								<div class="col-sm-3">
									<img src="photo3.jpg" class="img-responsive" style="width:100%; height:180px;margin-bottom:10%;margin-top:10%;" alt="Image">
								</div>
								<div class="col-sm-3">
									<img src="photo3.jpg" class="img-responsive" style="width:100% ; height:180px;margin-bottom:10%;margin-top:10%;" alt="Image">
								</div>
								<div class="col-sm-4" style="margin-top:3%;">
									<?php
										$num=3;
										include("package2.php")
									?>
								</div>
							
						</div>
						<div class="container-fluid text-center" style="border:1px solid #ccc; border-radius:10px;box-sizing:border-box;box-shadow:rgb(110, 110, 110)10px 10px 10px;margin-bottom:3%;">
							<div class="row">
								<div class="col-sm-3">
									<img src="photo4.jpg" class="img-responsive" style="width:100%; height:180px;margin-bottom:10%;margin-top:10%;" alt="Image">
								</div>
								<div class="col-sm-3">
									<img src="european1.jpg" class="img-responsive" style="width:100% ; height:180px;margin-bottom:10%;margin-top:10%;" alt="Image">
								</div>
								<div class="col-sm-4" style="margin-top:3%;">
									<?php
										$num=4;
										include("package2.php")
									?>			  
								</div>
							</div>
						
				</div>	
		</div>
    </section>

<?php
  require("grpfooter.php");
?>







 
