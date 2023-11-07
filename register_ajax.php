<?php
require_once("config/db.php");

$uploadDir = 'uploads/';

// Allowed file types 
$allowTypes = array('jpg', 'png', 'jpeg');

// Default response 
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);

$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$position = $_POST['position'];
$division = $_POST['division'];
$department = $_POST['department'];
$emp_id = $_POST['emp_id'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$permanent_address = $_POST['permanent_address'];
$current_address = $_POST['current_address'];
$recommender_name = $_POST['recommender_name'];
$recommender_mobile_no = $_POST['recommender_mobile_no'];
$recommender_member_no = $_POST['recommender_member_no'];
$recommendation_date = $_POST['recommendation_date'];
$password = $_POST['password'];

// If form is submitted 
if (isset($f_name, $m_name, $l_name, $position, $division, $department, $emp_id, $mobile_no, $email, $permanent_address, $current_address, $recommender_name, $recommender_mobile_no, $recommender_member_no, $recommendation_date, $password)) {
    // Check whether submitted data is not empty 
    if (!empty($f_name) && !empty($m_name) && !empty($l_name) && !empty($position) && !empty($division) && !empty($department) && !empty($emp_id) && !empty($mobile_no) && !empty($email) && !empty($permanent_address) && !empty($current_address) && !empty($recommender_name) && !empty($recommender_mobile_no) && !empty($recommender_member_no) && !empty($recommendation_date) && !empty($password)) {
        // Validate email 
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $response['message'] = 'Please enter a valid email.';
        } else {
            $uploadStatus = 1;

            // Upload file 
            $uploadedFile = '';
            if (!empty($_FILES["profile-img"]["name"])) {
                // File path config 
                $fileName = basename($_FILES["profile-img"]["name"]);
                $targetFilePath = $uploadDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                // Allow certain file formats to upload 
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to the server 
                    if (move_uploaded_file($_FILES["profile-img"]["tmp_name"], $targetFilePath)) {
                        $uploadedFile = $fileName;
                    } else {
                        $uploadStatus = 0;
                        $response['message'] = 'Sorry, there was an error uploading your file.';
                    }
                } else {
                    $uploadStatus = 0;
                    $response['message'] = 'Sorry, only ' . implode('/', $allowTypes) . ' files are allowed to upload.';
                }
            }

            if ($uploadStatus == 1) {
                // Insert form data in the database 
                $currentYear = date("Y");
                $last_id = $mysqli->insert_id;
                $reg_no = str_pad($currentYear.$last_id, 6, '0', STR_PAD_LEFT);
                $encodePassword = base64_encode($password);
                $sql = "INSERT INTO `candidate_data`(`reg_no`, `f_name`, `m_name`, `l_name`, `position`, `division`, `department`, `emp_id`, `mobile_no`, `email`, `permanent_address`, `current_address`, `recommender_name`, `recommender_mobile_no`, `recommender_member_no`, `recommendation_date`, `password`, `status`, `is_active`) VALUES ('$reg_no','$f_name', '$m_name', '$l_name', '$position', '$division', '$department', '$emp_id', '$mobile_no', '$email', '$permanent_address', '$current_address', '$recommender_name', '$recommender_mobile_no', '$recommender_member_no', '$recommendation_date', '$encodePassword','1','1')";
                if ($mysqli->query($sql) === TRUE) {
                    $response['status'] = 1;
                    $response['message'] = 'Form data submitted successfully!';
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }
            }
        }
    } else {
        $response['message'] = 'Please fill all the mandatory fields.';
    }
}

// Return response 
echo json_encode($response);