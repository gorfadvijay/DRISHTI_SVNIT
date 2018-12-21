<?php 
include 'connect.php';
$sql = "SELECT * FROM `project`";
$result = mysqli_query($dbconn, $sql);

if(isset($_POST['Project_name'])){
    $name=$_POST['Project_name'];
};
if(isset($_POST['Project_des'])){
    $des=$_POST['Project_des'];
};
if(isset($_POST['video'])){
    $video=$_POST['video'];
};


$id="";
/* For Img Files In Database */
  $fileName = $_FILES['img']['name'];
  $targetstore = "../resourse/project/img/"; 
  $target = "resourse/project/img/"; 

    $imgstore = $targetstore.$fileName; 
    $img = $target.$fileName; 
    $tempFileName = $_FILES["img"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$imgstore);


    /* For pdf Files In Database */
  $fileName = $_FILES['pdf']['name'];
  $targetstore = "../resourse/project/pdf/"; 
  $target = "resourse/project/pdf/"; 

    $pdfstore = $targetstore.$fileName; 
    $pdf = $target.$fileName; 
    $tempFileName = $_FILES["pdf"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$pdfstore);



$insert_sql = "INSERT INTO 
project (id,name,des,img,pdf,video)

VALUES ('$id','$name','$des','$img','$pdf','$video')";

if (mysqli_query($dbconn, $insert_sql)) {
  ?>
 <script language="JavaScript" type="text/javascript">
            alert ("new record added successfully!!!!");
            window.location.assign("project_insert_form.php");
            </script>
           <?php 

} else {
   ?>
 <script language="JavaScript" type="text/javascript">
            alert ("error in adding record !!!!");
            window.location.assign("project_insert_form.php");
            </script>
           <?php 

}
mysqli_close($dbconn);

//header("Location:project_insert_form.html");




 ?>