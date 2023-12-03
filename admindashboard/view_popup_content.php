<?php
require_once "../config/db.php";
$id = $_POST['id'];
$sql = "SELECT * FROM candidate_data WHERE is_active='1' and id =$id ";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$reg_no = $row['reg_no'];
$name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
$blood_grup = $row['blood_grup'];
$position = $row['position'];
$division = $row['division'];
$department = $row['department'];
$emp_id = $row['emp_id'];
$mobile_no = $row['mobile_no'];
$email = $row['email'];
$address = $row['current_address'];
$permanent_address = $row['permanent_address'];
$recommender_name = $row['recommender_name'];
$recommender_mobile_no = $row['recommender_mobile_no'];
$recommender_member_no = $row['recommender_member_no'];
$fees_type = $row['fees_type'];
$fees_transaction_id = $row['fees_transaction_id'];
$fees_date = $row['fees_date'];
?>
<style>
  .form-control {
    display: block;
    width: 100%;
    /* padding: 0.375rem 0.75rem; */
    font-size: 1rem;
    font-weight: 400;
    /* line-height: 1.5; */
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 0px solid #ced4da;
    border-bottom: 2px solid black;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  }

  .col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: .875rem;
    font-weight: 600;
  }
  .form-control:disabled, .form-control[readonly]{
    background: #fff;
  }
</style>

<div class="">
  <div class="row">
    <div class="col-sm-12 border">
      <div class="d-flex justify-content-between text-center">
        <div class=" p-2 bd-highlight logo"> <img src="..." class="img-fluid" alt="..."></div>
        <div class=" p-2 bd-highlight content">
          <h5 style="color:#954304;color:font-weight: 500;">|| जय जिजाऊ || || जय शिवराय ||</h5>
          <h3 style="color: #e36b05;
    font-weight: 600;">मराठा मंडळ सामाजिक संस्था, मुंबई (रजि.)</h3>
          <p><b>नोंदणी क्र.:-</b> बृहन्मुंबई/००००५४४/२०२३ (संस्था नोंदणी अधिनियम १८६० अंतर्गत नोंदणीकृत) </p>
          <p><b>पत्ता:-</b> तळमजला, एफ, सीताराम बिल्डिंग , अण्णासाहेब दौंडकर मार्ग, क्रॉफर्ड मार्केट, फोर्ट, मुंबई-००१
          </p>
          <p><b>दूरध्वनी:-</b> ७७१८९१०७३७, ई-मेल आयडी:- marathamandalsamajiksanstha@gmail.com</p>


        </div>
        <div class=" p-2 bd-highlight flex-shrink-0 profile">
          <img src="..." class="img-fluid" alt="...">
        </div>
      </div>
      <hr>
      <div class="text-center">
        <p><span style="border:2px solid red;color:red;padding:5px;font-weight:600">आजीवन/ वार्षिक सभासद नोंदणी अर्ज
          </span></p>
      </div>


      <p>
        प्रति, <br>
        मा.सचिव,<br>
        मराठा मंडळ सामाजिक संस्था,<br>
        मुंबई – ४०० ००१. <br>
      </p>

      महोदय,
      <p style="text-indent: 2em;">मी बृहन्मुंबई महानगरपालिकेत कार्यरत /सेवानिवृत्त कर्मचारी आहे. मराठा मंडळ सामाजिक
        संस्थेचे उद्देश, कार्य आणि नियम यांची
        संपूर्ण माहिती मला आहे व ते मला मान्य आहे. सर्व नियमांचे तंतोतंत पालन मी करेन. संस्थेचा आजीवन/ वार्षिक सभासद
        होण्याची माझी इच्छा
        आहे व त्यासाठी असणारे आजीवन सभासद शुल्क /वार्षिक सभासद शुल्क भरण्यास मी तयार आहे</p>

      <p><b>माझी वैयक्तिक माहिती खालील प्रमाणे आहे :- </b></p>
      <div class="">
        <!--row2-->
        <div class="row mb-1">
          <label for="inputtext" class="col-sm-4 col-form-label-sm">1.संपूर्ण नाव :-</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" value="<?php echo $name; ?>" readonly>
          </div>
        </div>
        <!--row end-->

        <!--row2-->
        <div class="row mb-1">
          <label for="inputtext" class="col-sm-4 col-form-label-sm">२.मराठा/कुणबी/कुणबी मराठा:-</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="input" value="<?php echo $name; ?>" readonly>
          </div>
        </div>
        <!--row end-->
        <!--row2-->
        <div class="row mb-1">

          <label for="input" class="col-sm-2 col-form-label-sm">3.पद/ हुद्दा :-</label>

          <div class="col-sm-2">
            <input type="text" id="inputtext" class="form-control"  value="<?php echo $position; ?>" readonly>

          </div>
          <label for="inputtext" class="col-sm-2 col-form-label-sm">विभाग :-</label>

          <div class="col-sm-2">
            <input type="text" id="inputPassword6" class="form-control"  value="<?php echo $division; ?>" readonly>
          </div>

          <label for="inputPassword6" class="col-sm-2 col-form-label-sm">खाते :-</label>

          <div class="col-sm-2">
            <input type="text" id="inputPassword6" class="form-control"  value="<?php echo $department; ?>" readonly>
          </div>

        </div><br>
        <!--row end-->


        <!--row2-->

        <div class="row mb-1">
          <label for="inputEmail3" class="col-sm-3 col-form-label-sm">४.दूरध्वनी क्रमांक :-</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  value="<?php echo $mobile_no; ?>" readonly id="inputEmail3">
          </div>
          <label for="inputEmail3" class="col-sm-3 col-form-label-sm">५.कर्मचारी संकेतांक :-</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  value="<?php echo $emp_id; ?>" readonly id="inputEmail3">
          </div>
        </div>

        <!--row end-->

        <!--row2-->


        <div class="row mb-1">
          <label for="inputEmail3" class="col-sm-2 col-form-label-sm">६.ई-मेल आयडी :-</label>
          <div class="col-sm-5">
            <input type="text" class="form-control"  value="<?php echo $email; ?>" readonly id="inputEmail3">
          </div>
          <label for="inputEmail3" class="col-sm-3 col-form-label-sm">७.रक्तगट :-</label>
          <div class="col-sm-2">
            <input type="text" class="form-control"  value="<?php echo $blood_grup; ?>" readonly id="inputEmail3">
          </div>
        </div>
        <!--row end-->
        <!--row2-->
        <div class="row mb-1">
          <label for="inputEmail3" class="col-sm-3 col-form-label-sm">८.मूळ गावचा पत्ता :-</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  value="<?php echo $permanent_address; ?>" readonly id="inputEmail3">
          </div>
        </div>
        <!--row end-->
        <!--row2-->
        <div class="row mb-1">
          <label for="inputEmail3" class="col-sm-3 col-form-label-sm">९.सध्याचे वास्तव्याचा पत्ता :-</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  value="<?php echo $address; ?>" readonly id="inputEmail3">
          </div>
        </div>
        <!--row end-->

        <p class="text-center">संस्थेचा सभासद म्हणून मला स्वीकारावे, ही विनंती.</p>
        <!-- <div class="d-flex justify-content-end">
          <div class="col-sm-4"><input type="text" class="form-control"  value="<?php echo $name; ?>" readonly id="inputEmail3"></div>
        </div>
        <div class="d-flex justify-content-end">
          <p><b style="padding: 15px;
    padding-right: 53px;
">अर्जदाराची सही </b></p>
        </div> -->

        <hr>


        <!--row2-->

        <div class="row mb-1">
          <label for="inputEmail3" class="col-sm-4 col-form-label-sm"> १०.शिफारस करणाऱ्याचे नाव- श्री./श्रीम.</label>
          <div class="col-sm-4">
            <input type="text" class="form-control"  value="<?php echo $recommender_name; ?>" readonly id="inputEmail3">
          </div>
          <!-- <label for="inputEmail3" class="col-sm-1 col-form-label-sm">दि .</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" readonly id="inputEmail3">
          </div> -->
        </div>
        <div class="row mb-1">
          <label for="inputEmail3" class="col-sm-1 col-form-label-sm">मो.</label>
          <div class="col-sm-4">
            <input type="text" class="form-control"  value="<?php echo $recommender_mobile_no; ?>" readonly id="inputEmail3">
          </div>
          <label for="inputEmail3" class="col-sm-3 col-form-label-sm">सभासद क्र.</label>
          <div class="col-sm-4">
            <input type="text" class="form-control"  value="<?php echo $recommender_member_no; ?>" readonly id="inputEmail3">
          </div>
        </div>

        <!--row end-->

        <p>मी वरील अर्जदार यांना ओळखतो/ओळखते. ते मराठा/कुणबी/कुणबी मराठा आहेत. संस्थेच्या सभासद होण्यासाठी मी
          त्यांची शिफारस करतो/करते.</p>
        <!-- <div class="d-flex justify-content-end">
          <div class="col-sm-4"><input type="text" class="form-control"  value="<?php echo $name; ?>" readonly id="inputEmail3"></div>
        </div>
        <div class="d-flex justify-content-end">
          <p><b style="padding: 15px;
    padding-right: 53px;
">शिफारस करणाऱ्याची सही</b></p>
        </div> -->


        <hr>

        <!--row2-->
        <div class="row mb-1">
          <label for="inputEmail3" class="col-sm-5 col-form-label-sm">११. Mode Of Payment
            (Netbanking/GPay/PhonePay/PayTM):-</label>
          <div class="col-sm-7">
            <input type="text" class="form-control"  value="<?php echo $fees_type; ?>" readonly id="inputEmail3">
          </div>
        </div>
        <!--row end-->

        <!--row2-->

        <div class="row mb-1">
          <label for="inputEmail3" class="col-sm-3 col-form-label-sm">१२. Transaction ID :-</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  value="<?php echo $fees_transaction_id; ?>" readonly id="inputEmail3">
          </div>
          <label for="inputEmail3" class="col-sm-3 col-form-label-sm">१३. शुल्क भरल्याची दिनांक :-</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  value="<?php echo $fees_date; ?>" readonly id="inputEmail3">
          </div>
        </div>

        <!--row end-->
        <hr>



        <hr>


        <h5 class="text-center" style="color:orange;font-weight:600">जय जिजाऊ!! जय शिवराय!!</h5>
      </div>
    </div>
  </div>
</div>