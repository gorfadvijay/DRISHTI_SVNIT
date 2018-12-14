

<?php 
include 'connect.php';
include 'header.php';


$sql = "SELECT * FROM `project` ";
$result = mysqli_query($dbconn, $sql);
$id="";
$name="";
echo "
<table >
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>";

if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_array($result)) {?>
  <table class="table" >
  
  <tbody>
  
      <tr>
        <td><button type='button'>
                         <a href='admin/project_delete.php?id= $row[id]'> 
                              Delete
                         </a>
                       </button></td>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        
      </tr>
    
    
  </tbody>
</table> 
 
 <?php
       
}
}

else {
    echo "0 results";
};


?>
 