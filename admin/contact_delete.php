<?php
include 'connect.php';
$id=$_GET['id'];
$sql = "DELETE FROM contact WHERE id=$id";

if (mysqli_query($dbconn, $sql)) {?>
              <script language="JavaScript" type="text/javascript">
           
            window.location.assign("index.php");
            </script>
           <?php 
}
 else {?>
              <script language="JavaScript" type="text/javascript">
            alert ("error in deleting record!!!!");
            window.location.assign("index.php");
            </script>
           <?php 
       }
mysqli_close($dbconn);
?>


