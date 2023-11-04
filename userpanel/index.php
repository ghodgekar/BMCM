<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>BMC</title>
</head>
<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container shadow-lg p-3 mb-5 bg-body rounded" style="background-color:rgb(230, 226, 221);padding:25px">
        <div class="container " style="background-color:rgb(226, 226, 226);padding:25px;">
            <div class="d-flex justify-content-between">
                <div class="p-2 bd-highlight" style="font-size:18px;font-weight:600"><span>User Name : xyz</span><br>
                    <span>User id: xyz</span>
                </div>
                <div class="p-2 bd-highlight" style="color: red;font-size: 21px;font-weight:600">Log Out</div>
            </div>
        </div>
        <section>
            <div class="container py-5 h-100" id="div-id-name">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <h3 class="mb-5 text-uppercase" style="color: #ff9a03; text-align:center">Edit Form</h3>
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-2  d-xl-block">
                                    <div class="hero">
                                        <div class="card card1">
                                            <img src="../image/profile.png" id="profile-pic">
                                            <label for="input-file" class="label1" style="text-align: center; padding: 5px; background-color: red;">Upload profile</label>
                                            <input type="file" accept="image/jpeg,image/png,image/jpg" id="input-file" style="display:none">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="card-body p-md-5 text-black">
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
                                                    <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="mobile_no" readonly />
                                                    <label class="form-label" for="form3Example1m1">Mobile No/दूरध्वनी क्रमांक:-</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n1" class="form-control form-control-lg" name="emp_id" readonly />
                                                    <label class="form-label" for="form3Example1n1">Employee ID/कममचारी संकेतांक</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="form3Example97" class="form-control form-control-lg" name="email" readonly />
                                                    <label class="form-label" for="form3Example97">Email ID/ई-मेल आयडी</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n1" class="form-control form-control-lg" name="blood_grup" />
                                                    <label class="form-label" for="form3Example1n1">Blood Group/रक्तगट</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example97" class="form-control form-control-lg" name="permanent_address" />
                                            <label class="form-label" for="form3Example97">Address/मूळ गावचा पत्ता</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example97" class="form-control form-control-lg" name="current_address" />
                                            <label class="form-label" for="form3Example97"> Current Address/सध्याचे वास्तव्याचा पत्ता</label>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="password" />
                                                    <label class="form-label" for="form3Example1m1">Create New Password</label>
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
                                        <div class="d-flex justify-content-center pt-3 ">

                                            <button type="button" class="btn btn-warning btn-lg ms-2">Update form</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            let profilePic = document.getElementById("profile-pic");
            let inputFile = document.getElementById("input-file");

            inputFile.onchange = function() {
                profilePic.src = URL.createObjectURL(inputFile.files[0]);
            }
        </script>
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MMSS.COM</a>
            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>