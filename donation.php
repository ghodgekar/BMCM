<?php $activePage = "donation"; include 'header.php'; ?>

<section class="vh-100 bg-image">

    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                          <p class="msg"></p>
                            <h2 class="text-uppercase text-center mb-5">DONATION INFORMATION</h2>
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
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>

</body>

</html>
