<?php
   include('session.php');
   include('header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>login system</title>
</head>
<body>
<a href="project_delete_table.php"> delete Record</a>
<br>----------------------------<br>
<h2><a href="project_insert_form.php">Add Project</a></h2>
<br>----------------=============-----------------<br>
<h2><a href="project.php">See Project</a></h2>
<br>----------------=============-----------------<br>
<h2><a href="../project1.php">delete Project with graphic</a></h2>
<br>----------------=============-----------------<br>
<h2><a href="project_delete&display.php">delete Project</a></h2>
<br>----------------=============-----------------<br>
<br>----------------=============-----------------<br>
<a href="display&delete.php"> delete event</a>
<br>----------------------------<br>
<h2><a href="event_insert_form.php">Add event</a></h2>
<br>----------------=============-----------------<br>
<h2><a href="event.php">See event</a></h2>
<br>----------------=============-----------------<br>
<h2><a href="event_delete&display.php">delete event</a></h2>
<br>----------------=============-----------------<br>
<h2><button>
	<a href="logout.php"> logout</a>
</button></h2>


</body>
</html>
<?php

   include('footer.php');

?>