<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
session_start();
require_once "../config/db.php";

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
            $decodePassword = base64_encode($password);
            $sql = "SELECT * FROM admin_users WHERE username='$email' AND password='$decodePassword'";
            $result = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $email && $row['password'] === $decodePassword) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    $response['status'] = 1;
                    $response['message'] = 'Login successfully!'; 
                    $response['url'] = 'pending.php'; 
                } else {
                    $response['status'] = 0;
                    $response['message'] = 'Incorect User name or password1'; 
                    $response['url'] = ''; 
                }
            } else {
                $response['status'] = 0;
                $response['message'] = 'Incorect User name or password2'; 
                $response['url'] = ''; 
            }
        }
    } else {
        $response['message'] = 'Please fill all the mandatory fields.';
    }
}

// Return response
echo json_encode($response);
