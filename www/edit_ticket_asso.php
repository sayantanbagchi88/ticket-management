<html>
<body bgcolor="FFC99C">


<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'admin' && @$_SESSION[username] != 'associate')
	{
	header("location:login.php?msg=2");
	}
else	
	{
	if (@$_SESSION [username] == 'associate')
		{
		echo ("Welcome ");
		print_r( @$_SESSION[userid][0]);
		}
	else
		{
		echo ("Welcome ");
		print_r (@$_SESSION[userid]);
		}
	}

if($_POST['submit']=="Insert")
	{
	$ticket_no=$_POST['ticket_no'];
	if ( @$_SESSION[username] == 'admin')
		{
		$assigned_to=$_POST['emp_name'];
		}
	else
		$assigned_to = @$_SESSION[userid][0];

       	$reassigned_to_team=$_POST['reassigned_to_team'];
	$ticket_status=$_POST['ticket_status'];
   	
	//$resolution_time=$_POST['resolution_time'];

	$year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$hour = $_POST['hour'];
	$min = $_POST['min'];
	$sec = "00";
	$resolution_time = "$year-$month-$day $hour:$min:$sec";
	//$resolution_time = strtotime($reso_time);
	$diff =(strtotime($resolution_time) - strtotime("now")); 
	//echo "$resolution_time /// $diff";

	$reassigned_emp_name=$_POST['reassigned_emp_name'];
	$date_time= date("Y-m-d H:i:s");
	$comment=$_POST['comment'];
	
if($ticket_no!='Select' && $ticket_status!='Select' && $assigned_to!= 'Select' && $comment!= NULL)
     	{
	$query1=mysql_query("select count(ticket_no) as total from ticket where ticket_no='$ticket_no';");

	$row = mysql_fetch_array($query1);
	if ($row["total"]>0)
	 	{ 
		if($ticket_status == 'pending' && $reassigned_emp_name == 'Select' && $reassigned_to_team == 'Select' && ($resolution_time != 'YYYY-MM-DD HH:MM:00' || $resolution_time != '-- ::00') && $diff > '0')
			{
			$query2="UPDATE ticket SET ticket.reassigned_to_team='$reassigned_to_team', ticket.ticket_status='$ticket_status', ticket.resolution_time= '$resolution_time', ticket.comment='$comment' WHERE  ticket.ticket_no='$ticket_no';";
			$query3=mysql_query("INSERT INTO `tcsticket`.`pending_tracker` (`ticket_no`, `date_time`, `assigned_to`, `pending_with`, `resolution_time`, `comments`) VALUES ( '$ticket_no','$date_time','$assigned_to','$reassigned_to_team','$resolution_time','$comment');");
			}	
		else if($ticket_status=='assigned to' && $reassigned_emp_name != 'Select' && $reassigned_to_team !='Other' && ($resolution_time == 'YYYY-MM-DD HH:MM:00'||$resolution_time == '-- ::00'))
			{			
			$query2="UPDATE ticket SET ticket.assigned_to='$reassigned_emp_name', ticket.reassigned_to_team='$reassigned_to_team', ticket.ticket_status='$ticket_status', ticket.comment='$comment' WHERE  ticket.ticket_no='$ticket_no';";
	    		}
		else if($ticket_status!='assigned to' && $ticket_status != 'pending' && $reassigned_emp_name == 'Select' && ($resolution_time == 'YYYY-MM-DD HH:MM:00'||$resolution_time == '-- ::00'))
			{			
			$query2="UPDATE ticket SET ticket.reassigned_to_team='$reassigned_to_team', ticket.ticket_status='$ticket_status', ticket.comment='$comment' WHERE  ticket.ticket_no='$ticket_no';";
			}
		else if($ticket_status=='assigned to' && $reassigned_emp_name == 'Select' && $reassigned_to_team == 'Other' && ($resolution_time == '-- ::00' || $resolution_time == 'YYYY-MM-DD HH:MM:00'))
			{			
			$query2="DELETE FROM ticket WHERE ticket.ticket_no = '$ticket_no';";
			$query3=mysql_query("delete from `tcsticket`.`pending_tracker` where pending_tracker.ticket_no = '$ticket_no';");
			}

		$result1=mysql_query($query2);    
	        
		if(mysql_affected_rows()==1)
            		echo "<p><b>Comment: Your information has been recorded. </b></p>";
          	else
            		echo "<p><b>Comment: Enter all information correctly.</b></p>"; 
          
       		}
	else
            	echo "<p><b>Comment: Enter correct information.</b></p>"; 
         
	}

 
else
	echo "<p><b>do not give any information blank</b></p>";
       
}

       
     print "<A HREF='login.php'><FONT COLOR=BLACK size='2'>Home | </A>
	<A HREF='javascript:history.back();'><FONT COLOR=BLACK size='2'>Previous Page</A></FONT><BR /><BR />";
     
  
      
?>
<body>
</html>