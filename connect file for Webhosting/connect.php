<?php 
$host = "localhost";
$username = "id6282966_drishti";
$password="id6282966_drishti";
$dbname="id6282966_drishti";
$dbconn = mysqli_connect($host,$username,$password,$dbname) ;
if ($dbconn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
 ?>