<?php

$name = $_POST['user'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "nitish0892@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $user . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: mywebsite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:thank.html");
?>