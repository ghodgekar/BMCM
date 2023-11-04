$(document).ready(function () {
    $("#registratiionform").validate({
        rules: {
            f_name: { required: true,minlength:5},
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
            password: { required: true }
        },
        messages: {
            f_name: {required:"Please Enter Valid First Name", minlength:"Please correct"},
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            city: "Please enter your city",
            gender: "This field is required"
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
                    $('#registratiionform').css("opacity", ".5");
                },
                success: function (response) {
                    $('#registratiionform').css("opacity", "1");
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
});