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
<HTML>
<HEAD>
<TITLE>select records from a table</TITLE>
</HEAD>
<BODY bgcolor="#7E2217" text="white">
<DIV ALIGN="CENTER">
<FONT color=white>
<h2><u>TICKET MANAGEMENT PORTAL</u></h2></FONT>
<FORM action="query1.php" method="post">
<TABLE border=1 cellpadding=2 width="100%">
<table border=1 cellpadding=2 width="80%">
<tr bgcolor="#E18B6B" align="center">
<td><font color="brown" size="3"><b><u>Table Rows</u></b></font></td>
</tr>
</table>
<table border=1 cellpadding=2 width="20%">
<tr bgcolor="#E18B6B" align="center">
<tr><td>Associate's Name:</td><td><input type="text" name="emp_name" value="" size="30"></td></tr> 
</table>
<table>
<tr><td><input type="submit" value="Click Here"></td></tr>
</table>
<DIV ALIGN="CENTER">
<FONT color=white>
<h3><ASSOCIATE'S TICKET INFORMATION</h3></FONT>
<p align="center">
        <FONT color=white size="3">
        <table border=1 width="80%">
<?php

$assigned_to=$_POST['emp_name'];

print "<FONT color=white size='2'> ASSOCIATE'S TICKET INFORMATION \n</FONT>";
	
$result = mysql_query("select * from ticket where ticket.assigned_to ='$assigned_to' order by ticket_no;");

	if ($result || mysql_num_rows($result)) 
		{
        	$numrows = mysql_num_rows($result);
        	$rowcount = 1;
		if (!$result) 
			{    
			die("Query to show fields from table failed");
			}
		$fields_num = mysql_num_fields($result);
		echo "<table border='1'><tr>";
		for($i=0; $i<$fields_num; $i++)
			{ 
   			$field = mysql_fetch_field($result);
    			echo "<td>{$field->name}</td>";
			}
		echo "</tr>\n";
		while($row = mysql_fetch_row($result))
			{
    			echo "<tr>"; 
 			foreach($row as $cell)    
    			echo "<td>$cell</td>";   
 			echo "</tr>\n";
			}
		mysql_free_result($result);
		} 

//print "<FONT color=white size='2'> ASSOCIATE'S PENDING TICKET INFORMATION \n</FONT>";

$result1 = mysql_query("select * from pending_tracker where pending_tracker.assigned_to ='$assigned_to' order by ticket_no;");
	
if ($result1 || mysql_num_rows($result1)) 
	{
        $numrows = mysql_num_rows($result1);
        $rowcount = 1;
	if (!$result1) 
		{    
		die("Query to show fields from table failed");
		}
	$fields_num = mysql_num_fields($result1);
	echo "<table border='1'><tr>";
	for($i=0; $i<$fields_num; $i++)
		{ 
   		$field = mysql_fetch_field($result1);
    		echo "<td>{$field->name}</td>";
		}
	echo "</tr>\n";
	while($row = mysql_fetch_row($result1))
		{
    		echo "<tr>"; 
 		foreach($row as $cell)    
    		echo "<td>$cell</td>";   
 		echo "</tr>\n";
		}
	mysql_free_result($result1);
	} 


?>
</TABLE>
<?php
print "<A HREF='login.php'><FONT color=white size='2'> Home | </A>
<A HREF='associate_view.php'><FONT color=white size='2'> Back | </A>
<A HREF='javascript:history.back();'><FONT color=white size='2'>Previous</A></FONT><BR /><BR />";
?>
</FORM> 
</BODY>
</HTML>

