
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
  include 'connect.php';

$sql = "SELECT * FROM `project` ";
$result = mysqli_query($dbconn, $sql);

  ?>



<body>
   
   
 
           
  </section>
   
     <section class=' grey-bg' style="">
      
        

        <div class='container ' style="margin-top: 100px;">
           <?php 
if (mysqli_num_rows($result) >0 ) {
  
    while($row = mysqli_fetch_array($result)) {?>
            <h1 class='center-title'><?php echo$row[1]; ?></h1>
            <div class='container ' style="margin-bottom: 60px;">
                        <div class='row '>
                                    <div class='col-md-4'>
                                                <h3><a href='#'><?php echo$row[1]; ?></a></h3>
                                                <p>
                                                   <?php echo$row[2]; ?>
                                                </p>
                                    </div>
                                    <div class='col-md-8 ' style='height:100%; width: 100%  overflow: hidden'>
                                                <img src='<?php echo$row[3]; ?>' alt='' class='img-responsive center-img img-thumbnail ' style='width:80%'>
                                    </div>

                                    <div class='col-md-12 text-center ' style='height:100%; width: 100% ; margin-top:30px; margin-bottom: 50px; '>  <button type="button" class="btn btn-info  btn-lg" data-toggle="collapse" data-target="#<?php echo$row[0]; ?>">click here for more</button> </div>
                                              <div id="<?php echo$row[0]; ?>" class="collapse">

                                                <a  style='margin-top: 10px;margin-bottom: 20px;
                                                width: 50%;' class="btn btn-lg btn-success" href="<?php echo$row[4] ?>"  >Documantation Pdf </a>
                                                 <iframe style="width:  100%; height:600px; " src="<?php echo$row[5]; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                   
                                                                   
                                              </div>
                                 
                        </div>
                        
            </div>
             <?php
       
}
}

else {
    echo "0 results";
};

?>
          </div>

   
    </section>
    
    
 <?php
  include("footer.php ");
  ?>
  

    


</html>
