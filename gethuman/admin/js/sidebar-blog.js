
//Check box status changes
$(document).ready(function () {
    $('.auto_check').change(function () {
        var checkId = $(this).attr("id");
        if (this.checked) {
            var status = 1;
        } else {
            var status = 0;
        }
        $.ajax({
            type: "POST",
            data: 'showLatest=' + status + '&typeSilde=0',
            url: 'services/post/sidebar.php',
            success: function (response) {
                var json = $.parseJSON(response);
                if (json.status === 'success') {
                    alert(json.msg);
                    location.reload();
                } else {
                    alert(json.msg);
                    location.reload();
                }
            }
        });
    });
});

$(document).on('click', '.deleteAction', function () {
    var deleteId = $(this).attr("id");
//    alert(deleteId);
    if (confirm('Are you sure you want to delete this?')) {
        window.location.href = "index.php?page=sidebar-blog&d_id=" + deleteId;
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




