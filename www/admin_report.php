
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
<html>
<body bgcolor="2cc2e7">
<form METHOD="post" ACTION="admin_report.php" > 
 <table frame=box align=center bgcolor="0000CC">
<CAPTION="TOP" ><b><h1> INFORMATION REPORT PAGE</b></h1></CAPTION><br>

     	<p align="center"  ><a href="admin_ticket_report.php"><h3><b>GENERATE ALL TICKET REPORT</b></a></h3></p>
     	<p align="center"  ><a href="admin_today_ticket_report.php"><h3><b>GENERATE TODAY'S TICKET REPORT</b></a></h3></p>
     	<p align="center"  ><a href="welcome_admin.php"><h3><b>BACK</b></a></h3></p>

</table>
</form> 
<body>
</html>

