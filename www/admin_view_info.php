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
<TITLE>select records from given database</TITLE>
</HEAD>
<BODY bgcolor="2cc2e5" text="black">
<DIV ALIGN="CENTER">
<FONT color=blue>
<h2><u>TICKET MANAGEMENT PORTAL</u></h2></FONT>
<FORM action="admin_view_info.php" method="post">
<TABLE border=1 cellpadding=2 width="100%">
<table border=1 cellpadding=2 width="80%">
<tr bgcolor="#E18B6B" align="center">
<td><font color="brown" size="3"><b><u>Table Rows</u></b></font></td>
</tr>
</table>
<table border=1 cellpadding=2 width="100%">
<tr bgcolor="#E18B6B" align="center">
<td><font color=brown size="3"><b>Select a Table:</b></font>
    <select name="table" maxlength="30">
        <option SELECTED value="none">Pickup a Table</option>
  	<option value="team">1. TEAM INFORMATION</option>
        <option value="viewer">2. VIEWER INFORMATION</option>
	<option value="employee">3. ASSOCIATES' INFORMATION</option>
	<option value="ticket">4. TICKETS INFORMATION</option>
	<option value="pending_tracker">4. PENDING TICKETS INFORMATION</option>
	    </select></td></tr>
<tr>
</table>
</tr>
<tr><td><input type="submit" value="Click Here"></td></tr>
</table>
<p align="center">
        <FONT color="white" size="3">
        <table border=1 width="80%">

<?php
$table = addslashes(@$_POST['table']);
if (@$table=='pending_tracker'|| @$table == 'ticket')
	$result = mysql_query("select * from $table order by ticket_no;");
else
	$result = mysql_query("select * from $table;");

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
	print "<A HREF='login.php'><FONT color=blue size='2'> Home | </A>
       <A HREF='welcome_admin.php'><FONT COLOR=blue size='2'>Back | </A> 
         <A HREF='javascript:history.back();'><FONT color=blue size='2'>Previous</A></FONT><BR /><BR />";
?> 
</TABLE>
</FORM> 
</BODY>
</HTML>
