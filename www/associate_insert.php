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
<body bgcolor="ce846b">
  <form METHOD="post" ACTION="associate_insert.php" > 
     <table frame=box align=center bgcolor="2CC2E7">
	<CAPTION="TOP" ><b><h1> INSERT INTO TICKET MANAGEMENT PORTAL </b></h1></CAPTION><br>
   <?php
?>
  
   <p align="center"  ><a href="edit_password_asso_check.php"><h3><b>Edit Password Information</b></a></h3></p>
   <p align="center"  ><a href="edit_ticket_asso_check.php"><h3><b>Edit ticket Information</b></a></h3></p>
   <p align="center"  ><a href="welcome_associate.php"><h3><b>BACK</b></a></h3></p>
 </table>
   </form> 
 <body>
</html>
