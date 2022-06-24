//Start Ajax submit form users data updated
$('#submit_btn_user').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_user').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                location.reload();
            } else {
                $('#submit_btn_user').html('Add User');
                $('#loaderOverlay').css('display', 'none');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form_user').ajaxForm(options);
});
//End 