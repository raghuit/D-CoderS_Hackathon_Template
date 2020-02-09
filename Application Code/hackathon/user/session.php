<?php
require_once("../includes/db_config.php");
require_once('check.php');
$user=$_SESSION['user'];
$ses_sql=mysqli_query($conn,"select atype from logins where user='". $user ."'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['atype'];
if($login_session===NULL || $login_session=='' || $user===NULL || $user==''){
	mysqli_close($conn); 
	header("Location:login.php");
	exit();
}
if(!isset($login_session)===0){
	mysqli_close($conn);
	header("Location:login.php");
	exit();
}
?>