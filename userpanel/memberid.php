<?php
session_start();
if (!isset($_SESSION['member_id'])) {
    header('Location: ../index.php');
}
require_once "../config/db.php";
$sql = "SELECT * FROM candidate_data WHERE is_active='1' and id='$_SESSION[member_id]'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$reg_no = $row['reg_no'];
$id = $row['id'];
$name = $row['f_name'] . " " . $row['m_name'] . " ". $row['l_name'];
$position = $row['position'];
$dob = $row['dob'];
$blood_grup = $row['blood_grup'];
$division = $row['division'];
$department = $row['department'];
$emp_id = $row['emp_id'];
$mobile_no = $row['mobile_no'];
$email = $row['email'];
$permanent_address = $row['permanent_address'];
$current_address = $row['current_address'];
$recommender_name = $row['recommender_name'];
$recommender_mobile_no = $row['recommender_mobile_no'];
$recommender_member_no = $row['recommender_member_no'];
$fees_type = $row['fees_type'];
$fees_transaction_id = $row['fees_transaction_id'];
$fees_date = $row['fees_date'];
$password = $row['password'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    p {
        margin-top: 0;
        margin-bottom: 0rem;
    }
    </style>

    <title>Maratha Mandal</title>

</head>

<body>
    <div class="container">
        <div class="card mb-3 mx-auto" style="max-width: 480px;">
            <div class="row g-0">
                <div class="header text-center d-flex">
                    <div class="flex-shrink-0">
                        <img src="./image/logo.png" alt="..." width="90px">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4 style="font-size: 18px;
    color:#ff7e00;
    font-weight: 600;">मराठा मंडळ सामाजिक संस्था</h4>
                        <p style="font-size: 11px;">नोंदणी क्रं. बृहन्मुंबई/००००५४४/२०२३ (संस्था नोंदणी अधिनियम १८६०
                            अंतर्गत)</p>
                        <p style=" font-size: 13px;
    font-weight: 600;">समाजाचा विकास हा एकच ध्यास</P>
                    </div>

                </div>
                <p class="text-center"><b>सभासद ओळखपत्र</b></p>
                <hr>
                <div class="col-md-3">
                    <img src="../uploads/<?php echo $reg_no; ?>/0_<?php echo $reg_no; ?>.jpg" class="img-fluid rounded-start" id="profile-pic"style="padding: 5px; width:150px">
                    <p style="font-weight: 600;
    font-size: 13px;
    text-align: center;">सदस्यत्व क्रमांक : <?php echo $reg_no; ?></p>
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="padding: 0.2rem 0.2rem">
                        <ul style="font-size: 12px;
    list-style: none;padding-left: 0rem;">
                            <li><b>नाव :</b> <?php echo $name; ?></li>
                            <li><b>विभाग :</b> <?php echo $department; ?></li>
                            <li><b>जन्मतारीख :</b> <?php echo $dob; ?></li>
                            <li><b>मोबाइल नं :</b> <?php echo $mobile_no; ?></li>
                            <li><b>पत्ता : </b> <?php echo $current_address; ?></li>
                            <li><b>रक्तगट : </b> <?php echo $blood_grup; ?></li>
                        </ul>

                        <div class="d-flex flex-row-reverse bd-highlight"
                            style="margin-block-start: -28px;margin-block-end: -9px;margin-inline-end: -32px;">

                            <div class="p-2 bd-highlight"><img src="./image/sign1.png" class="img-fluid"
                                    alt="..."><br><span style="font-size: 13px;
    font-weight: 600;">सचिव<span></div>
                            <div class="p-2 bd-highlight"><img src="./image/sign1.png" class="img-fluid"
                                    alt="..."><br><span style="font-size: 13px;
    font-weight: 600;">अध्यक्ष<span></div>

                        </div>
                        <div class="d-flex justify-content-end" style="margin-inline-end: -32px;">
                            <span><b>www.marathamandal.com<b></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <br>
    <br><br>





    <div class="card text-center mx-auto" style="max-width: 480px;">
        <div class="card-header d-flex">
            <div class="flex-shrink-0">
                <img src="./image/mudra.png" alt="..." width="90px">
            </div>
            <div class="flex-grow-1 ms-3">

                <p style="font-size: 12px; color:#aa8a02 ">हे ओळखपत्र मराठा मंडळ सामाजिक संस्थेचे आहे. तुम्हाला हे
                    ओळखपत्र सापडल्यास, कृपया खाली दिलेल्या पत्त्यावर परत करा किंवा खाली दिलेल्या मोबाईल नंबरवर कॉल करा
                </p>
            </div>

        </div>

        <div class="card-body" style="padding:35px">
            <h5 class="card-title" style="font-weight: 600;color:#aa8a02">मराठा मंडळ सामाजिक संस्था</h5>
            <p class="card-text" style="font-size: 15px;
    font-weight: 500;color:#aa8a02">पत्ता: तळमजला, एफ, सिताराम बिल्डिंग, अण्णासाहेब दौंडकर मार्ग, क्रॉफर्ड मार्केट,
                फोर्ट, मुंबई - ४००००१</p>

        </div>
        <div class="card-footer text-muted">
            <span style="color:#aa8a02">MOBILE NO : +917718910737</span>
        </div>
    </div>
    </div>
</body>

</html>