//Check all check box 
$('.selectall').click(function () {
    $('.row_check').not(this).prop('checked', this.checked);
});

//Start Ajax submit form data common
$('#submit_btn_multiple_delete').click(function () {
    if (confirm('Are you sure you want to delete this?')) {
        var options = {
            beforeSend: function () {
//                $('#submit_btn_multiple_delete').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            },
            success: function (response) {
                var json = $.parseJSON(response);
                if (json.status == 'success') {
                    alert(json.msg);
                      window.location.href = "index.php?page=" + json.page_url;
//                    location.reload();
                } else {
//                    $('#submit_btn_multiple_delete').html('Delete')
                    alert(json.msg);
                }
            },
            error: function (response) {
                $('#error').html(response);
            }
        };
    }
    $('#data_form_delete').ajaxForm(options);
});
//End 

//get business all details in modal popup
$(document).on('click', '.despModel', function () {
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        data: 'id=' + id,
        url: 'services/listing/get_modal_desc.php',
        success: function (response) {
            // console.log(response);
            var json = $.parseJSON(response);
            var data = '';
            for (var i = 0; i < json.length; i++) {
                data = data + '<div class="box box-success"><div class="box-header with-border">\n\
                                <h3 class="box-title">' + json[i].companyName + '</h3></div><div class="box-body">\n\
                                <div class="form-control"><span class="fa fa-link"></span> <a href="' + json[i].website + '" target="_blank">Website</a></div><br>\n\
                                <div class="form-control"><span class="fa fa-chevron-circle-right"></span> Category : <a>' + json[i].catName + '</a></div><br>\n\
                                <div class="form-control"><span class="fa fa-map-marker"></span> ' + json[i].address + '</div><br>\n\
                                <div class="form-control"><span class="fa fa-user"></span> User Name : ' + json[i].name + '</div><br>\n\
                                <div class="form-control"><span class="fa fa-envelope"></span> User Email : ' + json[i].uemail + '</div><br>\n\
                                <div class="form-control"><span class="fa fa-calendar-o"></span> ' + json[i].formatted_date + '</div>';
            }
            $("#modelDesp").html(data);
            $('#addcustom').modal('show');
        }
    });
});
// End