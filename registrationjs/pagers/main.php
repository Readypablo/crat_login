<?php 
include('auth_session.php');

require('db.php');
?>


<h1>hello  <?php echo $_SESSION['name']?> </h1>


<h1><a href="logaut.php">выйти</a></h1>