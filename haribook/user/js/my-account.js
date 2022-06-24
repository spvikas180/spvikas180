//Start Ajax submit form users data updated
$('#submit_btn_userUpdate').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_userUpdate').html('Loading <i class="fa fa-spinner fa-spin"></i>');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                location.reload();
            } else {
                $('#submit_btn_userUpdate').html('Update Profile');
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