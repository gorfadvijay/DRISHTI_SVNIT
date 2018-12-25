<?php 
include 'connect.php';
$sql = "SELECT * FROM `team`";
$result = mysqli_query($dbconn, $sql);

if(isset($_POST['team_name'])){
    $name=$_POST['team_name'];
};
if(isset($_POST['team_branch'])){
    $branch=$_POST['team_branch'];
};
if(isset($_POST['linkf'])){
    $linkf=$_POST['linkf'];
};
if(isset($_POST['linke'])){
    $linke=$_POST['linke'];
};
if(isset($_POST['linkt'])){
    $linkt=$_POST['linkt'];
};
if(isset($_POST['linkl'])){
    $linkl=$_POST['linkl'];
};




/* For Img Files In Database */
  $fileName = $_FILES['img']['name'];
  $targetstore = "../resourse/team/img/"; 
  $target = "resourse/team/img/"; 

    $imgstore = $targetstore.$fileName; 
    $img = $target.$fileName; 
    $tempFileName = $_FILES["img"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$imgstore);


  
$insert_sql = "INSERT INTO 
team (name,branch,img,linkf,linke,linkt,linkl)

VALUES ($name','$branch','$img','$linkf','$linke','$linkt','$linkl')";

if (mysqli_query($dbconn, $insert_sql)) {
  ?>
 <script language="JavaScript" type="text/javascript">
            alert ("new record added successfully!!!!");
            
            </script>
           <?php 

} else {
   ?>
 <script language="JavaScript" type="text/javascript">
            alert ("error in adding record !!!!");
            window.location.assign("team_insert_form.php");
            </script>
           <?php 

}
mysqli_close($dbconn);

//header("Location:team_insert_form.html");




 ?>