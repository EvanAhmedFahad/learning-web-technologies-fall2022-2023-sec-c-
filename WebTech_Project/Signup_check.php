<?php
    session_start();

    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $gender = $_POST['gender'];
    $mobileno=$_POST['phone'];
    $address=$_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $flag=0;
    if (empty($firstname) ) {  
        header('location:signup.php?err1');
        $flag++;
       
    }
    elseif (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        header('location:signup.php?err2');
        $flag++;
        }
    
   
    elseif($username == "" || $password == "" ){
        header('location: signup.php?err');
        $flag++;

    }
    elseif(!preg_match("/[a-z][^a-z]*[a-z]/i",$username)){
        header('location: signup.php?err12');
        $flag++;

    }
    elseif (empty($gender)) {
        header('location: signup.php?err3');
        $flag++;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: signup.php?err4');
            $flag++;  
    }
    elseif (empty($mobileno)) {
        header('location: signup.php?err5');
        $flag++;
    }
    elseif(!preg_match('/^\d+$/',$mobileno))
    {
        header('location: signup.php?err6');
        $flag++;
    }
    elseif (strlen($mobileno)!=11) {
        header('location: signup.php?err7');

        $flag++;
    }
    elseif (empty($address)) {
        header('location: signup.php?err8');
        $flag++;
    }
     elseif ($password!=$_POST['Confirm_password']) {
        header('location: signup.php?err9');
        $flag++;
    }
    elseif (strlen($password)>8) {
        header('location: signup.php?err10');
        $flag++;
    }
    elseif(!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $password))
    {
        header('location:signup.php?err11');
    }
   
    else {


        $user = ['username'=> $username, "password"=> $password, "email"=> $email];
        
        $file=fopen('user_List.txt','a');
        $data="$username $password \n";
        fwrite($file,$username." ".$password." ");
        echo "Registration successfull";
        header('location: login.php');
      

      
    }


?>