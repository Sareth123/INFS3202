<?php
$first =$_POST['name'];
$last =$_POST['surname'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$message =$_POST['message'];
$f_m = "Sent By: ".$first." ".$last."\r\n".$email."\r\n".$phone."\r\n"."Message:\r\n".$message;
Print $f_m;
$to = "sportschallenger123@gmail.com";
$headers = "From:" . $email;

$subject ="Contacted by: ".$first." ".$last;
mail($to,$subject,$f_m,$headers);
        Print '<script>alert("Message Sent");</script>';
        Print '<script>window.location.assign("../contactus.php");</script>';
?>