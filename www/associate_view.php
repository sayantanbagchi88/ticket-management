<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'associate')
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
   <form METHOD="post" ACTION="associate_view.php" > 
      <table frame=box align=center bgcolor="2CC2E7">
	<CAPTION="TOP" ><b><h1> INFORMATION VIEW PAGE </b></h1></CAPTION><br>

	<p align="center"  ><a href="query1.php"><h3><b>VIEW ASSOCIATE'S TICKETS INFORMATION</b></a></h3></p>
   	<p align="center"  ><a href="query10.php"><h3><b>VIEW A TICKET INFORMATION</b></a></h3></p>
	<p align="center"  ><a href="welcome_associate.php"><h3><b>BACK</b></a></h3></p>
</table>
   </form> 
 <body>
</html>
