<?php
if(isset($_SESSION['user'])){
header("location: index.php");
exit();
}
$error='';
session_start(); 
if (isset($_POST['user'])) {

	if (empty($_POST['user']) || empty($_POST['password'])) {
		$error = "Please Enter Details";
	}
	else{
		require_once("../includes/db_config.php");
		$username = mysqli_real_escape_string($conn,stripslashes($_POST['user']));
		$password = md5(mysqli_real_escape_string($conn,stripslashes($_POST['password'])));
		$query = mysqli_query($conn,"SELECT * FROM logins WHERE user = '". $username ."' and pass = '". $password ."'");
		if (mysqli_num_rows($query) == 1) {
			$_SESSION['user']=$username;
			header("location:index.php"); 
		} 
		else {
			$error = "Username or Password is Invalid";
		}
		mysqli_close($conn); 
	}
}
?>