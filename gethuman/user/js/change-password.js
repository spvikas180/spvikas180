//Start Ajax submit form change password
$('#submit_btn').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn').html('Loading <i class="fa fa-spinner fa-spin"></i>');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                 window.location.href = "index.php?page=" + json.page_url;
            } else {
                $('#submit_btn').html('Change Password');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form').ajaxForm(options);
});
//End 