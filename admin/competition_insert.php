<?php 
include 'connect.php';
$sql = "SELECT * FROM `competition`";
$result = mysqli_query($dbconn, $sql);

if(isset($_POST['competition_name'])){
    $name=$_POST['competition_name'];
};
if(isset($_POST['competition_des'])){
    $des=$_POST['competition_des'];
};
if(isset($_POST['video'])){
    $video=$_POST['video'];
};



/* For Img Files In Database */
  $fileName = $_FILES['img']['name'];
  $targetstore = "../resourse/competition/img/"; 
  $target = "resourse/competition/img/"; 

    $imgstore = $targetstore.$fileName; 
    $img = $target.$fileName; 
    $tempFileName = $_FILES["img"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$imgstore);


    /* For pdf Files In Database */
  $fileName = $_FILES['pdf']['name'];
  $targetstore = "../resourse/competition/pdf/"; 
  $target = "resourse/competition/pdf/"; 

    $pdfstore = $targetstore.$fileName; 
    $pdf = $target.$fileName; 
    $tempFileName = $_FILES["pdf"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$pdfstore);


/* For pdf Files In Database */
  

$insert_sql = "INSERT INTO 
competition (name,des,img,pdf,video)

VALUES ($name','$des','$img','$pdf','$video')";

if (mysqli_query($dbconn, $insert_sql)) {
  ?>
 <script language="JavaScript" type="text/javascript">
            alert ("new record added successfully!!!!");
            window.location.assign("competition_insert_form.php");
            </script>
           <?php 

} else {
   ?>
 <script language="JavaScript" type="text/javascript">
            alert ("error in adding record !!!!");
            window.location.assign("competition_insert_form.php");
            </script>
           <?php 

}
mysqli_close($dbconn);

//header("Location:competition_insert_form.html");




 ?>