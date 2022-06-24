//Start Ajax submit form bulk 
$('#sb_csv').click(function () {
    var options = {
        beforeSend: function () {
            $('#sb_csv').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                $('#sb_csv').html('Start Bulk Import');
                alert(json.msg);
                $('#result').html('<b>Result : <span class="label label-success">Inserted - ' + json.insert + '</span> <span class="label label-danger">Duplicate - ' + json.duplicate + '</span></b>');
//            location.reload();
                $("#sb_csv_form").trigger("reset");
            } else {
                $('#sb_csv').html('Start Bulk Import');
                $('#loaderOverlay').css('display', 'none');
                alert(json.msg);
                $('#result').html('<b>Result : <span class="label label-success">Inserted - ' + json.insert + '</span> <span class="label label-danger">Duplicate - ' + json.duplicate + '</span></b>');
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#sb_csv_form').ajaxForm(options);
});
//End 


