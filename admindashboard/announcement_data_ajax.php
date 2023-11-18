<?php
require_once "../config/db.php";

// Default response
$response = array(
    'status' => 0,
    'data' => 'Form submission failed, please try again.',
);

$id = $_POST['id'];

$sql = "SELECT * FROM announcement WHERE is_active='1' and id='$id'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$response['status'] = 1;
$response['data'] = $row;

// Return response
echo json_encode($response);