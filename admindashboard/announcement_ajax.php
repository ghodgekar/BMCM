<?php
require_once "../config/db.php";

// Default response
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.',
);

$type = $_POST['posttype'];
if ($type != 'delete') {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $subject = $_POST['subject'];
    if (isset($date, $time, $place, $subject)) {
        if (!empty($date) && !empty($time) && !empty($place) && !empty($subject)) {
            if ($type == 'add') {
                $sql = "INSERT INTO `announcement`(`date`, `time`, `place`, `subject`, `is_active`) VALUES ('$date','$time', '$place', '$subject','1')";
            } elseif ($type == 'edit') {
                $sql = "UPDATE announcement SET date='$date', time='$time', place='$place', subject='$subject' WHERE id=$_POST[id]";
            } elseif ($type == 'delete') {
                $sql = "UPDATE announcement SET is_active=0 WHERE id=$_POST[id]";
            }
            if ($mysqli->query($sql) === true) {
                $response['status'] = 1;
                $response['message'] = 'Form data submitted successfully!';
            } else {
                $uploadStatus = 0;
                $response['message'] = "Error: " . $sql . "<br>" . $mysqli->error;
            }
        } else {
            $response['message'] = 'Please fill all the mandatory fields.';
        }
    }
} else {
    $sql = "UPDATE announcement SET is_active=0 WHERE id=$_POST[id]";
    if ($mysqli->query($sql) === true) {
        $response['status'] = 1;
        $response['message'] = 'Data deleted successfully!';
    } else {
        $uploadStatus = 0;
        $response['message'] = "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
// Return response
echo json_encode($response);
