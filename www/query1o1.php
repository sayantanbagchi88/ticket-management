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
<HTML>
<HEAD>
<TITLE>select records from a table</TITLE>
</HEAD>
<BODY bgcolor="#7E2217" text="white">
<DIV ALIGN="CENTER">
<FONT color=white>
<h2><u>TICKET MANAGEMENT PORTAL</u></h2></FONT>
<FORM action="query1o1.php" method="post">
<TABLE border=1 cellpadding=2 width="100%">
<table border=1 cellpadding=2 width="80%">
<tr bgcolor="#E18B6B" align="center">
<td><font color="brown" size="3"><b><u>Table Rows</u></b></font></td>
</tr>
</table>
<table border=1 cellpadding=2 width="20%">
<tr bgcolor="#E18B6B" align="center">
<tr><td>Associate's Name:</td><td><input type="text" name="emp_name" value="" size="30"></td></tr> 
<tr><td>From Date:</td><td><input type="text" name="date" value="YYYY-MM-DD" size="30"></td></tr> 
<tr><td><font color="white">Ticket Status:</font></td>
<td>
 	<?php 
    		$result4 = mysql_query("select ticket_status from ticket_status;");
		echo "<select name=\"ticket_status\">";  
  		echo "<option size =20 selected>Select</option>"; 
    		if(mysql_num_rows($result4))  
  			{  
  		  	while($row = mysql_fetch_assoc($result4))  
   		 		{  
  		  		echo "<option>$row[ticket_status]</option>";  
   		 		}  
  
   		 	}  
   		 else { 
   		 	echo "<option>No Status Present</option>";   
    			}  
  	?> 
 </td>	
</table>
<table>
<tr><td><input type="submit" value="Click Here"></td></tr>
</table>
<DIV ALIGN="CENTER">
<FONT color=white>
<h3><TICKET INFORMATION</h3></FONT>
<p align="center">
        <FONT color=white size="3">
        <table border=1 width="80%">
<?php

$assigned_to=$_POST['emp_name'];
$date=$_POST['date'];
$ticket_status=$_POST['ticket_status'];

if ( $date == 'YYYY-MM-DD')
	$date = NULL; 
printf("\n$date\n");


print "<FONT color=white size='2'> TICKET INFORMATION \n</FONT>";

if ($assigned_to != NULL && $ticket_status != 'Select' && ($date != 'YYYY-MM-DD' || $date != NULL))
	{
	$result = mysql_query("select * from ticket where ticket.assigned_to ='$assigned_to' and ticket.ticket_status= '$ticket_status' and ticket.date >= '$date' order by ticket_no;");
	$result1 = mysql_query("select * from pending_tracker where pending_tracker.ticket_no in(select ticket.ticket_no from ticket where ticket.assigned_to ='$assigned_to' and ticket.ticket_status= '$ticket_status' and ticket.date >= '$date') order by ticket_no;");
	}

else if ($assigned_to != NULL && $ticket_status != 'Select' && ($date == 'YYYY-MM-DD' || $date == NULL))
	{
	$result = mysql_query("select * from ticket where ticket.assigned_to ='$assigned_to' and ticket.ticket_status= '$ticket_status' order by ticket_no;");
	$result1 = mysql_query("select * from pending_tracker where pending_tracker.ticket_no in(select ticket.ticket_no from ticket where ticket.assigned_to ='$assigned_to' and ticket.ticket_status= '$ticket_status') order by ticket_no;");
	}

else if ($assigned_to != NULL && $ticket_status == 'Select' && ($date != 'YYYY-MM-DD' || $date != NULL))
	{
	$result = mysql_query("select * from ticket where ticket.assigned_to ='$assigned_to' and ticket.date >= '$date' order by ticket_no;");
	$result1 = mysql_query("select * from pending_tracker where pending_tracker.ticket_no in(select ticket.ticket_no from ticket where ticket.assigned_to ='$assigned_to' and ticket.date >= '$date') order by ticket_no;");
	}

else if ($assigned_to != NULL && $ticket_status == 'Select' && ($date == 'YYYY-MM-DD' ||$date== NULL))
	{
	$result = mysql_query("select * from ticket where ticket.assigned_to ='$assigned_to' order by ticket_no;");
	$result1 = mysql_query("select * from pending_tracker where pending_tracker.ticket_no in(select ticket.ticket_no from ticket where ticket.assigned_to ='$assigned_to') order by ticket_no;");
	}

else if ($assigned_to == NULL && $ticket_status != 'Select' && ($date != 'YYYY-MM-DD' || $date != NULL))
	{
	$result = mysql_query("select * from ticket where ticket.ticket_status= '$ticket_status' and ticket.date >= '$date' order by ticket_no;");
	$result1 = mysql_query("select * from pending_tracker where pending_tracker.ticket_no in(select ticket.ticket_no from ticket where ticket.ticket_status= '$ticket_status' and ticket.date >= '$date') order by ticket_no;");
	}

else if ($assigned_to == NULL && $ticket_status != 'Select' && ($date == 'YYYY-MM-DD' || $date == NULL))
	{
	$result = mysql_query("select * from ticket where ticket.ticket_status= '$ticket_status' and order by ticket_no;");
	$result1 = mysql_query("select * from pending_tracker where pending_tracker.ticket_no in(select ticket.ticket_no from ticket where ticket.ticket_status= '$ticket_status') order by ticket_no;");
	}

else if ($assigned_to == NULL && $ticket_status == 'Select' && ($date != 'YYYY-MM-DD' || $date != NULL))
	{
	$result = mysql_query("select * from ticket where ticket.date >= '$date' order by ticket_no;");
	$result1 = mysql_query("select * from pending_tracker where pending_tracker.ticket_no in(select ticket.ticket_no from ticket where ticket.date >= '$date') order by ticket_no;");
	}

else if ($assigned_to == NULL && $ticket_status=='Select' && ($date == 'YYYY-MM-DD' || $date == NULL))
	{
	$result = mysql_query("select * from ticket order by ticket_no;");
	$result1 = mysql_query("select * from pending_tracker order by ticket_no;");
	}



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

