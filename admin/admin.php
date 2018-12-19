<?php 
include('connect.php');
   session_start();
   if (isset($_SESSION['login_user'])) {
   $user_check = $_SESSION['login_user'];
   ;
} else {
    $user_check = 1;
}
   

if(isset($_SESSION['login_user'])){?>
     <script language="JavaScript" type="text/javascript">
           window.location.assign("index.php");
            </script>
    <?php
} 
else{
?> <script language="JavaScript" type="text/javascript">
           window.location.assign("login_form.php");
            </script>
    <?php
}
?>