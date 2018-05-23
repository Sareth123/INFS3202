<?php
session_start();

	$user = $_SESSION['user'];
include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	$details=mysqli_query($db->link,"SELECT * FROM users WHERE username ='$user'");
   	$drow=mysqli_fetch_assoc($details);
	$password = $_POST['password'];
	if(!empty($password)&&!preg_match('/\s/',$email)&&strlen($password)>5){
	$up_password = password_hash($password, PASSWORD_BCRYPT);
	 mysqli_query($db->link,"UPDATE users SET password='$up_password' WHERE username ='$user'");
}
    $email = $_POST['email'];
    if(!empty($email)&&!preg_match('/\s/',$email)&&strpos($email, '@')){
    mysqli_query($db->link,"UPDATE users SET email='$email' WHERE username ='$user'");
}
    $postcode =$_POST['postcode'];
    if(!empty($postcode)&&is_numeric($postcode)){
    	 mysqli_query($db->link,"UPDATE users SET postcode='$postcode' WHERE username ='$user'");
}
$updetails=mysqli_query($db->link,"SELECT * FROM users WHERE username ='$user'");
   	$updrow=mysqli_fetch_assoc($updetails);

   	if(isset($up_password)||$drow['email']!=$updrow['email']||$drow['postcode']!=$updrow['postcode']){
		Print '<script>alert("Update made");</script>'; // Prompts the user
        Print '<script>window.location.assign("../update.php");</script>';
      }
      else{
      	Print '<script>alert("No change was made");</script>'; // Prompts the user
        Print '<script>window.location.assign("../update.php");</script>';
      }
?>