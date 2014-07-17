<html>
<body bgcolor="ce846b">
 <form METHOD="post" ACTION="admin_insert_page.php" > 
  <table frame=box align=center bgcolor="2CC2E7">
	<CAPTION="TOP" ><b><h2> INSERT INFORMATION PAGE </b></h1></CAPTION><br>


<?php

include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'admin')
	{
	header("location:login.php?msg=2");
	}
else	
	{
	echo ("Welcome ");
	print_r( @$_SESSION[userid]);
	}

?>

   
	<p align="center"  ><a href="team_check.php"><h3><b>INSERT TEAM INFORMATION</b></a> </h3></p>
   	<p align="center"  ><a href="associate_check.php"><h3><b>INSERT ASSOCIATE INFORMATION</b></a>   </h3></p>
   	<p align="center"  ><a href="viewer_check.php"><h3><b>INSERT VIEWER INFORMATION</b></a>   </h3></p>
   	<p align="center"  ><a href="ticket_check.php"><h3><b>INSERT TICKET INFORMATION</b></a>   </h3></p>
   	<p align="center"  ><a href="edit_ticket_asso_check.php"><h3><b>EDIT TICKET INFORMATION</b></a></h3></p>
 	<p align="center"  ><a href="welcome_admin.php"><h3><b>BACK</b></a></h3></p>
 	</table>
  	 </form> 
<body>
</html>
