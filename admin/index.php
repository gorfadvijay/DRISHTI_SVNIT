<?php
   include('session.php');
   include('header.php');
 

$sql = "SELECT * FROM `contact` ";
$result = mysqli_query($dbconn, $sql);

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>Admin Panel</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

​

<div class="container" style="margi">

  <div class="jumbotron"  style="background-color:#292F33;color: #E1E8ED">

    <h1 class="text-center">Admin Panel</h1>        

       

</div>

<div class="container " style="margin-left: -15px;">
 
  <table class="table table-hover-dark jumbotron " >
    <thead style="background-color: #1a1a1a;color: #fff">
      <tr>
        <th><h2>Project</h2></th>
        <th><h2>Event</h2></th>
        
        <th><h2>Team</h2></th>
        <th><h2>Competition</h2></th>
      </tr>
    </thead>
    <tbody style="background-color: #232323;color: #fff">
      <tr>
        <td><a class="btn btn-success " href="project_insert_form.php">_ADD_</a> </td>
        <td><a class="btn btn-success " href="event_insert_form.php">_ADD_</a> </td>
        <td><a class="btn btn-success " href="team_insert_form.php">_ADD_</a> </td>

        <td><a class="btn btn-success " href="competition_insert_form.php">_ADD_</a> </td>
        
      </tr>
      <tr>
        <td><a class="btn btn-info " href="../project.php">_VIEW_</a></td>
        <td><a class="btn btn-info " href="../event.php">_VIEW_</a></td>
        <td><a class="btn btn-info " href="../team.php">_VIEW_</a></td>
        <td><a class="btn btn-info " href="../competition.php">_VIEW_</a></td>
      </tr>
      <tr>
        <td><a class="btn btn-danger " href="project_delete_table.php">DELETE</a> </td>
        <td><a class="btn btn-danger " href="event_delete_table.php">DELETE</a> </td>
        <td><a class="btn btn-danger " href="team_delete_table.php">DELETE</a> </td>
        
        <td><a class="btn btn-danger" href="competition_delete_table.php">DELETE</a> </td>
        
      </tr>
      
    </tbody>
  </table>
</div>
<div class="well well-lg text-center  " style="background-color: #292F33; color:#f9f9f9;"> <h2>Conatct-Us Dashboard</h2></div>
<table  class='table  table-bordered container' style='margin-bottom:20px;height:30px;background-color:#42f4dc'>
    <thead>
      <tr>
        <th width="10%"  >Del</th>
        <th width="20%"   >Name</th>
        <th width="25%"  >Email</th>
        <th width="45%"   >Message</th>
       
      </tr>
    </thead>
</table>

    <?php
    if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_array($result)) {?>
  



           
<body style="background-color:  #f2f7f7;">
  <table class=" table table-bordered container">

    

    <tbody>

      <tr  width="10%" style="background-color:  #fff76b;">
         <td ><?php echo "<a class='btn btn-danger' role='button' href='contact_delete.php?id= $row[0]'> <span class='glyphicon glyphicon-floppy-remove'></span></a> " ?></td>
        <td width="20%" ><?php echo $row[1]; ?></td>

        <td width="25%"><?php echo $row[2]; ?></td>
        <td width="45%"><?php echo $row[3]; ?></td>
        
       

       
      </tr>

      
    </tbody>

  </table>


​</body>


 
 <?php
       
}
}

else {
    echo "0 results";
};


?>


​

</body>

</html>

​<?php

   include('footer.php');

?>

