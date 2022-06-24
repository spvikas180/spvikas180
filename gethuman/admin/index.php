<?php
include_once"control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
$id = $_SESSION['adminId'];
$data_user = dbAction('users', 4, "", "id  = $id");
if ($data_user->num_rows > 0) {
    $user_row = $data_user->fetch_assoc();
    $name = $user_row['name'];
    $email = $user_row['email'];
    if ($user_row['pic'] == '') {
        $pic = 'upload/profile-pic/user.png';
    } else {
        $pic = $user_row['pic'];
    }
}
$countries_data = dbAction("countries", $operation = 4, $form_data = "");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo brand_title; ?> | Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php include 'header.php'; ?>
            <?php include 'navbar.php'; ?>
            <?php
            $key = @$_GET['page'];
            switch ($key) {
                case "blank":
                    include 'blank.php';
                    break;
                case "category":
                    include 'category.php';
                    break;
                case "site-setting":
                    include 'site-setting.php';
                    break;
                case "social-setting":
                    include 'social-setting.php';
                    break;
                case "pending-businesses":
                    include 'pending-businesses.php';
                    break;
                case "approve-businesses":
                    include 'approve-businesses.php';
                    break;
                case "feature-businesses":
                    include 'feature-businesses.php';
                    break;
                case "edit-businesses":
                    include 'edit-businesses.php';
                    break;
                case "add-businesses":
                    include 'add-businesses.php';
                    break;
                case "active-review":
                    include 'active-review.php';
                    break;
                case "pending-review":
                    include 'pending-review.php';
                    break;
                case "active-user":
                    include 'active-user.php';
                    break;
                case "pending-user":
                    include 'pending-user.php';
                    break;
                case "post-category":
                    include 'post-category.php';
                    break;
                case "add-post":
                    include 'add-post.php';
                    break;
                case "all-post":
                    include 'all-post.php';
                    break;
                case "tags":
                    include 'tags.php';
                    break;
                case "author":
                    include 'author.php';
                    break;
                case "admin-user":
                    include 'admin-user.php';
                    break;
                case "add-user":
                    include 'add-user.php';
                    break;
                case "sidebar-blog":
                    include 'sidebar-blog.php';
                    break;
                case "change-password":
                    include 'change-password.php';
                    break;
                case "sidebar-business":
                    include 'sidebar-business.php';
                    break;
                case "all-info":
                    include 'all-info.php';
                    break;
                case "mail-shoot":
                    include 'mail-shoot.php';
                    break;
                case "bulk-import":
                    include 'bulk-import.php';
                    break;
                case "add-page":
                    include 'add-page.php';
                    break;
                case "all-page":
                    include 'all-page.php';
                    break;
                default:
                    include 'dashboard.php';
            }
            ?>
            <?php include 'footer.php'; ?>
            <?php echo '<script src="js/' . $key . '.js"></script>'; ?>
            <script>
                //Colorpicker
                $('.my-colorpicker1').colorpicker()
                //color picker with addon
                $('.my-colorpicker2').colorpicker()

                //Start Menu Active and disactive function
                $(function () {
                    var url = window.location;
                    $('ul.treeview-menu a').filter(function () {
                        return this.href == url;
                    }).parent().addClass('active');

                    setInterval(function () {
                        $('li .treeview-menu .active').parents('.sidebar-menu li').addClass('active');
                    }, 30);

                    $('.sidebar-menu li a').filter(function () {
                        return this.href == url;
                    }).parent().addClass('active');

                });
                //End

                $(function () {
                    $('#example1').DataTable({
                        'paging': true,
                        'lengthChange': true,
                        'searching': true,
                        'ordering': true,
                        'info': true,
                        'autoWidth': false
                    })
                });

                //Start Ajax submit form data common
                $('#submit_btn').click(function () {
                    var options = {
                        beforeSend: function () {
                            $('#submit_btn').html('Loading <i class="fa fa-spinner fa-spin"></i>');
                        },
                        success: function (response) {
                            var json = $.parseJSON(response);
                            if (json.status == 'success') {
                                alert(json.msg);
                                window.location.href = "index.php?page=" + json.page_url;
                            } else {
                                $('#submit_btn').html('Add')
                                alert(json.msg);
                            }
                        },
                        error: function (response) {
                            $('#error').html(response);
                        }
                    };
                    $('#data_form').ajaxForm(options);
                });
                //End 


                //Start Ajax submit form data common
                $('#submit_mail_shoot').click(function () {
                    var options = {
                        beforeSend: function () {
//                            $('#submit_mail_shoot').html('Loading <i class="fa fa-spinner fa-spin"></i>');
                        },
                        success: function (response) {
                            var json = $.parseJSON(response);
                            if (json.status == 'success') {
                                alert(json.msg);
                            } else {
//                                $('#submit_mail_shoot').html('Send Mail')
                                alert(json.msg);
                            }
                        },
                        error: function (response) {
                            $('#error').html(response);
                        }
                    };
                    $('#data_form_mail_shoot').ajaxForm(options);
                });
                //End 

                //mail shoot ajax
                function searchImg() {
                    $('#searchImg').keyup(function () {
                        var keyImg = $(this).val();
                        $.ajax({
                            type: "POST",
                            data: 'keyImg=' + keyImg,
                            url: 'services/post/img.php',
                            success: function (response) {
                                $('#imgdata').html(response);
                            }
                        });
                    });
                }
                searchImg();


            </script>
            <script src="js/delete_multiple.js"></script>
            <div class="control-sidebar-bg"></div>
            <?php if ($key == 'add-post') { ?>
                <script src="components/jquery-ui.min.js" type="text/javascript"></script>
                <script src="components/tagit/js/tag-it.js" type="text/javascript" charset="utf-8"></script>
                <script src="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"></script>
                <script>
                    $(document).ready(function () {
                        $(".multiselect-native-select .btn-group button").addClass('form-control');
                        $('#singleFieldTags2').tagit({
                            tagSource: function (request, response) {
                                var term = request.term; // This will hold the text you typed in autocomplete
                                $.get('services/post/get_tags_post.php?str=' + term, function (data) {
                                    var d = $.parseJSON(data);
                                    response(d.msg);
                                });
                            }
                        });
                        function readURLblogimg(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('#logoPic').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        $("#blogImage").change(function () {
                            readURLblogimg(this);
                            $('#submit_btn_category_post').click(function () {
                                var options = {
                                    beforeSend: function () {
                                        $('#submit_btn_category_post').html('Loading <i class="fa fa-spinner fa-spin"></i>');
                                    },
                                    success: function (response) {
                                        var json = $.parseJSON(response);
                                        if (json.status == 'success') {
                                            alert(json.msg);
                                            $('#submit_btn_category_post').html('Submit');
                                            loadCategoryPost();
                                            $('#dismiss').click();
                                            $("#postCatModal").hide();
                                        } else {
                                            $('#submit_btn_category_post').html('Submit');
                                            alert(json.msg);
                                        }
                                    },
                                    error: function (response) {
                                        $('#error').html(response);
                                    }
                                };
                                $('#data_form_category').ajaxForm(options);
                            });
                        });
                    });

                    $('#submit_btn_category_post').click(function () {
                        var options = {
                            beforeSend: function () {
                                $('#submit_btn_category_post').html('Loading <i class="fa fa-spinner fa-spin"></i>');
                            },
                            success: function (response) {
                                var json = $.parseJSON(response);
                                if (json.status == 'success') {
                                    alert(json.msg);
                                    $('#submit_btn_category_post').html('Submit');
                                    loadCategoryPost();
                                    $('#dismiss').click();
                                    $("#postCatModal").hide();
                                } else {
                                    $('#submit_btn_category_post').html('Submit');
                                    alert(json.msg);
                                }
                            },
                            error: function (response) {
                                $('#error').html(response);
                            }
                        };
                        $('#data_form_category').ajaxForm(options);
                    });

                    function loadCategoryPost() {
                        $.ajax({
                            type: "POST",
                            data: 'postCat=postCat',
                            url: 'services/post/get_post_cat.php',
                            success: function (response) {
                                // console.log(response);
                                var json = $.parseJSON(response);
                                var data = '';
                                var dataList = '';
                                for (var i = 0; i < json.length; i++) {
                                    data = data + '<option value="' + json[i].catId + '">' + json[i].catName + '</option>';
                                    dataList = dataList + '<li><a tabindex="0"><label class="checkbox" title="' + json[i].catName + '"><input type="checkbox" value="' + json[i].catId + '"> ' + json[i].catName + '</label></a></li>';
                                }
                                $("#blogcatId").html(data);
                                $(".multiselect-container").html(dataList);
                            }
                        });
                    }

                    setTimeout(function () {
                        $.ajax({
                            type: "POST",
                            data: '',
                            url: 'services/post/img.php',
                            success: function (response) {
                                $('#imgdata').html(response);
                            }
                        });
                    }, 1000);


                    $('#modelBtn').on('click', function (e) {
                        $.ajax({
                            type: "POST",
                            data: '',
                            url: 'services/post/img.php',
                            success: function (response) {
                                $('#imgdata').html(response);
                            }
                        });
                    });

                    $('.form-search .btn').on('click', function (e) {
                        //alert('asd');
                        var query = $('#searchQuery').val();
                        //            $('div.myImage .imageName').each(function () {
                        //                var $this = $(this);
                        //                if ($this.text().toLowerCase().indexOf(query) === -1)
                        //                    $this.closest('div.myImage').fadeOut();
                        //                else $this.closest('div.myImage').fadeIn();
                        //            });

                        $.ajax({
                            type: "POST",
                            data: 'query=' + query,
                            url: 'services/post/img.php',
                            success: function (response) {
                                $('#imgdata').html(response);
                            }
                        });
                    });


                    $(document).on('click', '.img-check', function (e) {
                        $('.img-check').not(this).removeClass('check')
                                .siblings('input').prop('checked', false);
                        $(this).addClass('check')
                                .siblings('input').prop('checked', true);
                    });
                    $(document).on('click', '.clearData', function (e) {
                        $('#blogimage1').val('');
                        return false;
                    });
                    $(document).on('click', '#choose_file', function () {

                        var path = $("input[name='chk1']:checked").val();
                        $('#blogimage1').val(path);
                        $('#dismissImage').click();
                        return false;

                    });

                    // tag delete time of update post
                    $(document).on('click', '.deleteTag', function () {
                        var mappingId = $(this).attr('id');
                        if (confirm("Are you sure you want to delete this?")) {
                            $.ajax({
                                type: "POST",
                                data: 'mappingId=' + mappingId,
                                url: 'services/post/delete_tag_map.php',
                                success: function (response) {
                                    var json = $.parseJSON(response);
                                    if (json.status === 'success') {
                                        //                        location.reload();
                                        loadTagEditPost();
                                    } else {
                                        alert(json.msg);
                                    }
                                }
                            });
                        }
                    });

                    function loadTagEditPost() {
                        $.ajax({
                            type: "POST",
                            data: 'blogId=<?php echo $id; ?>',
                            url: 'services/post/get_post_tag_edit.php',
                            success: function (response) {
                                // console.log(response);
                                var json = $.parseJSON(response);
                                var data = '';

                                for (var i = 0; i < json.length; i++) {
                                    data = data + '<span class="crDiv">' + json[i].tagTitle + '<i id="' + json[i].mappingId + '" class="fa fa-close deleteTag" aria-hidden="true"></i></span> ';
                                    ;
                                }
                                $("#TagData").html(data);
                            }
                        });
                    }

                </script>
            <?php }
            ?>
        </div>
    </body>
</html>
