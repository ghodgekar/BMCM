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
$sql = "UPDATE candidate_data SET status=$_POST[status] WHERE id=$_POST[id]";

if ($mysqli->query($sql) === TRUE) {
    $response['status'] = 1;
    $response['message'] = 'Record updated successfully';
} else {
    $response['status']  = 0;
    $response['message'] = "Error updating record: " . $mysqli->error;
}

// Return response
echo json_encode($response);