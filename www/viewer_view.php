<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'viewer')
	{

	header("location:login.php?msg=2");
	}

else	
	{
	echo ("Welcome ");
	print_r( @$_SESSION[userid][0]);
	}

?>

<html>
<body bgcolor="2cc2e7">
   <form METHOD="post" ACTION="viewer_view.php" > 
     <table frame=box align=center bgcolor="0000CC">
	<CAPTION="TOP" ><b><h1> TICKET INFORMATION VIEW PAGE</b></h1></CAPTION><br>

     	<p align="center"  ><a href="viewer_view_ticket.php"><h3><b>VIEW TICKET INFORMATION</b></a></h3></p>
	<p align="center"  ><a href="viewer_asso_ticket_view.php"><h3><b>VIEW ASSOCIATE'S TICKET INFORMATION<p align="center"  ></b></a></h3></p>
	<a href="welcome_viewer.php"><h3><b>BACK</b></a></h3></p>

     </table>
   </form> 
 <body>
</html>
