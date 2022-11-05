<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$_SESSION['role']=$role;

if ($username == "" || $password == "") {
    header('location: login.php?err=null&&msg=abc');
} else{
    //$_SESSION['username'] = 'true';
    $_SESSION['valid']='true';
    //setcookie('status', 'true', time()+3600, '/');
    $file = file_get_contents("user_List.txt"); // Returns a string
    $result = explode(" ", $file);
    $boolC = false;

    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i] === $username) {
            $boolC = true;
            $i = $i + 1;
            if ($boolC === true) {
                if ($result[$i] === $password) {
                    if($role=="student")
                    {
                        header('location:student.php');
                    }
                    elseif($role=="accounts"){
                        header('location:accounts_home.php');
                    }
                    elseif($role=="admin"){
                        header('location:admin_home.php');
                    }
                    elseif($role=="faculty"){
                        header('location:account_permit.php');
                    }
                    //header('location:student.php');
                } else {
                    echo "invalid user";
                }
            }
        }
    }
}
//if ($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password'])

?>