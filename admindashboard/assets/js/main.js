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

    $(".approveBtn").click(function () {
        var id = $(this).data("id");
        var status = $(this).data("status");
        $.ajax({
            type: 'POST',
            url: 'updatestatus_ajax.php',
            data: { 'id': id, 'status': status },
            beforeSend: function () {
                $('.submitBtn').attr("disabled", "disabled");
                $('.table').css("opacity", ".5");
            },
            success: function (response) {
                location.reload(true)
            }
        });
    })

    $(".rejectBtn").click(function () {
        var id = $(this).data("id");
        $("#id").val(id);
        $('#exampleModal3').modal('show');
    })

    $("#rejectionform").validate({
        rules: {
            reason: { required: true }
        },
        messages: {
            reason: { required: "Please Enter Valid Reason" }
        },
        onfocusout: function (element) {
            this.element(element);
        },
        submitHandler: function (form) {
            $.ajax({
                type: form.method,
                url: 'updatestatus_ajax.php',
                data: new FormData(form),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled", "disabled");
                    $('#rejectionform').css("opacity", ".5");
                },
                success: function (response) {
                    $('.submitBtn').removeAttr("disabled");
                    $('#rejectionform').css("opacity", "1");
                    if (response.status == 0) {
                        $(".msg").addClass("error-span");
                    } else {
                        window.location.href = 'rejected.php';
                        $('#rejectionform')[0].reset();
                        $(".msg").addClass("success-span");
                        $('#exampleModal3').modal('hide');
                    }
                    $('.msg').text(response.message);
                }
            });
        }
    });

    $(".viewBtn").click(function () {
        var id = $(this).data("id");
        $.ajax({
            type: 'POST',
            url: 'view_popup_content.php',
            data: { 'id': id },
            success: function (response) {
                $(".modal-body").html(response);
                $("#exampleModal").modal('show');
            }
        });
    })

    $(".documentBtn").click(function () {
        var id = $(this).data("id");
        $.ajax({
            type: 'POST',
            url: 'document_popup_content.php',
            data: { 'id': id },
            success: function (response) {
                $(".modal-body").html(response);
                $("#exampleModal1").modal('show');
            }
        });
    })

    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            'download',
            'thumbs',
            'close'
        ],
        loop: false,
        protect: true
    });

    $("#announcementform").validate({
        rules: {
            subject: { required: true },
            place: { required: true },
            time: { required: true }
        },
        messages: {
            subject: { required: "Please Enter Subject" },
            place: { required: "Please Enter Place" },
            date: { required: "Please Enter Date" },
            time: { required: "Please Enter time" }
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
                    $('#announcementform').css("opacity", ".5");
                },
                success: function (response) {
                    $('.submitBtn').removeAttr("disabled");
                    $('#announcementform').css("opacity", "1");
                    if (response.status == 0) {
                        $(".msg").addClass("error-span");
                        $(".msg").removeClass("success-span");
                    } else {
                        window.location.href = 'announcement.php';
                        $("#announcementform")[0].reset()
                        $(".msg").addClass("success-span");
                        $(".msg").removeClass("error-span");
                    }
                    $('.msg').text(response.message);
                }
            });
        }
    });

    $(".announcementBtn").click(function () {
        var id = $(this).data("id");
        var posttype = $(this).data("type");
        $("#id").val(id);
        $("#posttype").val(posttype);
        if (posttype == 'edit') {
            $(".announcementBtnTxt").text('Edit Event');
            $.ajax({
                type: 'POST',
                url: 'announcement_data_ajax.php',
                data: { 'id': id },
                success: function (response) {
                    var data = JSON.parse( response );
                    $("#date").val(data.data.date);
                    $("#time").val(data.data.time);
                    $("#place").val(data.data.place);
                    $("#subject").val(data.data.subject);
                }
            });
        }else{
            $(".announcementBtnTxt").text('Add Event');
            $("#date").val('');
            $("#time").val('');
            $("#place").val('');
            $("#subject").val('');
        }
        $('#exampleModal').modal('show');
    })
});