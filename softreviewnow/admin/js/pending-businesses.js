$(document).ready(function () {
    $('#example_list').DataTable({
        'ajax': {
            'url': 'services/listing/get_listing_ajax.php'
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
            {data: 'address'},
            {data: 'date'},
            {data: 'action'},
        ]
    });
});

// delete pending business 
$(document).on('click', '.deleteAction', function () {
    var deleteId = $(this).attr("id");
//    alert(deleteId);
    if (confirm('Are you sure you want to delete this?')) {
        $.ajax({
            type: "POST",
            data: 'deleteId=' + deleteId,
            url: 'services/listing/delete_multiple.php',
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


// Aprove pending business 
$(document).on('click', '.approve_btn', function () {
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        data: "status=approve" + "&id=" + id,
        url: 'services/listing/status_change_listing.php',
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

// Multiple approve pending business
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
