<?php

   include('header.php');

?> <!DOCTYPE html>
 <?php 
include 'connect.php';
$sql = "SELECT * FROM `event` ";
$result = mysqli_query($dbconn, $sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "
         <html>
        <body>
        <div>event Name :$row[name]</div>
        <br>
        <div>event pdf : <a href='event_delete.php?id= $row[id]'> Delete</a></div><br><br>-----------------<br>
        <div>
            $row[video]
        </div>
        </body>
        </html>
        ";
       
    }
}
else {
    echo "0 results";
};


?>
 <?php

   include('footer.php');

?>