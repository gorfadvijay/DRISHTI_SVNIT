<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($dbconn,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){?>
              <script language="JavaScript" type="text/javascript">
            alert ("Please login First !!!!");
            window.location.assign("../login.html");
            </script>
             <?php 
            }
?>