<?php
include 'db_connect.php';     //connection file is included
?>

<html>
<body bgcolor="9966FF">

<?php 
if(@$_SESSION[username] != 'associate' && @$_SESSION[username] != 'admin')
	{
	header("location:login.php?msg=2");
	}

else	
	{
	if (@$_SESSION[username] == 'associate')
		{
		echo ("Welcome ");
		print_r( @$_SESSION[userid][0]);
		$emp_name= @$_SESSION[userid][0];
		$result1 = mysql_query("select ticket_no from ticket where assigned_to = '$emp_name' order by ticket_no;");

		}
	else
		{
		echo ("Welcome ");
		print_r (@$_SESSION[userid]);
		$result1 = mysql_query("select ticket_no from ticket order by ticket_no;");
		}
	}

$emp_name= @$_SESSION[userid][0];
//echo "$emp_name";

$result2 = mysql_query("select emp_name from employee;");
$result3 = mysql_query("select team_name from team;");
$result4 = mysql_query("select ticket_status from ticket_status;");
$result5 = mysql_query("select emp_name from employee;");

?>     

<form name="frm"  action="edit_ticket_asso.php" method="post" onSubmit="return validt(frm)" > 

<table frame=box align=center bgcolor="9966FF">
<b><h2>Enter Ticket Information</h2></b> 
<b><h3> No need to give resolution time unless ticket is in Pending status</h3></b>
</table>

      
<table frame=box align=center bgcolor="FFFF33">
       
<tr><td><font color="BLACK">Ticket Number:</font></td>
<td>
 	<?php 
    		echo "<select name=\"ticket_no\">";  
  		echo "<option size =25 selected>Select</option>"; 
    		if(mysql_num_rows($result1))  
  			{  
  		  	while($row = mysql_fetch_assoc($result1))  
   		 		{  
  		  		echo "<option>$row[ticket_no]</option>";  
   		 		}  
  
   		 	}  
   		 else { 
   		 	echo "<option>No Id Present</option>";   
    			}  
  	?> 
 </td>	

<tr><td><font color="BLACK">Associate Name:</font></td>
<td>
<?php 
	 if (@$_SESSION [username] == 'admin')
			{
	    		echo "<select name=\"emp_name\">";  
  			echo "<option size =25 selected>Select</option>"; 
    			if(mysql_num_rows($result2))  
  		   		{  
	  	   		while($row = mysql_fetch_assoc($result2))  
   			 		{  
  			 		echo "<option>$row[emp_name]</option>";  
   					}  
     		   		}  
   		 
			else 
				{ 
   		 		echo "<option>No Name Present</option>";   
 	   			}  
			}
		else
			{
			$emp_name = @$_SESSION[userid][0];
  			print "$emp_name";
			}				  		
 	?> 
 </td>
    
<tr><td><font color="BLACK">Ticket Status:</font></td>
<td>
 	<?php 
    		echo "<select name=\"ticket_status\">";  
  		echo "<option size =25 selected>Select</option>"; 
    		if(mysql_num_rows($result4))  
  			{  
  		  	while($row = mysql_fetch_assoc($result4))  
   		 		{  
  		  		echo "<option>$row[ticket_status]</option>";  
   		 		}  
  
   		 	}  
   		 else 	
			{ 
   		 	echo "<option>No Status Present</option>";   
    			}  
  	?> 
 </td>	

<tr><td><font color="BLACK">Reassigned to:</font></td>
<td>
	<?php 
			
	    		echo "<select name=\"reassigned_emp_name\">";  
  			echo "<option size =25 selected>Select</option>"; 
    			if(mysql_num_rows($result2))  
  		   		{  
	  	   		while($row = mysql_fetch_assoc($result5))  
   			 		{  
  			 		echo "<option>$row[emp_name]</option>";  
   					}  
     		   		}  
   		 
			else 
				{ 
   		 		echo "<option>No Name Present</option>";   
 	   			}  
			
				  		
 	?> 
</td>

<tr><td><font color="BLACK">Reassigned to team:</font></td>
<td>
 	<?php 
    		echo "<select name=\"reassigned_to_team\">";  
  		echo "<option size =25 selected>Select</option>"; 
    		if(mysql_num_rows($result3))  
  	  		{  
  		  	while($row = mysql_fetch_assoc($result3))  
   		 		{  
  		  		echo "<option>$row[team_name]</option>";  
   		 		}  
  			}  
   		 else 	
			{ 
   		 	echo "<option>No team Present</option>";   
    			}  
  	?> 
</td>

<tr><td>Resolution Time</td></tr>
	<tr><td>YEAR:</td><td><input type="text" name="year" value="YYYY" size="4"></td>
	<td>MONTH:</td><td><input type="text" name="month" value="MM" size="2"></td>
	<td>DAY:</td><td><input type="text" name="day" value="DD" size="2"></td></tr>
	<tr><td>HOUR:</td><td><input type="text" name="hour" value="HH" size="2"></td>
	<td>MINUTE:</td><td><input type="text" name="min" value="MM" size="2"></td></tr>
	

<tr><td>comment:</td><td><input type="text" name="comment" value="" size="25"></td></tr>

</table>
         
<table frame=box align=center bgcolor="bbbbbb">
        
<br><br><tr><td><input type="SUBMIT" name="submit" value="Insert" ></td>
        
<td><input type="RESET" name="reset" value="Clear"></td></tr>

<p align="center"  ><a href='javascript:history.back()'><h3><b>BACK</b></a></h3></p>

      </table>
   </form> 
   

  
<body>
</html>
