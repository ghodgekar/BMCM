$(document).ready(function () {
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
                    window.location.href = response.url;
                }
            });
        }
    });
});