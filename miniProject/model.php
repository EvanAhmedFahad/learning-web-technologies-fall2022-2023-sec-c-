<?php
require_once('db.php');


function insertUser($user)
{
    $con = getConnection();
    $sql = "insert into abc values('','{$user['userId']}' ,'{$user['Password']}', '{$user['ConfirmPassword']}', '{$user['Name']}','{$user['Email']}' ";
    $status = mysqli_query($con, $sql);
    return $status;
}

function login($user)
{
    $con = getConnection();
    $sql = "select * from miniprojectdata where userId='{$user['UserId']}' and Password='{$user['Password']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    if ($user != null) {
        $_SESSION['user'] = $user;
        return $_SESSION['user'];
    } else {
        return false;
    }
}

function checkForChangePassword($user)
{
    $con = getConnection();
    $sql = "UPDATE miniprojectdata SET password =  '{$user['currentpassword']}', confirmpassword='{$user['confirmpassword']}' WHERE  username='{$user['username']}' and email='{$user['email']}'";
    $result = mysqli_query($con, $sql);
    return $user;
    // 
}








?>