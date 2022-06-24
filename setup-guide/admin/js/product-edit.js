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

//FAQs added multiples
$(".add_details").click(function () {
    //the below code will append a new user_data div inside user-details container
    $(".user-details").append('<div class="user_data"><div class="col-md-6 form-group"><div class="col-md-12 form-group"> <label class="control-label">FAQs Title</label> <input class="form-control" type="text" name="faq_title[]" placeholder="FAQs Title" > </div><div class="col-md-12 position-relative form-group"> <label class="control-label">FAQs Description</label> <textarea class="form-control" name="faq_des[]" placeholder="FAQs Description"></textarea> </div><div class="col-md-3 form-group"><button class="btn remove-btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">Remove FAQs <i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div></div>');
});

$("body").on("click", ".remove-btn", function (e) {
    $(this).parents('.user_data').remove();
    //the above method will remove the user_data div
});


//FAQs issue resolve

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