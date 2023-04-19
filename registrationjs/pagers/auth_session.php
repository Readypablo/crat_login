<?php 

session_start();
if(!isset( $_SESSION["fisrt_name"])){
    header("Location: ../index.php");
    exit();
}


?>