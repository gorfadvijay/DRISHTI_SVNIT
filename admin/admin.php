<?php 

 include('session.php');
if(isset($_SESSION['login_user'])){
    header('Location: index.php');
} 
else{
header('Location: login_form.php');
}
?>