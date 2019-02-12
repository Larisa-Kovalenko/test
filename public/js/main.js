$(function() {
    $("#datepicker" ).datepicker();
});

$(document).ready(function(){
    $('form').submit(function (e) {
        var url = $(this).attr('action');
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            contentType: false,
            processData: false,
            data:formData,
            cache: false,
            success: function (data) {
                console.log(data===1);
                if(data == 1) {
                    alert('User has been registered successfully!');
                } else {
                    alert('Not all data has been sent!');
                }
            },
            statusCode: {
                400: function (err) {
                    console.log(err);
                    alert('Invalid parameters');
                }
            }
        });
        e.preventDefault();
        return false;
    });

});