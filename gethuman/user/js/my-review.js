
var modal = document.getElementById("editModel");
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
}
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//get business all details in modal popup
$(document).on('click', '.editReview', function () {
    var id = $(this).attr('id');

    $.ajax({
        type: "POST",
        data: 'id=' + id,
        url: '../webservices/get_review.php',
        success: function (response) {
            // console.log(response);
            var json = $.parseJSON(response);
            var data = '';
            for (var i = 0; i < json.length; i++) {
                $("#reviewId").val(json[i].reviewId);
                $("#rating").val(json[i].rating);
                $("#review").text(json[i].review);
                $("#subject").val(json[i].subject);
                $("#compRev").text(json[i].companyName);
            }

            $('#editModel').css('display', 'block');
        }
    });
});
// End

// update reviews by users
$('#submit_btn_reviewUpdate').on('click', function ()
{
    $("#data_form_review").ajaxForm({
        dataType: 'json',
        success: function (json) {
            alert(json.msg);
            location.reload();
        }
    }).submit();
});

// delete review 
$(document).on('click', '.deleteReview', function () {
    var deleteId = $(this).attr("id");
//    alert(deleteId);
    if (confirm('Are you sure you want to delete this?')) {
        $.ajax({
            type: "POST",
            data: 'deleteId=' + deleteId,
            url: '../webservices/set_review.php',
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