<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once "../config/db.php";
use PHPMailer\PHPMailer\PHPMailer;
require '../assets/plugin/phpmailer/vendor/autoload.php';

function curl_get_contents($url)
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

// Default response
$response = array(
    'status' => $_POST,
    'message' => 'Form submission failed, please try again.',
);
$reason = NULL;
$created_by = NULL;
if(isset($_POST['reason'])){
    $reason = $_POST['reason'];
    $created_by = $_POST['created_by'];
}

$sql = "UPDATE candidate_data SET status='$_POST[status]', reason='$reason', created_by='$created_by' WHERE id=$_POST[id]";

if ($mysqli->query($sql) === TRUE) {
    $sql_1 = "SELECT * FROM candidate_data WHERE id=$_POST[id]";
    $result_1 = mysqli_query($mysqli, $sql_1);
    $row_1 = mysqli_fetch_assoc($result_1);
    if($row_1['status'] == 3){
        $name = $row_1['name'] ;
        $email = $row_1['email'] ;
        $mobile_no = $row_1['mobile_no'] ;
        $password = base64_decode($row_1['password']) ;
        //send sms
        $message = "Welcome to Maratha Mandal Family , please login to your account with your email ID:".$email." and Password:".$password.".";
        $authKey = "409880Afm2thuJ4wvH6566d207P1";
        $sender = "MMSS";
        $route = "4";
        $DLT_TE_ID = "1707170291119342842";
        $content=urlencode($message);
        $msgApi = "https://control.msg91.com/api/sendhttp.php?authkey=".$authKey."&mobiles=91".$mobile_no."&message=".$content."&sender=".$sender."&route=".$route."&DLT_TE_ID=".$DLT_TE_ID;
        $send_msg = curl_get_contents($msgApi);
        //end
        //mail
        $output = '';
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
        $mail->AddAddress($email, $name);
        $mail->isHTML(true);								 
        $mail->Subject = 'Maratha Mandal';
        $mail->Body = $message;
        $result = $mail->send();
        if($result["code"] == '400')
        {
            $output .= html_entity_decode($result['full_error']);
        }
        if($output == '')
        {
            $response['status'] = 1;
            $response['message'] = 'Record updated successfully';
        }
        else
        {
            $response['status'] = 1;
            $response['message'] = 'Record updated successfully';
        }
        //end
    }else{    
        $response['status'] = 1;
        $response['message'] = 'Record updated successfully';
    }
} else {
    $response['status']  = 0;
    $response['message'] = "Error updating record: " .$sql;
}

// Return response
echo json_encode($response);