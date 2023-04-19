
<?php 

session_start();
require("db.php");



if (isset($_POST['phone'])){
    $phone = stripslashes($_REQUEST['phone']);    
    $phone = mysqli_real_escape_string($con, $phone);
    
    
    $password = stripslashes($_REQUEST['password']);    
    $password = mysqli_real_escape_string($con, $password);
    
    
    $link = "SELECT *FROM `users` WHERE phone='$phone' AND password='$password' ";
    
    
    $result = mysqli_query($con,$link);
    $rows = mysqli_num_rows($result);
    
    if($result){
    $main_user = mysqli_fetch_assoc($result);
    $_SESSION['fisrt_name'] = $main_user['id'];
    $_SESSION['name'] = $main_user['name'];
    header("Location: main.php");
    }
    else{
        echo 'не вышло чет';
    }
    
}




?>






<form action="" method="post">

<h1>Вход</h1>

<input type="text" placeholder="phone" name="phone">

<input type="text" placeholder="password" name="password">

<input type="submit" name="btn">

<a href="registration.php">мб хочешь зарегистрироваться?

</a>


</form>