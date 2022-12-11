<?php
session_start();
require_once "model.php";
$currentpassword = $_POST['currentpassword'];
$newpassword = $_POST['newpassword'];
$retypepassword = $_POST['retypconfimrpassword'];



$user = ['currentpassword' => $currentpassword, 'newpassword' => $newpassword, 'retypconfimrpassword' => $retypepassword];

$status = checkForChangePassword($user);

if ($username == "" || $email == "") {
    header('location:login.php?err=null&&msg=abc');
} else if ($status) {
    if ($currentpassword === $newpassword) {
        $_SESSION['valid'] = 'true';
        $_SESSION['userId'] = $userId;
        header('location:Login.php');

    }


} else {

    echo "does not exits";
}


?>