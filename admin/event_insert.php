<?php 
include 'connect.php';
$sql = "SELECT * FROM `event`";
$result = mysqli_query($dbconn, $sql);

if(isset($_POST['event_name'])){
    $name=$_POST['event_name'];
};
if(isset($_POST['event_des'])){
    $des=$_POST['event_des'];
};
if(isset($_POST['event_img'])){
    $img=$_POST['event_img'];
};
if(isset($_POST['event_pdf'])){
    $pdf=$_POST['event_pdf'];
};
if(isset($_POST['event_video'])){
    $video=$_POST['event_video'];
};
$id="";
$insert_sql = "INSERT INTO 
event (id,name,des,img,pdf,video)

VALUES ('$id','$name','$des','$img','$pdf','$video')";

if (mysqli_query($dbconn, $insert_sql)) {
	?>
 <script language="JavaScript" type="text/javascript">
            alert ("new record added successfully!!!!");
            window.location.assign("event_insert_form.html");
            </script>
           <?php 

} else {
   ?>
 <script language="JavaScript" type="text/javascript">
            alert ("error in adding record !!!!");
            window.location.assign("event_insert_form.html");
            </script>
           <?php 

}
mysqli_close($dbconn);

//header("Location:event_insert_form.html");




 ?>