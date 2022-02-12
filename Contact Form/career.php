<?php
$result = "";
   if(isset($_POST['submit']))
   {
       
       include("class.phpmailer.php"); 

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers.= "From: EFFICACIOUS  <info@efficacious.co.in>" . "\r\n"; 

   	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>EFFICACIOUS</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href=''><img src='../img/logo_pic.png' alt='EFFICACIOUS'></a><br><br>";
	$body .= "</td></tr></thead> <tbody><tr>";
	$body .= "<td style='border:none;'><strong>Company Name:</strong> {$_POST['Company name']}</td> ";
	$body .= "</tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$_POST['name']}</td> ";
	$body .= "</tr>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$_POST['email']}</td>";
	$body .= "</tr>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$_POST['phone Number']}</td>";
	$body .= "</tr>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$_POST['Address']}</td>";
	$body .= "</tr>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$_POST['Resume']}</td>";

	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'> <strong>Message :</strong> {$_POST['message']}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";


	$msg = $body;
	$msg = wordwrap($msg,70);
	$email=$_POST['email'];
	mail("info@efficacious.co.in","EFFICACIOUS",$msg,$headers);

   	}
   header("location : index.html");
?>

