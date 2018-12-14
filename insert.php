<?php 
include 'connect.php';

$sql = "SELECT * FROM `test_project` ";
$result = mysqli_query($dbconn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "project id: " . $row["id"]. " 
        project Name: " . $row["name"]. "<br>       project des: " . $row["des"]. "  <br>
        link: <a href='".$row["link"]."'> link</a>
        <br>--------------------<br>";
    }
} else {
    echo "0 results";
}
if(isset($_POST['name'])){
    $name=$_POST['name'];
};
if(isset($_POST['des'])){
    $des=$_POST['des'];
};
if(isset($_POST['link'])){
    $link=$_POST['link'];
};
$id="";
$insert_sql = "INSERT INTO test_project (id,name,des,link)
VALUES ('$id','$name','$des','$link')";

if (mysqli_query($dbconn, $insert_sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($dbconn);

?>