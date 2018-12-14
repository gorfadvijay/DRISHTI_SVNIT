
<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	   Drishti-SVNIT
	  
	</title>
	<?php
  include("header.php ");
  ?>



<body>
   
   
  
<?php 
include 'connect.php';

$sql = "SELECT * FROM `project` ";
$result = mysqli_query($dbconn, $sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "
  </section>
   
     <section class='showcase-section grey-bg'>
        <div class='space-90'></div>
        <div class='container teams'>
            <h1 class='center-title'>$row[name]</h1>
            <div class='container'>
                <div class='row vertical-align-child'>
                    <div class='col-md-5 margin-b-30'>
                        <h3><a href='#'>$row[name]</a></h3>
                        <p>
                           $row[des]
                        </p>
                    </div>
                    <div class='col-md-6 col-md-offset-1 margin-b-30' style='height:600px;overflow: hidden'>
                        <img src='$row[img]' alt='' class='img-responsive center-img' style='width:80%'>
                    </div>
                </div>
                <div class='space-60'></div>
            </div>
    </section>
        
        ";
       
    }
}
else {
    echo "0 results";
};


?>
 
    
 <?php
  include("footer.php ");
  ?>
  

    


</html>
