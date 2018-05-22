<?php
session_start();

	$user = $_SESSION['user'];
include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	$password = $_POST['password'];
    $email = $_POST['email'];
    $postcode =$_POST['poscode'];
  if(strpos($email, '@')){
    mysqli_query($db->link,"UPDATE users SET email='$email' WHERE username ='$user'");
header("location:../update.php");
  }
 header("location:../update.php");
?>