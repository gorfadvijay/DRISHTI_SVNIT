<?php

   include('header.php');

?><!DOCTYPE html>
<html>
<head>
	<title>Insert team</title>
</head>
<!--     bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--     bootstrap css -->
<body>
<div class="container">
	<form action="team_insert.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="team_name">Member Name:</label>
    <input type="text" class="form-control" name="team_name">
  </div>
  <div class="form-group">
    <label for="pwd">Memeber Branch:</label>
    <input type="text" class="form-control" name="team_branch">
  </div>
  <div class="form-group">
    <label for="team_name">Member Photo:</label>
    <input type="file" class="form-control" name="img">
  </div>
   <div class="form-group">
    <label for="team_name">Facebook Link:</label>
    <input type="text" class="form-control" name="linkf">
  </div>
   <div class="form-group">
    <label for="team_name">Email:</label>
    <input type="text" class="form-control" name="linke">
  </div>
   <div class="form-group">
    <label for="team_name">Twitter Link:</label>
    <input type="text" class="form-control" name="linkt">
  </div>
  <div class="form-group">
    <label for="team_name">Linked.in Link:</label>
    <input type="text" class="form-control" name="linkl">
  </div>

  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
</body>
</html>
<?php

   include('footer.php');

?>