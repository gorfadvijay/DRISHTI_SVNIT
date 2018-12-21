<?php

   include('header.php');

?><!DOCTYPE html>
<html>
<head>
	<title>Insert competition</title>
</head>
<!--     bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--     bootstrap css -->
<body>
<div class="container">
	<form action="competition_insert.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="competition_name">competition Name:</label>
    <input type="text" class="form-control" name="competition_name">
  </div>
  <div class="form-group">
    <label for="pwd">competition Description:</label>
    <textarea class="form-control" name="competition_des"></textarea> 
  </div>
  <div class="form-group">
    <label for="competition_name">competition Image:</label>
    <input type="file" class="form-control" name="img">
  </div>
  <div class="form-group">
    <label for="competition_name">competition PDF:</label>
     <input type="file" class="form-control" name="pdf">
  </div>
  <div class="form-group">
    <label for="competition_name">competition video youtube Link:</label>
    <input type="text" class="form-control" name="video">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
</body>
</html>
<?php

   include('footer.php');

?>