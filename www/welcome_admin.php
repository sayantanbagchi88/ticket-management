<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'admin')
	{
	header("location:welcome.php?msg=2");
	}
else
	{	
	echo "\n Welcome ";
	print_r(@$_SESSION[userid]);
	}
?>

<html>
<body bgcolor="ffc99c">
  <form METHOD="post" ACTION="welcome_admin.php" > 
    <table frame=box align=center bgcolor="0000CC">
	<p align="left"  ><a href="login.php"><h4><b>SIGN OUT</b></a></h4></p>
	<CAPTION="TOP" ><b><h1> ADMINISTRATORS' PAGE </b></h1></CAPTION>

     	<p align="center"  ><a href="admin_insert_page.php"><h3><b>INSERT</b></a></h3></p>
	<p align="center"  ><a href="admin_view_info.php"><h3><b>DISPLAY TABLE</b></a></h3></p>
	<p align="center"  ><a href="query1o1.php"><h3><b>VIEW TICKET INFORMATION</b></a></h3></p>
	<p align="center"  ><a href="admin_report.php"><h3><b>REPORT</b></a></h3></p>
         </table>
   </form> 
 <body>
</html>
