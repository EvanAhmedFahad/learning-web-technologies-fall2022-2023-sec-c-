<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(isset($_POST['Register']))
    {
        if($username != null &&  $password != null){
			$user = ['username'=> $username, 'password'=>$password];
			$_SESSION['user'] = $user;
			header('location: Login.php');
		}else{
			echo "null submission";
		}

        
    }

    // if($username == "" || $password == ""){
    //     //echo "null username/password/email";
    //     header('location: Signup.php');

    // }else {
        

        

    //     header('location: Login.php');
    // }


?>