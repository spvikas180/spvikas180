//Start Ajax submit form data category
$('#submit_btn_category').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_category').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                window.location.href = "index.php?page=" + json.page_url;
            } else {
                $('#submit_btn_category').html('Add');
                $('#loaderOverlay').css('display', 'none');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form_category').ajaxForm(options);
});
//End 


// delete category 
$(document).on('click', '.deleteAction', function () {
    var deleteId = $(this).attr("id");
//    alert(deleteId);
    if (confirm('Are you sure you want to delete this?')) {
        window.location.href = "index.php?page=tags&d_id=" + deleteId;
//        $.ajax({
//            type: "POST",
//            data: 'deleteId=' + deleteId,
//            url: 'services/post/delete_category.php',
//            success: function (response) {
//                var json = $.parseJSON(response);
//                if (json.status === 'success') {
//                    window.location.href = "index.php?page=" + json.page_url;
//                } else {
//                    alert(json.msg);
//                }
//            }
//        });
    }
});

