<?php

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
$dob = $_POST['dob'];
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
$ward = $_POST['ward'];
$domain_experties = $_POST['domain_experties'];
$workplace_location = $_POST['workplace_location'];
$fees_amt = $_POST['fees_amt'];
$password = $_POST['password'];

// If form is submitted
if (isset($f_name, $m_name, $l_name, $blood_grup, $position, $division, $department, $emp_id, $mobile_no, $email, $permanent_address, $current_address, $recommender_name, $recommender_mobile_no, $recommender_member_no, $fees_type,$fees_transaction_id,$fees_date, $ward, $domain_experties, $workplace_location, $fees_amt, $password)) {
    // Check whether submitted data is not empty
    if (!empty($f_name) && !empty($m_name) && !empty($l_name) && !empty($blood_grup) && !empty($position) && !empty($division) && !empty($department) && !empty($emp_id) && !empty($mobile_no) && !empty($email) && !empty($permanent_address) && !empty($current_address) && !empty($recommender_name) && !empty($recommender_mobile_no) && !empty($recommender_member_no) && !empty($fees_type) && !empty($fees_transaction_id) && !empty($fees_date) && !empty($ward) && !empty($domain_experties) && !empty($workplace_location) && !empty($fees_amt) && !empty($password)) {
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

                $sql = "INSERT INTO `candidate_data`(`reg_no`, `f_name`, `m_name`, `l_name`, `blood_grup`, `position`, `division`, `department`, `emp_id`, `dob`, `mobile_no`, `email`, `permanent_address`, `current_address`, `recommender_name`, `recommender_mobile_no`, `recommender_member_no`, `fees_type`,`fees_transaction_id`,`fees_date`, `ward`, `domain_experties`, `workplace_location`, `fees_amt`, `password`, `status`, `is_active`) VALUES ('$reg_no','$f_name', '$m_name', '$l_name', '$blood_grup', '$position', '$division', '$department', '$emp_id','$dob', '$mobile_no', '$email', '$permanent_address', '$current_address', '$recommender_name', '$recommender_mobile_no', '$recommender_member_no', '$fees_type','$fees_transaction_id', '$fees_date', '$ward', '$domain_experties', '$workplace_location', '$fees_amt', '$encodePassword','1','1')";
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
                                    $response['status'] = 1;
                                    $response['message'] = 'Form data submitted successfully!';
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
