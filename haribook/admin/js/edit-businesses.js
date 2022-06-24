// Edit business
$('#submit_btn_update_business').on('click', function ()
{
    $("#data_form_update_business").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

// Edit custom button
$('#submit_btn_update_button').on('click', function ()
{
    $("#data_form_update_button").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

//get sub category
$('#catId').on('change', function () {
    var id = $(this).val();
    $.ajax({
        type: "POST",
        data: 'id=' + id,
        url: 'services/category/get_subcat.php',
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


