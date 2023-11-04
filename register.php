<?php include 'header.php'; ?>
<div class="container-fluid" style="background-color:#ffc107;; height:220px">
</div>
<section>
  <div class="container py-5 h-100" id="div-id-name">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <form id="registratiionform" action="register_ajax.php" enctype="multipart/form-data" method="post">
            <div class="row g-0">
              <div class="col-xl-2  d-xl-block">
                <div class="hero">
                  <div class="card card1">
                    <img src="image/profile.png" id="profile-pic">
                    <div class="text-center image">
                      <button type="button" class="upload-button btn btn-primary">Upload Profile</button>
                      <input type="file" name="profile-img" accept="image/jpeg,image/png,image/jpg" id="input-file" style="display:none">
                    </div>
                    <br>
                  </div>
                </div>
              </div>
              <div class="col-xl-9">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-2 text-uppercase" style="color: #ff9a03;"> Registration form</h3>
                  <p class="msg mb-4"></p>
                  <p style="text-align:justify">मी बृहन्मुंबई महानगरपालिकेत कार्यरत /सेवानिवृत्त कर्मचारी आहे. मराठा
                    मंडळ
                    सामाजिक संस्थेचे उद्देश, कार्य आणि नियम यांची
                    संपूर्ण माहिती मला आहे व ते मला मान्य आहे. सर्व नियमांचे तंतोतंत पालन मी करेन. संस्थेचा आजीवन/
                    वार्षिक
                    सभासद होण्याची माझी इच्छा
                    आहे व त्यासाठी असणारे आजीवन सभासद शुल्क/वार्षिक सभासद शुल्क भरण्यास मी तयार आहे.</p>
                  <p><b>(आजीवन सभासद शुल्क- रुपये १००१/-, वार्षिक सभासद शुल्क- रुपये २०१/-, प्रवेश फी- रुपये ५१/-)</b>
                  </p>
                  <p><b>शुल्क भरल्याचा तपशील :-</b></p>

                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example97" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example97">Cheque/Netbanking/GPay/PhonePay/PayTM <span
                        style="font-size:12px">(Netbanking ने भरले असल्यास बँकेचे नाव द्यावे)</span>
                    </label>

                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m1">Transaction ID</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n1">शुल्क भरल्याची दिनांक</label>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <p><b>माझी वैयक्तिक माक्तिती खालील प्रमाणे:-</b></p>
                  <div class="row">
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="f_name" />
                        <label class="form-label" for="form3Example1m">First name/नाव</label>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="m_name" />
                        <label class="form-label" for="form3Example1n">Middel name/वडिलांचे नाव</label>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="l_name" />
                        <label class="form-label" for="form3Example1n">Last name/आडनाव</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="position" />
                        <label class="form-label" for="form3Example1m">Position/पद/हुद्दा</label>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="division" />
                        <label class="form-label" for="form3Example1n">Division/विभाग</label>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="department" />
                        <label class="form-label" for="form3Example1n">Department/खाते</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="mobile_no" />
                        <label class="form-label" for="form3Example1m1">Mobile No/दूरध्वनी क्रमांक:-</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg" name="emp_id" />
                        <label class="form-label" for="form3Example1n1">Employee ID/कममचारी संकेतांक</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example97" class="form-control form-control-lg" name="email" />
                        <label class="form-label" for="form3Example97">Email ID/ई-मेल आयडी</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg"
                          name="blood_grup" />
                        <label class="form-label" for="form3Example1n1">Blood Group/रक्तगट</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example97" class="form-control form-control-lg"
                      name="permanent_address" />
                    <label class="form-label" for="form3Example97">Address/मूळ गावचा पत्ता</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example97" class="form-control form-control-lg"
                      name="current_address" />
                    <label class="form-label" for="form3Example97"> Current Address/सध्याचे वास्तव्याचा पत्ता</label>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="password" />
                        <label class="form-label" for="form3Example1m1">Create Password</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n1">Confirm Password</label>
                      </div>
                    </div>

                    <p>संस्थेचा सभासद म्हणून मला स्वीकारावे, हि विनंती.</p>
                  </div>

                  <hr>


                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p>Attachment(सोबत):-</p>
                        <ul>
                          <li>बृहन्मुंबई महानगरपालिकेचे ओळखपत्र </li><br><br>
                          <li>मराठा/कुणबी/कुणबी मराठा असल्याचे कागदपत्र </li>
                          <p>(उदा - शाळा सोडल्याचा दाखला, Caste Certificate, SEBC Certificate, इत्यादी)</p><br>
                          <li>शुल्क भरल्याची छायांकित प्रत</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <br>
                        <label for="files">Select files:</label>
                        <input type="file" id="files" name="files" multiple><br><br><br>

                      </div>
                      <div class="form-outline">
                        <label for="files">Select files:</label>
                        <input type="file" id="files" name="files" multiple><br><br><br><br>
                      </div>
                      <div class="form-outline">
                        <label for="files">Select files:</label>
                        <input type="file" id="files" name="files" multiple><br><br>
                      </div>
                    </div>
                  </div>


                  <!--sign-->

                  <!-- <div class="d-flex justify-content-end pt-3">

                  <div class="card">

                    <img src="image/sign.jpg" id="sign-pic" style="width: 200px;
                         height:60px;
                          margin-top: 40px;
                          margin-bottom: 30px;
                      ">
                    <label for="input-files" class="label1">signature</label>
                    <input type="file" accept="image/jpeg,image/png,image/jpg" id="input-files" style="display:none">
                  </div>


                </div> -->
                  <!--sign end-->

                  <hr>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg"
                          name="recommender_name" />
                        <label class="form-label" for="form3Example1m1">Name of Recommender/शिफारस करणाऱ्याचे
                          नाव:-</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg"
                          name="recommender_mobile_no" />
                        <label class="form-label" for="form3Example1n1"> Mobile No/मोबाईल नंबर</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="date" id="form3Example1n1" class="form-control form-control-lg"
                          name="recommendation_date" />
                        <label class="form-label" for="form3Example1n1"> Date/</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg"
                          name="recommender_member_no" />
                        <label class="form-label" for="form3Example1n1"> Member No/सभासद क्र.</label>
                      </div>
                    </div>

                    <p>मी वरील अर्जदार यांना ओळखतो/ओळखते . ते मराठा/कुणबी/कुणबी मराठा आहेत. संस्थेच्या सभासद होण्यासाठी
                      मी
                      त्यांची शिफारस करतो/करते. </p>


                  <!--sign-->
                  <!-- 

                  <div class="d-flex justify-content-end pt-3">
                    <div class="card">

                      <img src="image/sign.jpg" id="sign-m" style="width: 200px;
                        height:100px;
                          margin-top: 40px;
                          margin-bottom: 30px;
                      ">
                      <label for="input-sign"> शिफारस करणाऱ्याची सही</label>
                      <input type="file" accept="image/jpeg,image/png,image/jpg" id="input-sign" style="display:none">
                    </div>
                  </div> -->

                  <!--sign end-->





                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <div class="form-outline">
                        <p><b>Bank Details (बँकेचे तपिील):- </b></p>
                        <ul>
                          <li>ACC. Name - MARATHA MANDAL SAMAJIK SANSTHA, </li>
                          <li>BANK- THE MUNICIPAL CO-OP BANK LTD, MUMBAI, </li>
                          <li>BRANCH - G/NORTH, </li>
                          <li>ACC NO - 301000017098401, </li>
                          <li>IFSC CODE - MUBL0000022</li>
                        </ul>
                      </div>
                    </div>
                  </div>


                  <hr>
                  <div class="row">
                    <div class="col-md-12 mb-6">
                      <div class="form-outline">
                        <p><b>टीप :- </b></p>
                        <ul>
                          <li>अर्जदार मराठा/ कुणबी/ कुणबी मराठा असावा. </li>
                          <li>नोंदणी शुल्क बँक चेक किंवा ऑनलाईन पद्दतीने भरण्यात यावे. </li>
                          <li> अर्ज अपूर्ण असल्यास तो नाकारण्यात येईल </li>
                          <li>कार्यकारी मंडळाच्या मान्यतेनंतर सभासदत्व घेण्यात येईल</li>
                          <li> अर्ज स्वीकारण्याचे/ नाकारण्याचे संपूर्ण अधिकार संस्थेचे आहेत. </li>
                          <li>आजीवन सभासद शुल्क भरले असल्यास परत भरू नये. </li>
                          <li> संपर्क क्र. ७७१८९१०७३७, ई मेल आयडी: marathamandalsamajiksanstha@gmail.com. </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" class="btn btn-light btn-lg">Reset all</button>
                    <button type="submit" class="btn btn-warning btn-lg ms-2 submitBtn">Submit form</button>
                  </div>


                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

</body>

</html>