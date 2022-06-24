
// delete category 
$(document).on('click', '.deleteAction', function () {
    var deleteId = $(this).attr("id");
//    alert(deleteId);
    if (confirm('Are you sure you want to delete this?')) {
        window.location.href = "index.php?page=all-post&d_id=" + deleteId;
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

