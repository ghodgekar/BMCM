<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
session_start();
require_once "config/db.php";

// Default response
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.',
);

$email = $_POST['email'];
$password = $_POST['password'];

// If form is submitted
if (isset($email, $password)) {
    if (!empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $response['message'] = 'Please enter a valid email.';
        } else {
            $encodePassword = base64_encode($password);
            $sql = "SELECT * FROM candidate_data WHERE email='$email'";
            $result = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $sql = "UPDATE `candidate_data` SET `password`='$encodePassword' WHERE `id`=$row[id]";
                if ($mysqli->query($sql) === true) {
                    $response['status'] = 1;
                    $response['message'] = 'Password reset successfully!';
                    $response['url'] = 'login.php'; 
                } else {
                    $response['status'] = 0;
                    $response['message'] = 'Please try Again'; 
                    $response['url'] = ''; 
                }
            } else {
                $response['status'] = 0;
                $response['message'] = 'Incorect User Email Id'; 
                $response['url'] = ''; 
            }
        }
    } else {
        $response['message'] = 'Please fill all the mandatory fields.';
    }
}

// Return response
echo json_encode($response);
