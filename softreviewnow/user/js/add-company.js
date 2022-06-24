//Start Ajax submit form add business data updated
$('#submit_btn_update_business').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_update_business').html('Loading <i class="fa fa-spinner fa-spin"></i>');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                location.reload();
            } else {
                $('#submit_btn_update_business').html('Add Business');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form_update_business').ajaxForm(options);
});
//End 

//get sub category
$('#catId').on('change', function () {
    var id = $(this).val();
    $.ajax({
        type: "POST",
        data: 'id=' + id,
        url: '../webservices/get_subcat.php',
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