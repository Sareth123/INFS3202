<?php


$user = $_POST['user'];
$to = $_POST['email'];
$name = $_POST['name'];
$first = $_POST['first'];
$last = $_POST['last'];
$code = $_POST['code'];
  $subject = "Join Challenger!";
  $message = "Your friend ".$first." ".$last." would you like you to Join: ".$name." to join use this code: ".$code;
$from = "sportschallenger123@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
header('location:../home.php');
?>