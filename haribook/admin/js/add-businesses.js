
//Start Ajax submit form users data updated
$('#submit_btn_add_business').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_add_business').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                location.reload();
            } else {
                $('#submit_btn_add_business').html('Add Business');
                $('#loaderOverlay').css('display', 'none');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form_add_business').ajaxForm(options);
});
//End 

// Edit business
//$('#submit_btn_add_business').on('click', function ()
//{
//    $("#data_form_add_business").ajaxForm({
//        dataType: 'json',
//        success: function (json) {
//            alert(json.msg);
////            location.reload();
//        }
//    }).submit();
//});



