<?php
session_start();
$id = $_POST['Id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_no = $_POST['phone_no'];
$student_id = $_POST['student_id'];


if ($first_name == "" || $last_name == "" || $phone_no == "" || $student_id == "") {
    header('location: product.php?err=null');

} else {
    $student = ['first_name' => $first_name, 'last_name' => $last_name, 'phone_no' => $phone_no, 'student_id' => $student_id];

    $status = editUser($student);


    if ($status) {
        header('location: ../view/student_home.php');
    } else {
        echo "DB insert error!";
    }

}
?>