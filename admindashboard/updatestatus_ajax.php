<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once "../config/db.php";

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
    if($_POST['status'] == '3'){
        $sql_1 = "SELECT * FROM candidate_data WHERE id=$_POST[id]";
        $result_1 = mysqli_query($mysqli, $sql_1);
        $row_1 = mysqli_fetch_assoc($result_1);
        $email = $row_1['email'] ;
        $to = $email;
        $subject = "Member Approval";
        $txt = "Dear Member, your membership is approved by admin. Please login...";
        $headers = "From: contact@marathamandal.com";
        mail($to,$subject,$txt,$headers);
    }
    $response['status'] = 1;
    $response['message'] = 'Record updated successfully';
} else {
    $response['status']  = 0;
    $response['message'] = "Error updating record: " .$sql;
}

// Return response
echo json_encode($response);