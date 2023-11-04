$(document).ready(function () {
    $('#registratiionform').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../../register_ajax.php',
            data: $(this).serialize(),
            success: function (response) {
                var jsonData = JSON.parse(response);
            }
        });
    });
});