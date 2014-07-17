<?php
include 'db_connect.php';     //connection file is included
?>

<html>
<body bgcolor="ffc99c">

<?php
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

<?php

if($_POST['submit']=="Insert")
{
 	$team_name=$_POST['team_name'];         
 	$location_building=$_POST['location_building'];

   if($team_name!=NULL&&$location_building!=NULL)
  	{     
        $query="INSERT INTO team(team_name,location_building) VALUES ('$team_name','$location_building')";
	   $result=mysql_query("$query");
	   if(mysql_affected_rows()==1)
            echo "<p><b>Comment: Your information has been recorded. </b></p>";
          else
            echo "<p><b>Comment: Enter all information correctly.</b></p>"; 
      } 
    else
	echo "donot give any information blank";
}
	
print "<A HREF='login_check.php'><FONT COLOR=BLACK size='2'>Home | </A>
	<A HREF='admin_insert_page.php'><FONT COLOR=BLACK size='2'>Back | </A> 
	<A HREF='javascript:history.back();'><FONT COLOR=BLACK size='2'>Previous Page</A></FONT><BR /><BR />";

?>
</body>
</html>