

<?php 
include 'connect.php';
include 'header.php';


$sql = "SELECT * FROM `team` ";
$result = mysqli_query($dbconn, $sql);
$id="";
$name="";
echo "
<table  class='table-bordered container' style='margin-bottom:20px;height:30px;background-color:#42f4dc'>
    <thead>
      <tr>
        <th style='width: 100px;' >Id</th>
        <th style='width: 100px;'>Name</th>
        <th style='width: 100px;'>Action</th>
      </tr>
    </thead>";

if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_array($result)) {?>
  



           
<body style="background-color:  #f2f7f7;">
  <table class=" table-bordered container">

    

    <tbody>

      <tr style="background-color:  #fff76b;">

        <td style="width: 300px;" ><?php echo $row[0]; ?></td>

        <td style="width: 300px;"><?php echo $row[1]; ?></td>

        <td style="width: 300px;"><?php echo "<a class='btn btn-danger' role='button' href='team_delete.php?id= $row[0]'> Delete</a> " ?></td>

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
