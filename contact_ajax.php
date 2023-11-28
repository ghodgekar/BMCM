<?php

$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.',
);

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$msg = $_POST['msg'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'assets/plugin/phpmailer/vendor/autoload.php';
$mail = new PHPMailer(true);
try {
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();										 
	$mail->Host	 = 'smtp.hostinger.com';				 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'contact@marathamandal.com';				 
	$mail->Password = 'Admin@1234!';					 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 
	$mail->setFrom('contact@marathamandal.com', 'Maratha Mandal');		 
	$mail->addAddress('rohinidigi22@gmail.com');
	// $mail->addAddress('receiver2@gfg.com', 'Name');
	$mail->isHTML(true);								 
	$mail->Subject = 'Contact Us Enquiry Form';
	$mail->Body = "Name: " . $name . "\r\n<br>  Contact Number: " . $mobile . "\r\n <br>Email: " . $email . "\r\n <br>Description: " . $msg;
	// $mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
    $response['status'] = 1;
    $response['message'] = 'Mail has been sent successfully!';
} catch (Exception $e) {
	$response['message'] =  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
echo json_encode($response);

?>