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

if(isset($_POST['Project_pdf'])){
    $pdf=$_POST['Project_pdf'];
};
if(isset($_POST['Project_video'])){
    $video=$_POST['Project_video'];
}
$id="";
include('connect.php');
  $fileName = $_FILES['Filename']['name'];
  
  $target = "../image/";   
    $img = $target.$fileName; 
    $tempFileName = $_FILES["Filename"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$img);

$insert_sql = "INSERT INTO 
project (id,name,des,img,pdf,video)

VALUES ('$id','$name','$des','$img','$pdf','$video')";

if (mysqli_query($dbconn, $insert_sql)) {
	?>
 <script language="JavaScript" type="text/javascript">
            alert ("new record added successfully!!!!");
            window.location.assign("project_insert_form.html");
            </script>
           <?php 

} else {
   ?>
 <script language="JavaScript" type="text/javascript">
            alert ("error in adding record !!!!");
            window.location.assign("project_insert_form.html");
            </script>
           <?php 

}
mysqli_close($dbconn);

//header("Location:project_insert_form.html");




 ?>