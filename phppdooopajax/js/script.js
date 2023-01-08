$(document).ready(function () {


    $('#form').submit(function (event) {
        event.preventDefault(); // prevent the form from submitting
        var username = $('#username').val();
        $.ajax({
            type: 'POST',
            url: 'insert.php',
            data: { username: username },
            success: function (response) {
                $('#message').html(response);
            },
            error: function (error) {
                $('#message').html(error.responseText);
            }
        });
    });
});
