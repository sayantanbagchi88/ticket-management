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

?>

<?php
     
	if($_POST['submit']=="Insert")
	{
          $viewer_id=$_POST['viewer_id'];
          $viewer_name=$_POST['viewer_name'];
          $password=$_POST['password'];
	
if($viewer_id!=NULL&&$viewer_name!=NULL&&$password!=NULL)
	{

	$query="INSERT INTO viewer  (viewer_id,viewer_name,password) VALUES ('$viewer_id','$viewer_name','$password')";

	$result=mysql_query("$query");
	echo "<p><b>Comment: Your information has been recorded. </b></p>";
       	} 
else
	echo "donot give any information blank";
}       
	print "<A HREF='login.php'><FONT COLOR=BLACK size='2'>Home | </A>
	<A HREF='admin_insert_page.php'><FONT COLOR=BLACK size='2'>Back | </A> 
	<A HREF='javascript:history.back();'><FONT COLOR=BLACK size='2'>Previous Page</A></FONT><BR /><BR />";
 ?>
</body>
</html>