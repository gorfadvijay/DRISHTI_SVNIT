<?php
   include('session.php');
   include('header.php');

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
        <td><a class="btn btn-info " href="404.php">_VIEW_</a></td>
        <td><a class="btn btn-info " href="404.php">_VIEW_</a></td>
        <td><a class="btn btn-info " href="404.php">_VIEW_</a></td>
        <td><a class="btn btn-info " href="404.php">_VIEW_</a></td>
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



​

</body>

</html>

​<?php

   include('footer.php');

?>

