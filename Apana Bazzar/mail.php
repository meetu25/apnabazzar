<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['Email'];
$number= $_POST['Mobile no.'];
$Iteam Name= $_POST['Iteam Name'];
$number= $_POST['Quantity'];
$Address= $_POST['Address'];
$to = "meetsojitra25@gmail.com";
$subject = "Mail From apanabazzer";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile no. =" . $number . "\r\n Iteam Name =" . $Iteam Name . "\r\n Quantity =" . $number . "\r\n Address =" . $Address;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>