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


//Start Ajax submit form data sub category
$('#submit_btn_subcategory').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_subcategory').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                window.location.href = "index.php?page=" + json.page_url;
            } else {
                $('#submit_btn_subcategory').html('Add');
                $('#loaderOverlay').css('display', 'none');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form_subcategory').ajaxForm(options);
});
//End 

//Start Ajax submit form data sub category
$('#submit_btn_catUpdate').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_catUpdate').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                window.location.href = "index.php?page=" + json.page_url;
            } else {
                $('#submit_btn_catUpdate').html('Add');
                $('#loaderOverlay').css('display', 'none');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form_catUpdate').ajaxForm(options);
});
//End 

// delete category 
$(document).on('click', '.deleteAction', function () {
    var deleteId = $(this).attr("id");
//    alert(deleteId);
    if (confirm('Are you sure you want to delete this?')) {
        $.ajax({
            type: "POST",
            data: 'deleteId=' + deleteId,
            url: 'services/industry/delete_industry.php',
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





