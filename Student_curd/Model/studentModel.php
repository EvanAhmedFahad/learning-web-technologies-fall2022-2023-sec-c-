<?php
require_once('db.php');


function deleteUser($user)
{
    $con = getConnection();
    $sql = "UPDATE  products SET first_name ='{$first_name}',last_name='{$last_name}', phone_no='{$phone_no}' WHERE Id = '{student_id}'";
    $status = mysqli_query($con, $sql);

}

function editUser($id)
{

    $con = getConnection();
    $sql = "SELECT First_Name,Last_Name,Phone_No FROM students WHERE Id={student_id}";
    $status = mysqli_query($con, $sql);
    return $status;

}

function allUser($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM students";
    $status = mysqli_query($con, $sql);
    return $status;

}


?>