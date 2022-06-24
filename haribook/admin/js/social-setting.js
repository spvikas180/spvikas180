// Socail links update
$('#submit_btn_social_setting').on('click', function ()
{
    $("#data_form_social_setting").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});



