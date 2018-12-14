<?php 
$host = "localhost";
$username = "root";
$password="";
$dbname="login";
$dbconn = mysqli_connect($host,$username,$password,$dbname) ;
if ($dbconn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
 ?>