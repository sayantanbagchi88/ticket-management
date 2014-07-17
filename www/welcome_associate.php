<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'associate')
	{
	header("location:welcome.php?msg=2");
	}
else	
	{
	echo ("Welcome ");
	print_r( @$_SESSION[userid][0]);
	}
?>

<html>
<body bgcolor="ffc99c">
  <form METHOD="post" ACTION="welcome_associate.php" > 
     <table frame=box align=center bgcolor="2CC2E7">
	<CAPTION="TOP" ><b><h1> WELCOME TO TICKET MANAGEMENT PORTAL </b></h1></CAPTION><br>

   	<p align="center"  ><a href="associate_insert.php"><h3><b>INSERT</b></a>   </h3></p>
	<p align="center"  ><a href="associate_view.php"><h3><b> VIEW </b></a>  </h3></p>
	<p align="center"  ><a href="login.php"><h3><b>SIGN OUT</b></a></h3></p>
</table>
   </form> 
 <body>
</html>
