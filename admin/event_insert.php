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
if(isset($_POST['video'])){
    $video=$_POST['video'];
};



/* For Img Files In Database */
  $fileName = $_FILES['img']['name'];
  $targetstore = "../resourse/event/img/"; 
  $target = "resourse/event/img/"; 

    $imgstore = $targetstore.$fileName; 
    $img = $target.$fileName; 
    $tempFileName = $_FILES["img"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$imgstore);


    /* For pdf Files In Database */
  $fileName = $_FILES['img']['name'];
  $targetstore = "../resourse/event/pdf/"; 
  $target = "resourse/event/pdf/"; 

    $pdfstore = $targetstore.$fileName; 
    $pdf = $target.$fileName; 
    $tempFileName = $_FILES["pdf"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$pdfstore);




$insert_sql = "INSERT INTO 
event (name,des,img,pdf,video)

VALUES ($name','$des','$img','$pdf','$video')";

if (mysqli_query($dbconn, $insert_sql)) {
  ?>
 <script language="JavaScript" type="text/javascript">
            alert ("new record added successfully!!!!");
            window.location.assign("event_insert_form.php");
            </script>
           <?php 

} else {
   ?>
 <script language="JavaScript" type="text/javascript">
            alert ("error in adding record !!!!");
            window.location.assign("event_insert_form.php");
            </script>
           <?php 

}
mysqli_close($dbconn);

//header("Location:event_insert_form.html");




 ?>