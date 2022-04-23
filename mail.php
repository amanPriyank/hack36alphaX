<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "amanshankarsingh2001@gmail.com";
$subject = "Mail From INDI-GRO";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile Number =" . $phone;
$headers = "From: noreply@indi-gro" . "\r\n" .
"CC: hrs2091@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanku.html");
?>