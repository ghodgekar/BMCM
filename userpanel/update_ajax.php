<?php
require_once "../config/db.php";

// Allowed file types
$allowTypes = array('jpg', 'png', 'jpeg');

// Default response
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.',
);

$id = $_POST['id'];
$reg_no = $_POST['reg_no'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$position = $_POST['position'];
$blood_grup = $_POST['blood_grup'];
$division = $_POST['division'];
$department = $_POST['department'];
$emp_id = $_POST['emp_id'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$permanent_address = $_POST['permanent_address'];
$current_address = $_POST['current_address'];

// If form is submitted
if (isset($f_name, $m_name, $l_name, $blood_grup, $position, $division, $department, $emp_id, $mobile_no, $email, $permanent_address, $current_address)) {
    // Check whether submitted data is not empty
    if (!empty($f_name) && !empty($m_name) && !empty($l_name) && !empty($blood_grup) && !empty($position) && !empty($division) && !empty($department) && !empty($emp_id) && !empty($mobile_no) && !empty($email) && !empty($permanent_address) && !empty($current_address)) {
        $sql = "UPDATE `candidate_data` SET `f_name`='$f_name',`m_name`='$m_name',`l_name`='$l_name',`blood_grup`='$blood_grup',`position`='$position',`division`='$division',`department`='$department',`permanent_address`='$permanent_address',`current_address`='$current_address' WHERE id = '$id'";
        if ($mysqli->query($sql) === true) {
            $response['status'] = 1;
            $response['message'] = 'Form data updated successfully!';
            // $file_path = 'uploads/' . $reg_no;
            // if (!file_exists($file_path)) {
            //     mkdir($file_path, 0777, true);
            // }
            // $uploadedFile = '';
            // if (isset($_FILES['upload_file']['name']) && count($_FILES['upload_file']['name']) !=0 ) {
            //     $total_files = count($_FILES['upload_file']['name']);
            //     for ($key = 0; $key < $total_files; $key++) {
            //         if (!empty($_FILES['upload_file']['name'][$key])) {
            //             $fileName = $key . '_' . $reg_no . '.jpg';
            //             $targetFilePath = $file_path . '/' . $fileName;
            //             $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            //             if (move_uploaded_file($_FILES['upload_file']['tmp_name'][$key], $targetFilePath)) {
            //                 $uploadedFile = $fileName;
            //                 $response['status'] = 1;
            //                 $response['message'] = 'Form data updated successfully!';
            //             } else {
            //                 $uploadStatus = 0;
            //                 $response['message'] = 'Sorry, there was an error uploading your file.';
            //             }
            //         }
            //     }
            // }
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    } else {
        $response['message'] = 'Please fill all the mandatory fields.';
    }
}

// Return response
echo json_encode($response);