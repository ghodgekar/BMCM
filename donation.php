<?php $activePage = "donation"; include 'header.php'; ?>

<section class="vh-100 bg-image">

    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 shadow-sm p-3 mb-5 bg-body rounded">
                <div class="col-7 col-md-8 col-lg-8 col-xl-6">
                    <div class="card">
                        <div class="card-body p-5">
                          <p class="msg"></p>
                            <h2 class="text-uppercase text-center mb-5" style="font-size: 25px;
    color: navy;">DONATION INFORMATION</h2>
                            <form id="donationform" action="donation_ajax.php" enctype="multipart/form-data" method="post">
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="donar_name"/>
                                    <label class="form-label" for="form3Example1cg">Full Name</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="donar_mobile" minlength="10" maxlength="10"/>
                                    <label class="form-label" for="form3Example3cg"> Mobile Number </label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form3Example4cg" class="form-control form-control-lg" name="donar_amt" />
                                    <label class="form-label" for="form3Example4cg">Donation Amount</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Examplew4cg">Upload Receipts</label>
                                    <input type="file" id="myFile" name="upload_file[]">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">DONATE
                                        NOW</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                <p><b>Bank Details (बँकेचे तपिील):- </b></p>
                        <ul style="font-size:17px">
                          <li>ACC. Name - MARATHA MANDAL SAMAJIK SANSTHA, </li>
                          <li>BANK- THE MUNICIPAL CO-OP BANK LTD, MUMBAI, </li>
                          <li>BRANCH - G/NORTH, </li>
                          <li>ACC NO - 301000017098401, </li>
                          <li>IFSC CODE - MUBL0000022</li>
                        </ul>
                        <img src="./image/qrcode.jpg" class="img-fluid shadow p-3 mb-5 bg-body rounded" alt="...">
</div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>

</body>

</html>
