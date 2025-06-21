<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$mobile = $_POST['mobile'];
$message= $_POST['message'];
$dtype= $_POST['dtype'];
$to = "vipulpore25@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile = " . $mobile . "\r\n Message =" . $message . "\r\n Requirment =" . $dtype;
$headers = "From: vipulpore25@gmail.com" . "\r\n" .
"CC: info@thewebdecor.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>