<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];
$number= $_POST['number'];
$message= $_POST['subject'];
$msg_subject= $_POST['msg_subject'];
$to = "mailto:shubham.efficacious@gmail.com";
$subject = "e-smartrestaurant Contact Form";
$txt ="Name = ". $name . "\r\n Email = " . $email ."\r\n  
Address = " . $address . " \r\n   Phone Number = " . $number . " \r\n 
subject =" . $message;
$headers = "From: " $email;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    print "<p>Success</p>";
}
else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }

?>