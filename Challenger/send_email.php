<?php
$to = "grantthompson123@hotmail.com";
$subject = "Test mail";
$message = "Hello! Testing!";
$from = "grantthompson123@gmail.com";
$headers = "From:" . $from;
$mail_sent = mail($to,$subject,$message,$headers);
echo $mail_sent ? "Mail Sent.":"Fail";
?>