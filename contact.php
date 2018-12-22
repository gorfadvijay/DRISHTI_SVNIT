<?php include('header.php');
include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us -Drishti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div class="container">
  <h2 class="jumbotron text-center" style="margin-top: 50px;">Contact us</h2>
  <form class="form-horizontal" action="admin/contactus.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Name">Name  :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email  :</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="msg">Meassage  :</label>
      <div class="col-sm-10">
        <textarea type="textarea" class="form-control" id="msg" placeholder="Write your message" name="msg"></textarea> 
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success btn-lg">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
