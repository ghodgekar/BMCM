<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../assets/plugin/phpmailer/vendor/autoload.php';
if(isset($_POST['email_data']))
{

    $output = '';
    foreach($_POST['email_data'] as $row)
    {
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 2;									 
        $mail->isSMTP();										 
        $mail->Host	 = 'smtp.hostinger.com';				 
        $mail->SMTPAuth = true;							 
        $mail->Username = 'contact@marathamandal.com';				 
        $mail->Password = 'Admin@1234!';					 
        $mail->SMTPSecure = 'tls';							 
        $mail->Port	 = 587; 
        $mail->setFrom('contact@marathamandal.com', 'Maratha Mandal');		 
        $mail->AddAddress($row["email"], $row["name"]);
        $mail->isHTML(true);								 
        $mail->Subject = 'Maratha Mandal';
        $mail->Body = $_POST['content'];
        $result = $mail->send();
        if($result["code"] == '400')
        {
            $output .= html_entity_decode($result['full_error']);
        }
        if($output == '')
        {
            echo 'ok';
        }
        else
        {
            echo $output;
        }
    }
}

?>