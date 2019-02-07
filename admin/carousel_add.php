<?php 
include 'connect.php';
$sql = "SELECT * FROM `carousel`";
$result = mysqli_query($dbconn, $sql);
$caption = $_POST['caption'];
if($caption==''){
  $caption='Drishti';
}



/* For Img Files In Database */
  $fileName = $_FILES['img']['name'];
  $targetstore = "../resourse/carousel/img/"; 
  $target = "resourse/carousel/img/"; 

    $imgstore = $targetstore.$fileName; 
    $img = $target.$fileName; 
    $tempFileName = $_FILES["img"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$imgstore);


    /* For pdf Files In Database */
 



$insert_sql = "INSERT INTO 
carousel (img,caption)

VALUES ('$img','$caption')";

if (mysqli_query($dbconn, $insert_sql)) {
  ?>
 <script language="JavaScript" type="text/javascript">
            alert ("new record added successfully!!!!");
            window.location.assign("carousel_add_form.php");
            </script>
           <?php 

} else {
   ?>
 <script language="JavaScript" type="text/javascript">
            alert ("error in adding record !!!!");
            window.location.assign("carousel_add_form.php");
            </script>
           <?php 

}
mysqli_close($dbconn);

//header("Location:event_insert_form.html");




 ?>