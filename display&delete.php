<?php 
include 'connect.php';

$sql = "SELECT * FROM `test_project` ";
$result = mysqli_query($dbconn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "project id: " . $row["id"]. " 
        project Name: " . $row["name"]. "<br>       project des: " . $row["des"]. "  <br>
        link: <a href='".$row["link"]."'> link</a><br>
        <a href='delete.php?id=". $row["id"]."'> delete</a>
        <br>--------------------<br>";
    }
} else {
    echo "0 results";
};

?>
<?php
  include('header.php');
  ?>
  