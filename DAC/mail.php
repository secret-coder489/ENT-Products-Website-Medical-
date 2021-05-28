<?php
//get data from form  
$name = $_POST['name'];
$mobile=$_POST['mobile'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$to = "pragatitiwari678@mail.com";
$subject = "mail from dac";
$txt ="Name = ". $name ."/r/n Mobile No =" . $mobile" . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: pragati2017ec021@abesit.edu.in" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Thankyou.html");
?>
