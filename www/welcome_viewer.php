<?php
include 'db_connect.php';

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
<body bgcolor="ffc99c">
  <form METHOD="post" ACTION="welcome_viewer.php" > 
     <table frame=box align=center bgcolor="0000CC">
	<CAPTION="TOP" ><b><h1> WELCOME TO TICKET MANAGEMENT PORTAL</b></h1></CAPTION><br>
	<?php
	$connect=mysql_connect("localhost","root","");
	if( !$connect )
	{
		die("Database Connection failed :  " . mysql_error());
	}
	$db=mysql_select_db("tcsticket",$connect);
	if( !$db )
	{
		die("Database Selection failed :  " . mysql_error());
	}
?> 
<p align="center"  ><a href="viewer_view.php"><h3><b>VIEW</b></a> </h3></p>
<p align="center"  ><a href="login.php"><h3><b>SIGN OUT </b></a>  </h3></p>

   </table>
   </form> 
 <body>
</html>

