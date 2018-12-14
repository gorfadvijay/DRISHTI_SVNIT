<?php 
session_start();
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];

$connect=mysql_connect("localhost","root","");
$select=mysql_select_db("data");
$result=mysql_query("select * from login where UserName='$UserName'&& password='$Password'" ) ;
$row=mysql_fetch_row($result);

if($row)
{
 		$_session['valid']=$UserName;
		$_session['valid']=$Password;
		
	   header('location:home.php');
		
		
}
else
{?>
  <script language="JavaScript" type="text/javascript">
alert ("login failed !!!!");
window.location.assign("index.php");
</script>
 <?php 
}
?> 