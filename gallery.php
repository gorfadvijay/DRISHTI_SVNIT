<?php
    include 'header.php';
  include 'connect.php';



$sql = "SELECT * FROM `gallery` ";
$result = mysqli_query($dbconn, $sql);

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container">
    
  <div class="row">
    <?php 
if (mysqli_num_rows($result) >0 ) {
  
    while($row = mysqli_fetch_array($result)) {?>
    <div class="col-sm-4" >
     <img src="<?php echo $row[1] ?>" style="max-width:100%;margin-top: 20px;margin-bottom: 20px;margin-left: 10px;margin-right: 10px;  ">
    </div>
    
    <?php
       
}
}

else {
    echo "0 results";
}

?>
  </div>
</div>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>
