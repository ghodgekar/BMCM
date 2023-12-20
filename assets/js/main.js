$(document).ready(function () 
{
    $("#registratiionform").validate({
        rules: {
            f_name: { required: true},
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
            recommender_name: { required: true },
            recommender_mobile_no: { required: true },
            recommender_member_no: { required: true },
            recommendation_date: { required: true },
            mobile_no: {minlength:10, maxlength:10},
            password: {
                required: true,
                minlength: 5
            },
            password_confirm: {
                required: true,
                minlength: 5,
                equalTo: '[name="password"]'
            },
            upload_file: { required: true }
        },
        messages: {
            f_name: {required:"Please Enter Valid First Name"},
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                
            },
            password_confirm:{
                equalTo:"password Does Not match",
            },
            mobile_no:{minlength:"mobile only 10 digit"}
            
        },

        onfocusout: function(element) {
            this.element(element);
        },
        submitHandler: function (form) {
            $.ajax({
                type: form.method,
                url: './register_ajax.php',
                data: new FormData(form),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled", "disabled");
                    $('#registratiionform').css("opacity", ".5");
                },
                success: function (response) {
                    $('#registratiionform').css("opacity", "1");
                    if (response.status == 0) {
                        $(".msg").addClass("error-span");
                        $(".msg").removeClass("success-span");
                    } else {
                        $(".msg").removeClass("error-span");
                        $(".msg").addClass("success-span");
                    }
                    $('.msg').text(response.message);
                    $("#registratiionform")[0].reset();
                }
            });
        }
    });

    $(".upload-button").on('click', function () {
        $("#input-file").click();
    });

    $("#input-file").change(function () {
        var file = this.files[0];
        var fileType = file.type;
        var match = ['image/jpeg', 'image/png', 'image/jpg'];
        if (!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]))) {
            alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
            $("#input-file").val('');
            return false;
        }
        var reader = new FileReader();
        reader.onload = function () {
            var img = document.getElementById("profile-pic");
            img.src = reader.result;
        };
        reader.readAsDataURL(file);
    });

    //login form
    $("#loginform").validate({
        rules: {
            email: { required: true },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            email: { required: "Please Enter Valid Email" },
            mobile_no: { minlength: "mobile only 10 digit" }

        },
        onfocusout: function (element) {
            this.element(element);
        },
        submitHandler: function (form) {
            $.ajax({
                type: form.method,
                url: form.action,
                data: new FormData(form),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled", "disabled");
                    $('#loginform').css("opacity", ".5");
                },
                success: function (response) {
                    $('.submitBtn').removeAttr("disabled");
                    $('#loginform').css("opacity", "1");
                    if (response.status == 0) {
                        $(".msg").addClass("error-span");
                    } else {
                        $(".msg").addClass("success-span");
                        window.location.href = response.url;
                    }
                    $('.msg').text(response.message);
                }
            });
        }
    });


    //forgotpassword form
    $("#forgotpwdform").validate({
        rules: {
            email: { required: true },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            email: { required: "Please Enter Valid Email" },
            mobile_no: { minlength: "mobile only 10 digit" }

        },
        onfocusout: function (element) {
            this.element(element);
        },
        submitHandler: function (form) {
            $.ajax({
                type: form.method,
                url: form.action,
                data: new FormData(form),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled", "disabled");
                    $('#forgotpwdform').css("opacity", ".5");
                },
                success: function (response) {
                    $('.submitBtn').removeAttr("disabled");
                    $('#forgotpwdform').css("opacity", "1");
                    if (response.status == 0) {
                        $(".msg").addClass("error-span");
                    } else {
                        $(".msg").addClass("success-span");
                        window.location.href = response.url;
                    }
                    $('.msg').text(response.message);
                }
            });
        }
    });

    //donation
    $("#donationform").validate({
        rules: {
            donar_name: { required: true},
            donar_mobile: { required: true },
            donar_amt: { required: true },
            upload_file: { required: true }
        },
        messages: {
            donar_name: {required:"Please Enter Valid Name"},
            donar_mobile: {required:"Please Enter Valid Mobile Number"},
            donar_amt: {required:"Please Enter Valid Amnt"},
            upload_file: {required:"Please Upload file"}
        },

        onfocusout: function(element) {
            this.element(element);
        },
        submitHandler: function (form) {
            $.ajax({
                type: form.method,
                url: form.action,
                data: new FormData(form),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled", "disabled");
                    $('#donationform').css("opacity", ".5");
                },
                success: function (response) {
                    $('#donationform').css("opacity", "1");
                    if (response.status == 0) {
                        $(".msg").addClass("error-span");
                    } else {
                        $(".msg").addClass("success-span");
                    }
                    $('.msg').text(response.message);
                    $("#donationform")[0].reset()``
                }
            });
        }
    });

    //contact us
    $("#contact_form2").validate({
        rules: {
            name: { required: true},
            email: { required: true },
            mobile: { required: true },
            msg: { required: true }
        },
        messages: {
            name: {required:"Please Enter Valid Name"},
            mobile: {required:"Please Enter Valid Mobile Number"},
            email: {required:"Please Enter Valid Email"},
            msg: {required:"Please Enter Description"}
        },

        onfocusout: function(element) {
            this.element(element);
        },
        submitHandler: function (form) {
            $.ajax({
                type: form.method,
                url: form.action,
                data: new FormData(form),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled", "disabled");
                    $('#contact_form2').css("opacity", ".5");
                },
                success: function (response) {
                    $('#contact_form2').css("opacity", "1");
                    if (response.status == 0) {
                        $(".msg").addClass("error-span");
                    } else {
                        $(".msg").addClass("success-span");
                    }
                    $('.msg').text(response.message);
                    $("#contact_form2")[0].reset();
                }
            });
        }
    });
});