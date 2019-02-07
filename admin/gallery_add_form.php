<?php

   include('header.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert Image</title>
</head>
<!--     bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--     bootstrap css -->
   <div class="jumbotron"  style="background-color:#292F33;color: #E1E8ED">

    <h1 class="text-center">Gallary Image</h1>        

       

</div>
<body>
<div class="container">
  <form action="gallery_add.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
  
  <div class="form-group">
    <label for="event_name">Image:</label>
    <input type="file" class="form-control" name="img">
  </div><div class="form-group">
    <label for="event_name">Caption:</label>
    <input type="text" class="form-control" name="caption">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
</body>
</html>
<?php

   include('footer.php');

?>