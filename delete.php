<?php
include 'connect.php';
$id=$_GET['id'];
$sql = "DELETE FROM test_project WHERE id=$id";

if (mysqli_query($dbconn, $sql)) {
    
    ?>
<script language="JavaScript" type="text/javascript">
alert (" product deleted");
window.location.assign("viewtable.php");
</script>

<?php

} else {
   ?>
<script language="JavaScript" type="text/javascript">
alert ("product not deleted");
window.location.assign("viewtable.php");
</script>

<?php

}

mysqli_close($dbconn);
header("Location:display&delete.php");


?>