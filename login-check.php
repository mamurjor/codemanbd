<?php

session_start();

$username = $_POST['username'];


$password = $_POST['password'];


// user name = mental && password =12345678


if($username=="mental" &&  $password=="12345678"){


    $_SESSION['username'] = $username;

    header("Location: dashbaord.php");
}

else{
    header("Location: login.php?msg=sorry, some things missing");
}




?>