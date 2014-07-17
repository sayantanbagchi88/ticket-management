<html>
<body bgcolor="FFC99C">

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

$emp_name = @$_SESSION[userid][0];

$result2 = mysql_query("select emp_id from employee where emp_name = '$emp_name';");

$row = mysql_fetch_assoc($result2);

$emp_id = @$row[emp_id];


if($_POST['submit']=="Insert")
	{
	//$emp_id=$_POST['emp_id'];
       	$password=$_POST['password'];
   	
	//echo "$emp_id";

	if($emp_id!=NULL&&$password!=NULL)
     		{
	
		$query1=mysql_query("select count(emp_id) as total from emppswd where emp_id='$emp_id';");

		$row = mysql_fetch_array($query1);
	
		if ($row["total"]>"0")
	 		{ 
			$query2="UPDATE emppswd SET emppswd.password='$password' WHERE emppswd.emp_id='$emp_id'";
	    	
	        	$result1=mysql_query("$query2");    
	        
			if(mysql_affected_rows()==1)
            			echo "<p><b>Comment: Your information has been recorded. </b></p>";
          		else
            			echo "<p><b>Comment: Enter all information correctly.</b></p>"; 
          
       			}
		else
            		echo "<p><b>Comment: Enter correct information.</b></p>"; 
         
		}

 
	else
		echo "do not give any information blank";
       
	}

       
print "<A HREF='login.php'><FONT COLOR=BLACK size='2'>Home | </A>
	<A HREF='welcome_associate.php'><FONT COLOR=BLACK size='2'>Back | </A> 
	<A HREF='javascript:history.back();'><FONT COLOR=BLACK size='2'>Previous Page</A></FONT><BR /><BR />";
     
  


      
?>
<body>
</html>