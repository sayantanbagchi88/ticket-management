<html>
<body bgcolor="ffc99c">
    
<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'admin')
	{
	header("location:login.php?msg=2");
	}

else
	{
	echo ("Welcome ");
	print_r (@$_SESSION[userid]);
	}

?>

<?php
     	
	if($_POST['submit']=="Insert")
			{
		  	$ticket_no=$_POST['ticket_no'];
		        //$date=$_POST['date'];
			$date=date("Y-m-d");
			$time=date("H:i:s");
			$date_time= date("Y-m-d H:i:s");
			//$time=$_POST['time'];
		        $ticket_status=$_POST['ticket_status'];
			if ( @$_SESSION[username] == 'admin')
				{
				$assigned_to=$_POST['emp_name'];
				}
			else
				$assigned_to = @$_SESSION[userid][0];
			//$reso_date=$_POST['reso_date'];
			//$reso_time=$_POST['reso_time'];
			

			$year = $_POST['year'];
			$month = $_POST['month'];
			$day = $_POST['day'];
			$hour = $_POST['hour'];
			$min = $_POST['min'];
			$sec = "00";
			$reso_time = "$year-$month-$day $hour:$min:$sec";


		        $reassigned_to_team=$_POST['team_name'];
			$comment=$_POST['comment'];
			$sla_violated=$_POST['sla_violated'];

			if(($ticket_no != NULL && $date!= NULL && $time!= NULL && $ticket_status != NULL && $reso_time != 'YYYY-MM-DD HH:MM:00' && $reso_time > $date_time ) || ($ticket_no != NULL && $date!= NULL && $time!= NULL && $ticket_status != NULL && $reso_time != NULL && $reso_time > $date_time ))
				{     
				$query="INSERT INTO ticket (ticket_no,date,time,ticket_status,assigned_to,resolution_time,reassigned_to_team,comment, sla_violated) VALUES ('$ticket_no','$date','$time','$ticket_status','$assigned_to','$reso_time','$reassigned_to_team','$comment', '$sla_violated')";
				
				if ($ticket_status=='pending')
					{
					$result1=mysql_query("INSERT INTO `tcsticket`.`pending_tracker` (`ticket_no`, `date_time`, `assigned_to`, `pending_with`, `resolution_time`, `comments`, `sla_violated`) VALUES ( '$ticket_no','$date_time','$assigned_to','$reassigned_to_team','$reso_time','$comment','$sla_violated');");
					}

	   			$result=mysql_query("$query");
				if(mysql_affected_rows()==1)
		            		echo "<p><b>Comment: Your information has been recorded. </b></p>";
          			else
            				echo "<p><b>Comment: Enter all information correctly.</b></p>"; 
	       	 		} 
	
   			else
				echo "<p><b> Do not give any information blank</b></p>";
			}

print "<A HREF='login.php'><FONT COLOR=BLACK size='2'>Home | </A>
	<A HREF='javascript:history.back();'><FONT COLOR=BLACK size='2'>Previous Page</A></FONT><BR /><BR />";
 ?>
<body>
</html>