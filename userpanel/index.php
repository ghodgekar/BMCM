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
$f_name = $row['f_name'];
$m_name = $row['m_name'];
$l_name = $row['l_name'];
$position = $row['position'];
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
    <title>BMC</title>
    <style>
        .success-span {
            background: green;
            padding: 5px 15px;
            color: #fff;
            margin-top: 15PX;
        }

        .error-span {
            background: red;
            padding: 5px 15px;
            color: #fff;
            margin-top: 15PX;
        }
    </style>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <div class="container shadow-lg p-3 mb-5 bg-body rounded" style="background-color:rgb(230, 226, 221);padding:25px">
        <div class="container " style="background-color:rgb(226, 226, 226);padding:25px;">
            <div class="d-flex justify-content-between">
                <div class="p-2 bd-highlight" style="font-size:18px;font-weight:600"><span>User Name :
                        <?php echo $_SESSION['member_username']; ?>
                    </span><br>
                    <span>User id:
                        <?php echo $_SESSION['member_id']; ?>
                    </span>
                </div>
                <div class="p-2 bd-highlight" style="color: red;font-size: 21px;font-weight:600"><a class="btn btn-danger" href="../logout.php">Logout</a></button></div>
            </div>
        </div>
        <section>
            <div class="container py-5 h-100" id="div-id-name">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <h3 class="mb-5 text-uppercase" style="color: #ff9a03; text-align:center">Edit Form</h3>
                        <span class="msg"></span>
                        <form id="registratiionUpdateform" enctype="multipart/form-data" method="post">
                            <div class="card card-registration my-4">
                                <div class="row g-0">
                                    <div class="col-xl-2  d-xl-block">
                                        <div class="hero">
                                            <div class="card card1">
                                                <img src="../uploads/<?php echo $reg_no; ?>/0_<?php echo $reg_no; ?>.jpg"
                                                    id="profile-pic">
                                                <!-- <label for="input-file" class="label1"
                                                    style="text-align: center; padding: 5px; background-color: red;">Upload
                                                    profile</label>
                                                <input type="file" name="upload_file[]"
                                                    accept="image/jpeg,image/png,image/jpg" id="input-file"
                                                    style="display:none"> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="card-body p-md-5 text-black">
                                            <p><b>माझी वैयक्तिक माक्तिती खालील प्रमाणे:-</b></p>
                                            <div class="row">
                                                <div class="col-md-4 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1m"
                                                            class="form-control form-control-lg" name="f_name"
                                                            value="<?php echo $f_name; ?>" />
                                                        <label class="form-label" for="form3Example1m">First
                                                            name/नाव</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1n"
                                                            class="form-control form-control-lg" name="m_name"
                                                            value="<?php echo $m_name; ?>" />
                                                        <label class="form-label" for="form3Example1n">Middel
                                                            name/वडिलांचे नाव</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1n"
                                                            class="form-control form-control-lg" name="l_name"
                                                            value="<?php echo $l_name; ?>" />
                                                        <label class="form-label" for="form3Example1n">Last
                                                            name/आडनाव</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1m"
                                                            class="form-control form-control-lg" name="position"
                                                            value="<?php echo $position; ?>" />
                                                        <label class="form-label"
                                                            for="form3Example1m">Position/पद/हुद्दा</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1n"
                                                            class="form-control form-control-lg" name="division"
                                                            value="<?php echo $division; ?>" />
                                                        <label class="form-label"
                                                            for="form3Example1n">Division/विभाग</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1n"
                                                            class="form-control form-control-lg" name="department"
                                                            value="<?php echo $department; ?>" />
                                                        <label class="form-label"
                                                            for="form3Example1n">Department/खाते</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1m1"
                                                            class="form-control form-control-lg" name="mobile_no"
                                                            readonly value="<?php echo $mobile_no; ?>" />
                                                        <label class="form-label" for="form3Example1m1">Mobile
                                                            No/दूरध्वनी क्रमांक:-</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1n1"
                                                            class="form-control form-control-lg" name="emp_id" readonly
                                                            value="<?php echo $emp_id; ?>" />
                                                        <label class="form-label" for="form3Example1n1">Employee
                                                            ID/कममचारी संकेतांक</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline mb-4">
                                                        <input type="text" id="form3Example97"
                                                            class="form-control form-control-lg" name="email" readonly
                                                            value="<?php echo $email; ?>" />
                                                        <label class="form-label" for="form3Example97">Email ID/ई-मेल
                                                            आयडी</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1n1"
                                                            class="form-control form-control-lg" name="blood_grup"
                                                            value="<?php echo $blood_grup; ?>" />
                                                        <label class="form-label" for="form3Example1n1">Blood
                                                            Group/रक्तगट</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example97"
                                                    class="form-control form-control-lg" name="permanent_address"
                                                    value="<?php echo $permanent_address; ?>" />
                                                <label class="form-label" for="form3Example97">Address/मूळ गावचा
                                                    पत्ता</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example97"
                                                    class="form-control form-control-lg" name="current_address"
                                                    value="<?php echo $current_address; ?>" />
                                                <input type="hidden" id="id" name="id" value="<?php echo $id;?>" />
                                                <input type="hidden" id="reg_no" name="reg_no"
                                                    value="<?php echo $reg_no; ?>" />
                                                <label class="form-label" for="form3Example97"> Current Address/सध्याचे
                                                    वास्तव्याचा पत्ता</label>
                                            </div>

                                            <hr>
                                            <div class="d-flex justify-content-center pt-3 ">

                                                <button type="submit" class="btn btn-warning btn-lg ms-2">Update
                                                    form</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script>
            let profilePic = document.getElementById("profile-pic");
            let inputFile = document.getElementById("input-file");

            inputFile.onchange = function () {
                profilePic.src = URL.createObjectURL(inputFile.files[0]);
            }
        </script>
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">marathamandal.com</a>
            </div>
            <!-- Copyright -->
        </footer>

        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>
        <script>
            $(document).ready(function () {
                $("#registratiionUpdateform").validate({
                    rules: {
                        f_name: { required: true },
                        m_name: { required: true },
                        l_name: { required: true },
                        position: { required: true },
                        division: { required: true },
                        department: { required: true },
                        emp_id: { required: true },
                        mobile_no: { required: true },
                        email: { required: true },
                        permanent_address: { required: true },
                        current_address: { required: true },
                        upload_file: { required: true }
                    },
                    messages: {
                        f_name: { required: "Please Enter Valid First Name" },
                        password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long",

                        },
                        password_confirm: {
                            equalTo: "password Does Not match",
                        },
                        mobile_no: { minlength: "mobile only 10 digit" }

                    },

                    onfocusout: function (element) {
                        this.element(element);
                    },
                    submitHandler: function (form) {
                        $.ajax({
                            type: form.method,
                            url: './update_ajax.php',
                            data: new FormData(form),
                            dataType: 'json',
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function () {
                                $('.submitBtn').attr("disabled", "disabled");
                                $('#registratiionUpdateform').css("opacity", ".5");
                            },
                            success: function (response) {
                                $('#registratiionUpdateform').css("opacity", "1");
                                if (response.status == 0) {
                                    $(".msg").addClass("error-span");
                                } else {
                                    $(".msg").addClass("success-span");
                                }
                                $('.msg').text(response.message);
                            }
                        });
                    }
                });

            });
        </script>

</body>

</html>