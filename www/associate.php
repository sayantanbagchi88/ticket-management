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
	print_r( @$_SESSION[userid]);
	}


if($_POST['submit']=="Insert")
       {
	$emp_id=$_POST['emp_id'];
        $emp_name=$_POST['emp_name'];
        $password=$_POST['password'];
	$team_name=$_POST['team_name'];
	$email_id=$_POST['email_id'];
	$super_name=$_POST['super_name'];
	$super_email=$_POST['super_email'];
	
if($emp_id!=NULL&&$emp_name!=NULL&&$password!=NULL&&$team_name!=NULL&&$email_id!=NULL&&$super_name!=NULL&&$super_email!=NULL)
  {                  
          $query="INSERT INTO employee (emp_id,emp_name,team_name,email_id,super_name,super_email) VALUES ('$emp_id','$emp_name','$team_name','$email_id','$super_name','$super_email')";
	  $query1="INSERT INTO emppswd (emp_id,password) VALUES ('$emp_id','$password')";
	  
	  $result=mysql_query("$query");
          $result1=mysql_query("$query1");
                       
          echo "<p><b>Comment: Your information has been recorded. </b></p>";
           } 
  else
	echo "do not give any information blank";
}
    print "<A HREF='login.php'><FONT COLOR=BLACK size='2'>Home | </A>
	<A HREF='admin_insert_page.php'><FONT COLOR=BLACK size='2'>Back | </A> 

	<A HREF='javascript:history.back();'><FONT COLOR=BLACK size='2'>Previous Page</A></FONT><BR /><BR />";


?>
<body>
</html>