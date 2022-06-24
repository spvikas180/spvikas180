
//Start Ajax submit form users data updated
$('#submit_btn_add_business').click(function () {
    var options = {
        beforeSend: function () {
            $('#submit_btn_add_business').html('Loading <i class="fa fa-spinner fa-spin"></i>');
            $('#loaderOverlay').css('display', 'block');
        },
        success: function (response) {
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                location.reload();
            } else {
                $('#submit_btn_add_business').html('Add Product');
                $('#loaderOverlay').css('display', 'none');
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#data_form_add_business').ajaxForm(options);
});
//End 

// Edit business
//$('#submit_btn_add_business').on('click', function ()
//{
//    $("#data_form_add_business").ajaxForm({
//        dataType: 'json',
//        success: function (json) {
//            alert(json.msg);
////            location.reload();
//        }
//    }).submit();
//});



//FAQs added multiples
$(".add_details").click(function () {
    //the below code will append a new user_data div inside user-details container
    $(".user-details").append('<div class="user_data"><div class="col-md-6 form-group"><div class="col-md-12 form-group"> <label class="control-label">FAQs Title</label> <input class="form-control" type="text" name="faq_title[]" placeholder="FAQs Title" > </div><div class="col-md-12 position-relative form-group"> <label class="control-label">FAQs Description</label> <textarea class="form-control" name="faq_des[]" placeholder="FAQs Description"></textarea> </div><div class="col-md-3 form-group"><button class="btn remove-btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">Remove FAQs <i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div></div>');
});

$("body").on("click", ".remove-btn", function (e) {
    $(this).parents('.user_data').remove();
    //the above method will remove the user_data div
});

//issue resolve added multiples
$(".add_details_resolve").click(function () {
    //the below code will append a new user_data div inside user-details container
    $(".user-details-resolve").append('<div class="user_data_resolve"><div class="col-md-6 form-group"><div class="col-md-12 position-relative form-group"> <label class="control-label">Title</label> <textarea class="form-control" name="title[]" placeholder="title"></textarea> </div><div class="col-md-12 position-relative form-group"> <label class="control-label">Issue Status</label> <input type="text" class="form-control" name="issueStatus[]" placeholder="Status" value="RESOLVE" required> </div><div class="col-md-3 form-group"><button class="btn remove-btn-resolve btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">Remove <i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div></div>');
});

$("body").on("click", ".remove-btn-resolve", function (e) {
    $(this).parents('.user_data_resolve').remove();
    //the above method will remove the user_data div
});

//qua and ans added multiples
$(".add_details_qua_ans").click(function () {
    //the below code will append a new user_data div inside user-details container
    $(".user-details-qua-ans").append('<div class="user_data_qua_ans"><div class="col-md-6 form-group"><div class="col-md-12 form-group"> <label class="control-label">Quation</label> <input class="form-control" type="text" name="quation[]" placeholder="quation" > </div><div class="col-md-12 position-relative form-group"> <label class="control-label">Answer</label> <textarea class="form-control" name="answer[]" placeholder="Answer"></textarea> </div><div class="col-md-3 form-group"><button class="btn remove-btn-qua-ans btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">Remove <i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div></div>');
});

$("body").on("click", ".remove-btn-qua-ans", function (e) {
    $(this).parents('.user_data_qua_ans').remove();
    //the above method will remove the user_data div
});