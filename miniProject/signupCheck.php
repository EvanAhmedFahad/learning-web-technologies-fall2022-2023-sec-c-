<?php
session_start();
require('model.php');

if (isset($_POST['submit'])) {

    $userId = $_POST['userId'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    @$confirmpassword = $_POST['ConfirmPassword'];
    // $usertype = $_POST['UserType'];
}
$user = ['', 'userId' => $userId, 'Password' => $password, 'ConfirmPassword' => $confirmpassword, 'Name' => $name, 'Email' => $email];
$status = insertUser($user);
if ($status) {
    $_SESSION['userId'] = $userId;
    header('location:login.php');
} else {
    echo "DB insert error!";
}


?>