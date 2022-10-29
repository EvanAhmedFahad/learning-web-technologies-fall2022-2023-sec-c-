<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        //echo "null username/password";
        header('location: Login.php');
    }else if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
        $_SESSION['valid'] = 'true';
        header('location: Wellcome.php');
    }else{
        echo "invalid user";
    }


?>