<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($dbconn,$_POST['username']);
      $password = mysqli_real_escape_string($dbconn,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($dbconn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $username;
         
         header("location: admin/index.php");
      }else {?>
              <script language="JavaScript" type="text/javascript">
            alert ("login failed !!!!");
            window.location.assign("login.html");
            </script>
             <?php 
            }
   }
?>