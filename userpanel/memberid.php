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
$name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
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

      .card-footer {
         padding-block: 17px;
         background-color: rgb(228 217 174);
         border-top: 1px solid rgba(0, 0, 0, .125);
      }

      .card-header {
         padding: 0.5rem 1rem;
         margin-bottom: 0;
         background-color: rgb(170 138 2 / 32%);
         border-bottom: 1px solid rgba(0, 0, 0, .125);
      }

      .line {
         display: flex;
         flex-direction: row;
      }

      .line:before,
      .line:after {
         content: "";
         flex: 1 1;
         border-bottom: 3px solid #aa8a02;
         margin: auto;
      }
   </style>
   <title>Maratha Mandal</title>
   <link rel="icon" type="image/x-icon" href="./image/fevicon icon.png">
</head>

<body>
   <br>
   <div style="text-align: center">
      <button class="btn btn-primary" onClick="printdiv('printable_div_id');">PRINT</button>
      <a href="../index.php"><button class="btn btn-danger">Back</button></a>
      <br>
   </div>
   <br>
   <div class="container" id='printable_div_id'>
      <div class="card mb-3 mx-auto"
         style="max-width: 480px;background-image:url(./image/bg_front.png);background-repeat:no-repeat;background-size:cover;-webkit-print-color-adjust: exact;">
         <div class="row g-0">
            <div class="header text-center d-flex" style="background-color: #e3d7aa;">
               <div class="flex-shrink-0">
                  <img src="./image/logo.png" alt="..." width="90px">
               </div>
               <div class="flex-grow-1 ms-3">
                  <h4 style="font-size: 18px;
                        color:#ff7e00;
                        font-weight: 600;padding-top: 10px;">मराठा मंडळ सामाजिक संस्था</h4>
                  <p style="font-size: 11px;"><span style="background-color: #fff;
                        padding-inline: 5px;">नोंदणी क्रं. बृहन्मुंबई/००००५४४/२०२३ (संस्था नोंदणी अधिनियम १८६०
                        अंतर्गत)<span></p>
                  <p style=" font-size: 13px;
                        font-weight: 600;padding-top: 8px;">समाजाचा विकास हा एकच ध्यास</P>
               </div>
            </div>
            <p class="text-center line"><span style="font-weight: 600;
                  border: 3px solid #b78a02;
                  border-radius: 10px;
                  font-size: 15px;
                  padding-inline: 10px;">सभासद ओळखपत्र</span></p>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <img src="../uploads/<?php echo $reg_no; ?>/0_<?php echo $reg_no; ?>.jpg"
                     class="img-fluid rounded-start" id="profile-pic" style="padding: 5px; width:150px">
                  <p style="font-weight: 600;
                        font-size: 13px;
                        text-align: center;">सदस्यत्व क्रमांक : <br>
                     <?php echo $reg_no; ?>
                  </p>
               </div>
               <div class="flex-grow-1 ms-3">
                  <div class="card-body" style="padding: 1.2rem 0.2rem">
                     <ul style="font-size: 13px;
                           list-style: none;padding-left: 0rem;">
                        <li><b>नाव :</b>
                           <?php echo $name; ?>
                        </li>
                        <li><b>विभाग :</b>
                           <?php echo $department; ?>
                        </li>
                        <li><b>जन्मतारीख :</b>
                           <?php echo $dob; ?>
                        </li>
                        <li><b>मोबाइल नं :</b>
                           <?php echo $mobile_no; ?>
                        </li>
                        <li><b>पत्ता : </b>
                           <?php echo $current_address; ?>
                        </li>
                        <li><b>रक्तगट : </b>
                           <?php echo $blood_grup; ?>
                        </li>
                     </ul>
                  </div>
                  <div class="d-flex flex-row-reverse bd-highlight" style="margin-block-start: -28px;
                        margin-block-end: -11px;
                        margin-inline-end: -8px;">
                     <div class="p-2 bd-highlight"><img src="./image/ssing.png" class="img-fluid" alt="..."><br><span
                           style="font-size: 13px;
                           font-weight: 600;">सचिव<span></div>
                     <div class="p-2 bd-highlight"><img src="./image/asing.png" class="img-fluid" alt="..."><br><span
                           style="font-size: 13px;
                           font-weight: 600;">अध्यक्ष<span></div>
                  </div>
                  <div class="d-flex justify-content-end" style="margin-inline-end:23px;"><span
                        style="font-size: 12px;"><b>www.marathamandal.com<b></span></div>
               </div>
            </div>
         </div>
      </div>
      <div class="card mb-3 mx-auto text-center"
         style="max-width: 480px; background-image:url(./image/bg.png);background-repeat:no-repeat;background-size:cover;-webkit-print-color-adjust: exact;">
         <div class="card-header d-flex">
            <div class="flex-shrink-0">
               <img src="./image/mudra.png" alt="..." width="90px">
            </div>
            <div class="flex-grow-1 ms-3">
               <p style="font-size: 12px; color:#aa8a02 ;margin-top: 19px;">हे ओळखपत्र मराठा मंडळ सामाजिक संस्थेचे
                  आहे. तुम्हाला हे ओळखपत्र सापडल्यास, कृपया खाली दिलेल्या पत्त्यावर परत करा किंवा खाली दिलेल्या
                  मोबाईल नंबरवर कॉल करा
               </p>
            </div>
         </div>
         <div class="card-body" style="padding:35px">
            <h5 class="card-title" style="font-weight: 600;color:#aa8a02">मराठा मंडळ सामाजिक संस्था</h5>
            <p class="card-text" style="font-size: 15px;
                  font-weight: 500;color:#aa8a02">पत्ता: तळमजला, एफ, सिताराम बिल्डिंग, अण्णासाहेब दौंडकर मार्ग,
               क्रॉफर्ड मार्केट,
               फोर्ट, मुंबई - ४००००१
            </p>
         </div>
         <div class="card-footer text-muted">
            <span style="color:#aa8a02;">MOBILE NO : +91 7718910737</span>
         </div>
      </div>
   </div>
   </div>
   <!--end back side-->
   <br><br><br>
   <script>
      function printdiv(elem) {
         var header_str = '<html><head><title>' + document.title + '</title></head><body>';
         var footer_str = '</body></html>';
         var new_str = document.getElementById(elem).innerHTML;
         var old_str = document.body.innerHTML;
         document.body.innerHTML = header_str + new_str + footer_str;
         window.print();
         document.body.innerHTML = old_str;
         return false;
      }
   </script>
</body>

</html>