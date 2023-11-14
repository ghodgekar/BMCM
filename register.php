<?php include 'header.php'; ?>
<section>
  <div class="container py-5 h-100" id="div-id-name">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <form id="registratiionform" enctype="multipart/form-data" method="post">
            <div class="row g-0">
              <div class="col-xl-2  d-xl-block">
                <div class="hero">
                  <div class="card card1">
                    <img src="image/profile.png" id="profile-pic">
                    <div class="text-center image">
                      <button type="button" class="upload-button btn btn-primary">Upload Profile</button>
                      <input type="file" name="upload_file[]" accept="image/jpeg,image/png,image/jpg" id="input-file" style="display:none">
                    </div>
                    <br>
                  </div>
                </div>
              </div>
              <div class="col-xl-9">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-2 text-uppercase" style="color:#f44336;;"> Registration form</h3>
                  <p class="msg mb-4"></p>
                  <p style="text-align:justify">मी बृहन्मुंबई महानगरपालिकेत कार्यरत /सेवानिवृत्त कर्मचारी आहे. मराठा
                    मंडळ
                    सामाजिक संस्थेचे उद्देश, कार्य आणि नियम यांची
                    संपूर्ण माहिती मला आहे व ते मला मान्य आहे. सर्व नियमांचे तंतोतंत पालन मी करेन. संस्थेचा आजीवन/
                    वार्षिक
                    सभासद होण्याची माझी इच्छा
                    आहे व त्यासाठी असणारे आजीवन सभासद शुल्क/वार्षिक सभासद शुल्क भरण्यास मी तयार आहे.</p>
                  
                  <p><b>माझी वैयक्तिक माक्तिती खालील प्रमाणे:-</b></p>
                  <div class="row">
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="f_name" placeholder="First name/नाव " style="font-size:15px" />
                        <!-- <label class="form-label" for="form3Example1m">First name/नाव</label> -->
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="m_name"  placeholder="Middel name/वडिलांचे नाव " style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1n">Middel name/वडिलांचे नाव</label> -->
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="l_name"  placeholder="Last name/आडनाव " style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1n">Last name/आडनाव</label> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="position" placeholder="Position/पद/हुद्दा "  style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1m">Position/पद/हुद्दा</label> -->
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="division"  placeholder="Division/विभाग " style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1n">Division/विभाग</label> -->
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="department" placeholder="Department/खाते " style="font-size:15px" />
                        <!-- <label class="form-label" for="form3Example1n">Department/खाते</label> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="mobile_no"placeholder="Mobile No/दूरध्वनी क्रमांक"  style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1m1">Mobile No/दूरध्वनी क्रमांक:-</label> -->
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg" name="emp_id" placeholder="Employee ID/कममचारी संकेतांक"  style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1n1">Employee ID/कममचारी संकेतांक</label> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example97" class="form-control form-control-lg" name="email" placeholder="Email ID/ई-मेल आयडी" style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example97">Email ID/ई-मेल आयडी</label> -->
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg"
                          name="blood_grup" placeholder="Blood Group/रक्तगट " style="font-size:15px" />
                        <!-- <label class="form-label" for="form3Example1n1">Blood Group/रक्तगट</label> -->
                      </div>
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example97" class="form-control form-control-lg"
                      name="permanent_address" placeholder="Address/मूळ गावचा पत्ता"  style="font-size:15px"/>
                    <!-- <label class="form-label" for="form3Example97">Address/मूळ गावचा पत्ता</label> -->
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example97" class="form-control form-control-lg"
                      name="current_address"  placeholder="Current Address/सध्याचे वास्तव्याचा पत्ता"  style="font-size:15px"/>
                    <!-- <label class="form-label" for="form3Example97"> Current Address/सध्याचे वास्तव्याचा पत्ता</label> -->
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="password" placeholder=" Create Password" style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1m1">Create Password</label> -->
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg"name="password_confirm" placeholder="Confirm Password" style="font-size:15px" />
                        <!-- <label class="form-label" for="form3Example1n1">Confirm Password</label> -->
                      </div>
                    </div>

                    <p>संस्थेचा सभासद म्हणून मला स्वीकारावे, हि विनंती.</p>
                  </div>

                  <hr>


                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p><b>Attachment(सोबत):-</b></p>
                          <p><b>1) बृहन्मुंबई महानगरपालिकेचे ओळखपत्र </b></p>   
                      </div>
                        </div>
                      <div class="col-md-6 mb-4">
                      <div class="form-outline">
                      
                        <label for="files">Select files:</label>
                        <input type="file" id="files" name="upload_file[]">
                      </div>
                    </div>
                    </div> <!--row1-->
                    <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                          <p><b>2) मराठा/कुणबी/कुणबी मराठा असल्याचे कागदपत्र </b></p>
                          <p>(उदा - शाळा सोडल्याचा दाखला, Caste Certificate, SEBC Certificate, इत्यादी)</p>
                      </div>
                        </div> <!--col1-->
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                     
                        <label for="files">Select files:</label>
                        <input type="file" id="files" name="upload_file[]">
                      </div>
                      <!-- <div class="form-outline">
                        <label for="files">Select files:</label>
                        <input type="file" id="files" name="upload_file[]"><br><br><br><br>
                      </div> -->

                    </div>
                  </div>


                 
                  <hr>

                  <div class="row">
                    <div class="col-md-12 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg"
                          name="recommender_name" placeholder="Name of Recommender/शिफारस करणाऱ्याचे नाव"  style="font-size:15px"/>
                        
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg"
                          name="recommender_mobile_no"  placeholder=" Mobile No/मोबाईल नंबर" style="font-size:15px"/>
                        
                      </div>
                    </div>
                   
                    
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg"
                          name="recommender_member_no" placeholder="Member No/सभासद क्र." style="font-size:15px" />
                        
                      </div>
                    </div>

                    <!-- <p>मी वरील अर्जदार यांना ओळखतो/ओळखते . ते मराठा/कुणबी/कुणबी मराठा आहेत. संस्थेच्या सभासद होण्यासाठी
                      मी
                      त्यांची शिफारस करतो/करते. </p> -->


                  

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


                  <p><b>(आजीवन सभासद शुल्क- रुपये १००१/-, वार्षिक सभासद शुल्क- रुपये २०१/-, प्रवेश फी- रुपये ५१/-)</b>
                  </p>
                  <p><b>शुल्क भरल्याचा तपशील :-</b></p>

                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example97" class="form-control form-control-lg" placeholder="Cheque/Netbanking/GPay/PhonePay/PayTM" name="fees_type" style="font-size:15px"/>
                    <label class="form-label" for="form3Example97"> <span
                        style="font-size:12px">(Mode Of Payment)</span>
                    </label>

                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg"  placeholder="Transaction ID" name="fees_transaction_id" style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1m1">Transaction ID</label> -->
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg" placeholder="शुल्क भरल्याची दिनांक" name="fees_date" style="font-size:15px"/>
                        <!-- <label class="form-label" for="form3Example1n1">शुल्क भरल्याची दिनांक</label> -->
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  
                    <div class="col-md-6 mb-4">
                    <p><b>Attachment(सोबत):-</b></p>
                      <div class="form-outline">
                      
                      <p><b>Payment slip/Cheque Photo</b></p>
                      </div>
                        </div> <!--col1-->
                    
                    <div class="col-md-6 mb-4">
                      
                    <div class="form-outline">
                     
                        <label for="files">Select file</label>
                        <input type="file" id="files" name="upload_file[]">
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
                    <button type="submit" class="btn btn-warning btn-lg ms-2 submitBtn" style="background-color: #f44336;">Submit form</button>
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