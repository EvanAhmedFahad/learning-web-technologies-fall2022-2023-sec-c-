<?php
$student = ['first_name' => $first_name, 'last_name' => $last_name, 'phone_no' => $phone_no, 'student_id' => $student_id];

$status = deleteUser($student);

if ($status) {
    header('location: ../view/student.php');
} else {
    echo "DB insert error!";
}
mysqli_close($con);


?>