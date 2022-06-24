$('#review_submit').click(function () {
    var rating = $('input[name=rating]:checked').val();
    var review = $('#review').val();
    var subject = $('#subject').val();
    if ($('.rating').is(':checked')) {
    } else {
        $('#error_rating').html("Please Select Your Rating");
        return false;
    }
    if (subject == '') {
        $('#error_rating').html("Please write your Subject");
        $('#subject').focus();
        return false;
    }
    if (review == '') {
        $('#error_rating').html("Please write your review");
        $('#review').focus();
        return false;
    }

    var options = {
        beforeSend: function () {},
        success: function (response) {
//            console.log(response);
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                alert(json.msg);
                location.reload();
            } else {
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#rating_form').ajaxForm(options);
});

//login ajax
$('#login').click(function () {
    var options = {
        beforeSend: function () {
        },
        success: function (response) {
            console.log(response);
            var json = $.parseJSON(response);
            if (json.status == 'success') {
                location.reload();
            } else {
                alert(json.msg);
            }
        },
        error: function (response) {
            $('#error').html(response);
        }
    };
    $('#login_form').ajaxForm(options);
});

$(document).on('click', '.reply', function (e) {
    var reviewId = $(this).attr('id');
    $('#previewId').val(reviewId);
     $('#subject').focus();
//    alert(previewId);
});
