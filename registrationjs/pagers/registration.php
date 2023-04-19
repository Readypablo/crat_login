
<?php 




require("db.php");

    






if(isset($_POST["btn"])){

    if(isset($_POST[$name])){
            echo'vvedi name';
    }

    else{

        $name = stripcslashes ($_REQUEST["name"]);
        $lastname = stripcslashes ($_REQUEST["lastname"]);
        $phone = stripcslashes ( $_REQUEST["phone"]);
        $password =stripcslashes ( $_REQUEST["password"]);
        $sql = "INSERT INTO `users`  (name,lastname,phone,password) VALUES ('$name','$lastname','$phone','$password')";
        $api= mysqli_query($con,$sql) or die (mysqli_error($con));
    
        if($api){
            echo'vse good';
        }
        else{
            echo'vse bad';
        }
    
    }

}

else{
    echo '';
}


?>









<form action="" method="post">
<h1>регистрация</h1>
<input type="text" placeholder="name" name="name">
<input type="text" placeholder="lastname" name="lastname">
<input type="text" placeholder="phone" name="phone">
<input type="text" placeholder="password" name="password">
<input type="submit" name="btn">

<a href="login.php">Вернутьс к вводу логина?</a>
</form>