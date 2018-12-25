<?php 
include 'connect.php';
$sql = "SELECT * FROM `contact`";
$result = mysqli_query($dbconn, $sql);

if(isset($_POST['name'])){
    $name=$_POST['name'];
};
if(isset($_POST['email'])){
    $email=$_POST['email'];
};
if(isset($_POST['msg'])){
    $msg=$_POST['msg'];
};






$insert_sql = "INSERT INTO 
contact (name,email,msg)

VALUES ('$name','$email','$msg')";

if (mysqli_query($dbconn, $insert_sql)) {
  ?>
 <script language="JavaScript" type="text/javascript">
            alert ("Thanks For your Message!!!!");
            window.location.assign("../contact.php");
            </script>
           <?php 

} else {
   ?>
 <script language="JavaScript" type="text/javascript">
            alert ("Sorry Server Is down Please contact Devloper");
            window.location.assign("../contact.php");
            </script>
           <?php 

}
mysqli_close($dbconn);

//header("Location:competition_insert_form.html");




 ?>