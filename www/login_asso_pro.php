<?php
include 'db_connect.php';

    	$emp_id=$_POST['emp_id'];
	$password=$_POST['password'];

$result = mysql_query("select count(emp_id) as Total from emppswd where emp_id='$emp_id' and password = '$password';");

//$result1 = mysql_query("update last_login set last_login_time = '$cur_time', last_logout_time = '$log_out' where emp_id = '$emp_id';");

$result2 = mysql_query("select emp_name from employee where emp_id='$emp_id';");

$row1 = mysql_fetch_row($result2);

//setcookie('cookie_emp_name', $row1);

$row = mysql_fetch_array($result);

if ($row["Total"]>"0")
	{
	$_SESSION[userid]= $row1;
	header("location:welcome_associate.php");
	}
else	
	{
	header("location:login.php?msg=1");
	}
?>
