<?php
include 'db_connect.php';

    	$USERNAME=$_POST['USERNAME'];
	$PASSWORD=$_POST['PASSWORD'];

$result = mysql_query("select count(USERID) as Total from login where USERID='$USERNAME' and PASSWORD='$PASSWORD';"); 
$row = mysql_fetch_array($result); 


if ($row["Total"]>"0")
	{ 
	$_SESSION[username]=$USERNAME;
	if($USERNAME == viewer)
		{
		header("location:login_viewer_id.php");
		}
	if($USERNAME == associate)
		{
		header("location:login_asso_id.php");
		}
	if($USERNAME == admin)
		{
		header("location:login_admin_id.php");
		}
	 }
else
	{
	header("location:login.php?msg=1");
	//echo "unsuccessful";
	}
?>