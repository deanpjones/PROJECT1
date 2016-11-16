  <!--Author:Hua Hong  Course Code:CPRG207 PHP-->              
				<?php
					   $dbh = mysqli_connect($host, $user, $password, $database);
					   if (!$dbh)
					   {
						  print(mysqli_connect_error());
					   }
					    $result1 = mysqli_query($dbh, "SELECT PkgName FROM `packages`  WHERE PackageId=$num");
					    $result2 = mysqli_query($dbh, "SELECT PkgDesc  FROM `packages`  WHERE PackageId=$num");
					    $result3 = mysqli_query($dbh, "SELECT  PkgStartDate FROM `packages`  WHERE PackageId=$num");
                        $result4 = mysqli_query($dbh, "SELECT  PkgEndDate FROM `packages`  WHERE PackageId=$num");
					    $result5 = mysqli_query($dbh, "SELECT PkgBasePrice FROM `packages`  WHERE PackageId=$num");
					 print("<div class='row-fluid' style='color: #ccffff;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px darkblue;font-family:Broadway;'>");
					  
					   while ($row = mysqli_fetch_assoc($result1))
					   {
						  foreach($row as $col)
						  {
							 print("<h4>$col</h4>");
						  }
					   }
					   print("</div>");
					   print("<div class='row' style='font-family:Georgia;font-size:105%;margin-bottom:3%;'>");
					   while ($row = mysqli_fetch_assoc($result2))
					   {
						  $keys = array_keys($row);
						  foreach($row as $col)
						  {
							 
							 print($col);
						  }
					   }
					   print("</div>");
					   print("<div class='row' style='font-family:Georgia;font-size:105%;margin-bottom:3%;'>");
					   while ($row = mysqli_fetch_assoc($result3))
					   {
						  
						  foreach($row as $col)
						  {
							 
							 print("Start Date: ".$col);
						  }
					   }
					   print("</div>");
					   print("<div class='row' style='font-family:Georgia;font-size:105%;margin-bottom:3%;'>");
					   while ($row = mysqli_fetch_assoc($result4))
					   {
						  
						  foreach($row as $col)
						  {
							 
							 print("Expire: ".$col);
						  }
					   }
					   print("</div></div>");
					   print("<div class='col-sm-2' style='text-align:center; margin-top:4%;'>");
					   print("<div class='row' style='font-size:200%;'>");
					   while ($row = mysqli_fetch_assoc($result5))
					   {
						  
						  foreach($row as $col)
						  {
							 
							 echo "$".round($col,0);
						  }
					   }
					   print("</div><div class='row'><a href='packlogin.php'><button type='button' style='background-color:#0000ff;  padding: 10px 18px;font-size: 16px;color: white;text-align: center;text-decoration: none;display: inline-block;'>Book Now
							   </button>
							   </a>
							  </div></div>");
							   

					   mysqli_close($dbh);
					   
				?>