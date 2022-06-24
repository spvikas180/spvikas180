$(document).ready(function () {
    $('#example_list').DataTable({
        'ajax': {
            'url': 'services/review/get_approve_review_ajax.php'
        },

//            "bLengthChange": false,
//            "bFilter": false,
//            "bInfo": true,
//            "bAutoWidth": false,
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'columns': [
            {data: 'sr'},
//                {data: 'userId'},
            {data: 'companyName'},
            {data: 'email'},
            {data: 'review'},
            {data: 'rating'},
            {data: 'date'},
            {data: 'action'},
        ]
    });
});

//Start Ajax submit form reviews data updated
$('#submit_btn_reviewUpdate').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_reviewUpdate').html('Loading <i class="fa fa-spinner fa-spin"></i>');
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
    $('#data_form_review').ajaxForm(options);
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
            url: 'services/review/delete_multiple.php',
            success: function (response) {
                var json = $.parseJSON(response);
                if (json.status === 'success') {
                    window.location.href = "index.php?page=" + json.page_url;
                } else {
                    alert(json.msg);
                }
            }
        });
    }
});

// Multiple approve reviews
$('#submit_btn_multiple_disapprove').on('click', function ()
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
$(document).on('click', '.disapprove_btn', function () {
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        data: "status=disapprove" + "&id=" + id,
        url: 'services/review/status_change_review.php',
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