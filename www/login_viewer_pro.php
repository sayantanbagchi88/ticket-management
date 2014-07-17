<?php
ob_start();
session_start();
include 'db_connect.php';
    	$viewer_id=$_POST['viewer_id'];
	$password=$_POST['password'];

$result = mysql_query("select count(viewer_id) as Total from viewer where viewer_id='$viewer_id' and password = '$password';");

$result2 = mysql_query("select viewer_name from viewer where viewer_id='$viewer_id';");

$row1 = mysql_fetch_row($result2);

$row = mysql_fetch_array($result);
if ($row["Total"]>"0")
	{
	$_SESSION[userid]= $row1;
	header("location:welcome_viewer.php");
	}
else	
	{
	header("location:login.php?msg=1");
	}
?>
