<?php
include 'connect.php';
$id=$_GET['id'];
$sql = "DELETE FROM project WHERE id=$id";

if (mysqli_query($dbconn, $sql)) {?>
              <script language="JavaScript" type="text/javascript">
            alert ("record deleted succesfully!!!!");
            window.location.assign("project1.php");
            </script>
           <?php 
}
 else {?>
              <script language="JavaScript" type="text/javascript">
            alert ("error in deleting record!!!!");
            window.location.assign("project1.php");
            </script>
           <?php 
       }
mysqli_close($dbconn);
?>


