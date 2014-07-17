<?php
include 'db_connect.php';

    	$admin_id=$_POST['admin_id'];
	$password=$_POST['password'];


$result = mysql_query("select count(admin_id) as Total from admin where admin_id='$admin_id' and password = '$password'");

$row = mysql_fetch_array($result);
if ($row["Total"]>"0")
	{
	$_SESSION[userid]=$admin_id;
	header("location:welcome_admin.php");
	}
else	
	{
	header("location:login.php?msg=1");
	}
?>
