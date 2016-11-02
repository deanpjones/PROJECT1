
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="grp_style.css">

<style>
div {
    width: 100px;
    height: 40px;
	//background: blue;
    background-image: url("flyplane.png");
	background-repeat: no-repeat;
    
    //background-attachment: fixed;
	position: relative;
    -webkit-animation: mymove 0s infinite; 
    -webkit-animation-delay: 0s; /* Safari 4.0 - 8.0 */
    animation: mymove 60s infinite;
    animation-delay: 0s;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    from {left: -10%;}
    to {left: 110%;}
}

@keyframes mymove {
    from {left: -10%;}
    to {left: 110%;}
}
</style>
</head>
<body>


<div></div>
<p id='bigblue' >GROUP TRAVEL AGENCY</p>

<br />


<?php

$count=8;
$rows=0;

print("<table align='center' border=2 width=70%>");
	
	for($rows=0;$rows<$count; $rows++)
	{
	print("<tr>");
		print("<td  width=50% align='center'>Sample Link</td> ");
		print("<td width=50% align='center'>Sample  " . $rows . "</td>");
	print("</tr>");
	}
print("</table>");

?>

</body>
</html>





 
