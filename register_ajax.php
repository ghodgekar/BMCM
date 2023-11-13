<?php
require_once "config/db.php";

// Allowed file types
$allowTypes = array('jpg', 'png', 'jpeg');

// Default response
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.',
);

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
$recommender_name = $_POST['recommender_name'];
$recommender_mobile_no = $_POST['recommender_mobile_no'];
$recommender_member_no = $_POST['recommender_member_no'];
$fees_type = $_POST['fees_type'];
$fees_transaction_id = $_POST['fees_transaction_id'];
$fees_date = $_POST['fees_date'];
$password = $_POST['password'];

// If form is submitted
if (isset($f_name, $m_name, $l_name, $blood_grup, $position, $division, $department, $emp_id, $mobile_no, $email, $permanent_address, $current_address, $recommender_name, $recommender_mobile_no, $recommender_member_no, $fees_type,$fees_transaction_id,$fees_date, $password)) {
    // Check whether submitted data is not empty
    if (!empty($f_name) && !empty($m_name) && !empty($l_name) && !empty($blood_grup) && !empty($position) && !empty($division) && !empty($department) && !empty($emp_id) && !empty($mobile_no) && !empty($email) && !empty($permanent_address) && !empty($current_address) && !empty($recommender_name) && !empty($recommender_mobile_no) && !empty($recommender_member_no) && !empty($fees_type) && !empty($fees_transaction_id) && !empty($fees_date) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $response['message'] = 'Please enter a valid email.';
        } else {
            $checkDuplicateQuery = "select id from candidate_data WHERE email='$email' or mobile_no=$mobile_no";
            $checkDuplicateResult = mysqli_query($mysqli, $checkDuplicateQuery);
            $checkDuplicateRow = mysqli_fetch_assoc($checkDuplicateResult);
            if (mysqli_num_rows($checkDuplicateResult) === 0) {
                $encodePassword = base64_encode($password);
                $getLastIdQuery = "select id from candidate_data order by id desc limit 1";
                $getLastIdResult = mysqli_query($mysqli, $getLastIdQuery);
                $getLastIdRow = mysqli_fetch_assoc($getLastIdResult);
                if ($getLastIdRow['id'] == null) {
                    $last_id = 1;
                }
                $last_id = $getLastIdRow['id'] + 1;
                $currentYear = date("Y");
                $reg_no = $cucc = sprintf($currentYear . '%05d', $last_id);

                $sql = "INSERT INTO `candidate_data`(`reg_no`, `f_name`, `m_name`, `l_name`, `blood_grup`, `position`, `division`, `department`, `emp_id`, `mobile_no`, `email`, `permanent_address`, `current_address`, `recommender_name`, `recommender_mobile_no`, `recommender_member_no`, `fees_type`,`fees_transaction_id`,`fees_date`, `password`, `status`, `is_active`) VALUES ('$reg_no','$f_name', '$m_name', '$l_name', '$blood_grup', '$position', '$division', '$department', '$emp_id', '$mobile_no', '$email', '$permanent_address', '$current_address', '$recommender_name', '$recommender_mobile_no', '$recommender_member_no', '$fees_type','$fees_transaction_id', '$fees_date', '$encodePassword','1','1')";
                if ($mysqli->query($sql) === true) {
                    $file_path = 'uploads/' . $reg_no;
                    if (!file_exists($file_path)) {
                        mkdir($file_path, 0777, true);
                    }
                    $uploadedFile = '';
                    if (isset($_FILES['upload_file']['name'])) {
                        $total_files = count($_FILES['upload_file']['name']);
                        for ($key = 0; $key < $total_files; $key++) {
                            if (!empty($_FILES['upload_file']['name'][$key])) {
                                $fileName = $key . '_' . $reg_no . '.jpg';
                                $targetFilePath = $file_path . '/' . $fileName;
                                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                                if (move_uploaded_file($_FILES['upload_file']['tmp_name'][$key], $targetFilePath)) {
                                    $uploadedFile = $fileName;

                                    //mail
                                    // ini_set("SMTP", "smtp.gmail.com");
                                    // ini_set("sendmail_from", "surabhi.g@smbgroup.co.in");

                                    // $to      = $email;
                                    // $subject = 'BMCM Registration Successufull';
                                    // $message = 'Registration Successfull... You Can Login After Admin Approval...';
                                    // $headers = 'From: surabhi.g@smbgroup.co.in'       . "\r\n" .
                                    //             'X-Mailer: PHP/' . phpversion();
                                    // mail($to, $subject, $message, $headers);
                                    //end mail

                                    $response['status'] = 1;
                                    $response['message'] = 'Form data submitted successfully!';
                                } else {
                                    $uploadStatus = 0;
                                    $response['message'] = 'Sorry, there was an error uploading your file.';
                                }
                            }
                        }
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }
            }else{
                $uploadStatus = 0;
                $response['message'] = 'Sorry, Mobile no Or Email Already Registered';
            }

        }
    } else {
        $response['message'] = 'Please fill all the mandatory fields.';
    }
}

// Return response
echo json_encode($response);
