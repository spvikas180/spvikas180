$(document).ready(function () {
    $('#example_list').DataTable({
        'ajax': {
            'url': 'services/user/get_pending_user_ajax.php'
        },

//            "bLengthChange": false,
//            "bFilter": false,
//            "bInfo": true,
//            "bAutoWidth": false,
        responsive: true,
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'columns': [
            {data: 'sr'},
            {data: 'pic'},
            {data: 'name'},
            {data: 'email'},
            {data: 'date'},
            {data: 'action'},
        ]
    });
});

//Start Ajax submit form users data updated
$('#submit_btn_userUpdate').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_userUpdate').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                location.reload();
            } else {
                $('#submit_btn_reviewUpdate').html('Update Review');
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

// delete pending business 
$(document).on('click', '.deleteAction', function () {
    var deleteId = $(this).attr("id");
//    alert(deleteId);
    if (confirm('Are you sure you want to delete this?')) {
        $.ajax({
            type: "POST",
            data: 'deleteId=' + deleteId,
            url: 'services/user/delete_multiple.php',
            success: function (response) {
                var json = $.parseJSON(response);
                if (json.status === 'success') {
                   location.reload();
                } else {
                    alert(json.msg);
                }
            }
        });
    }
});

// Multiple approve users
$('#submit_btn_multiple_approve').on('click', function ()
{
    $("#data_form_delete").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

// DisAprove  Review 
$(document).on('click', '.approve_btn', function () {
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        data: "status=approve" + "&id=" + id,
        url: 'services/user/status_change_user.php',
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status === 'success') {
                alert(json.msg);
                location.reload();
            } else {
                alert(json.msg);
            }
        }
    });
});