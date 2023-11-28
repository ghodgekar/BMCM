<?php
require_once "config/db.php";

// Allowed file types
$allowTypes = array('jpg', 'png', 'jpeg');

// Default response
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.',
);

$donar_name = $_POST['donar_name'];
$donar_mobile = $_POST['donar_mobile'];
$donar_amt = $_POST['donar_amt'];

// If form is submitted
if (isset($donar_name, $donar_mobile, $donar_amt)) {
    // Check whether submitted data is not empty
    if (!empty($donar_name) && !empty($donar_mobile) && !empty($donar_amt)) {
        $sql = "INSERT INTO `donation_data`(`donar_name`, `donar_mobile`, `donar_amt`) VALUES ('$donar_name','$donar_mobile', '$donar_amt')";
        if ($mysqli->query($sql) === true) {
            $last_id = $mysqli->insert_id;
            $file_path = 'uploads/donation/';
            if (!file_exists($file_path)) {
                mkdir($file_path, 0777, true);
            }
            $uploadedFile = '';
            if (isset($_FILES['upload_file']['name'])) {
                $total_files = count($_FILES['upload_file']['name']);
                for ($key = 0; $key < $total_files; $key++) {
                    if (!empty($_FILES['upload_file']['name'][$key])) {
                        $fileName = 'D_' . $last_id . '.jpg';
                        $targetFilePath = $file_path . '/' . $fileName;
                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                        if (move_uploaded_file($_FILES['upload_file']['tmp_name'][$key], $targetFilePath)) {
                            $uploadedFile = $fileName;
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
    } else {
        $response['message'] = 'Please fill all the mandatory fields.';
    }
}

// Return response
echo json_encode($response);