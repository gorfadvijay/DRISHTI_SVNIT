<html>
<body style="background-color: red;">
<?php
$con=mysqli_connect("localhost","root","") or die('error connecting...');
if(!mysqli_select_db($con,"login"))
{
	$create_db="CREATE DATABASE login";
	mysqli_query($con,$create_db);
	mysqli_select_db($con,"login");
}

$id=$_POST['usrname'];
$password=$_POST['password'];
echo $radio;
#$color='blue';
#$client_id=$_POST['id'];
#$client_pass=$_POST['pass'];
#$fetch_data="SELECT * FROM `admin`";	#select admin login data from DB

/*COunt Number of rows
#$count=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) FROM `admin`"));
#$count=$count[0];


#Print more than one rows
#$data_qry=mysqli_query($con,$fetch_data);
#if(!($data=mysqli_query($con,$qry))){
	#$create_table="CREATE TABLE `admin`(id VARCHAR(50),pass #VARCHAR(50))";
#	mysqli_query($con,$create_table);
#	$data=mysqli_query($con,$fetch_data);
#}
#while($count>0){
#$data=mysqli_fetch_row($data_qry);
#echo "id: $data[0] PASSOWRD: $data[1]<br><br>";
#$count-=1;
#}

#VALIDATION
$data=mysqli_fetch_row(mysqli_query($con,$fetch_data));
$admin_id=$data[0];
$admin_pass=$data[1];
if($client_id==$admin_id){
	if($client_pass==$admin_pass){
		echo "success";
	}
	else{
		echo "wrong pass";
	}
}
else{
	echo "wrong id";
}


#2nd method Validation
#$qry="SELECT ('pass') from `admin` WHERE id='$client_id'";*/






?>
</body>
</html>