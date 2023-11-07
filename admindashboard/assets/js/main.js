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
                    $('.submitBtn').removeAttr("disabled");
                    $('#loginform').css("opacity", "1");
                    if (response.status == 0) {
                        $(".msg").addClass("error-span");
                    } else {
                        window.location.href = response.url;
                        $(".msg").addClass("success-span");
                    }
                    $('.msg').text(response.message);
                }
            });
        }
    });

    $("#approveBtn").click(function(){
        var id = $(this).data("id") ;
        var status = $(this).data("status") ;
        $.ajax({
            type: 'POST',
            url: 'updatestatus_ajax.php',
            data: {'id': id, 'status':status},
            beforeSend: function () {
                $('.submitBtn').attr("disabled", "disabled");
                $('.table').css("opacity", ".5");
            },
            success: function (response) {
                location.reload(true)
            }
        });
    })
});