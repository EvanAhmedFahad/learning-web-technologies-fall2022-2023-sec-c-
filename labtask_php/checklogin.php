<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

	if(preg_match("/[A-Za-z]*$/",$username)){
		$_SESSION['s'] = true;
		header('location: home.php');
	}else{
		echo "invalid user";
	}


?>