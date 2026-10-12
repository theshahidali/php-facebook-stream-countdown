<?php require_once('../inc/config.php');

$username = $_POST['lg_username'];
$password = $_POST['lg_password'];

if(empty($username) || empty($password)){

	header("location: ../index.php");
}

if( login($username, $password) ){
	header("location: ../dashboard.php");
}else{
	header("location: ../index.php");
}