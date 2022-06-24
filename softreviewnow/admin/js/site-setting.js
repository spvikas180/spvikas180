//Start Ajax submit form update site settings
$('#submit_btn_site_setting').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_site_setting').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                var alert_box = "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><i class='icon fa fa-check'></i> " + json.msg + "</div>";
                $('#alert_box').html(alert_box);
                $('#submit_btn_site_setting').html('Update Site Settings');
            } else {
                $('#submit_btn_site_setting').html('Update Site Settings');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form_site_setting').ajaxForm(options);
});
//End 

//logo and favicon icon upload
$('#logo_site').on('change', function ()
{
    $("#data_form_logo").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

$('#favicon_site').on('change', function ()
{
    $("#data_form_favicon").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

// Home banner images upload
$('#home_banner').on('change', function ()
{
    $("#data_form_banner").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

// Home page Title upload
$('#submit_btn_home_title').on('click', function ()
{
    $("#data_form_home_title").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});


// Head code here update
$('#submit_btn_head_code').on('click', function ()
{
    $("#data_form_head_code").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});


//Check box status changes
$(document).ready(function () {
    $('.auto_check').change(function () {
        var checkId = $(this).attr("id");
        if (this.checked) {
            var status = 1;
        } else {
            var status = 0;
        }
        $.ajax({
            type: "POST",
            data: 'status=' + status + '&checkId=' + checkId,
            url: 'services/setting/set_logo.php',
            success: function (response) {
                var json = $.parseJSON(response);
                if (json.status === 'success') {
                    alert(json.msg);
                    location.reload();
                } else {
                    alert(json.msg);
                    location.reload();
                }
            }
        });
    });
});

// sitemap upload
$('#submit_btn_site_map').on('click', function ()
{
    $("#data_form_site_map").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

// header color change
$('#submit_btn_h_color').on('click', function ()
{
    $("#data_form_h_color").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

// footer color change
$('#submit_btn_f_color').on('click', function ()
{
    $("#data_form_f_color").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});



