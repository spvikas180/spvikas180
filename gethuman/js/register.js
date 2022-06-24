$('#reg_pass').click(function () {
    var options = {
        beforeSend: function () {
        },
        success: function (response) {
//            console.log(response);
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                window.location.href = json.url;
            } else {
                alert(json.msg);
//                location.reload();
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#reg_form').ajaxForm(options);
});

//login ajax
$('#login').click(function () {
    var options = {
        beforeSend: function () {
        },
        success: function (response) {
            console.log(response);
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                window.location.href = json.url;
            } else {
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#login_form').ajaxForm(options);
});

//Ajax of with activation link
$('#reg_email').click(function () {
    var options = {
        beforeSend: function () {
            $('#reg_email').html('Loading <i class="fa fa-spinner fa-spin"></i>');
        },
        success: function (response) {
//            console.log(response);
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                window.location.href = json.url;
//                location.reload();
            } else {
                $('#reg_email').html('Submit');
                alert(json.msg);
//                location.reload();
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#reg_form').ajaxForm(options);
});

//Ajax of with confirm Account
$('#conf_account').click(function () {
    var options = {
        beforeSend: function () {
        },
        success: function (response) {
//            console.log(response);
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
//                location.reload();
                window.location.href = json.url;
            } else {
                alert(json.msg);
//                location.reload();
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#conf_account_form').ajaxForm(options);
});


//get sub category
$('#catId').on('change', function () {
    var id = $(this).val();
    $.ajax({
        type: "POST",
        data: 'id=' + id,
        url: 'webservices/get_subcat.php',
        success: function (response) {
            var json = $.parseJSON(response);
            var data = '<option value="0">None</option>';
            if (json.length > 0) {
                for (var i = 0; i < json.length; i++) {
                    data = data + '<option value="' + json[i].id + '"> ' + json[i].catName + ' </option>'
                }
                $("#subCatId").html(data);
            } else {
                var data = '<option value="0">None</option>';
                $("#subCatId").html(data);
            }
        }
    });
});