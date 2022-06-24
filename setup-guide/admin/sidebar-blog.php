<?php
if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];
    $data = dbAction('sidebar_setting', $operation = 3, $from_data = "", 'where id =' . $id . '');
    if ($data == true) {
        echo "<script>window.location.href='" . constant("BASE_URL") . constant("BASE_URL_ADMIN") . "index.php?page=sidebar-blog'</script>";
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cat_data = dbAction("sidebar_setting", $operation = 4, $form_data = "", "id=" . $id);
    if ($cat_data->num_rows > 0) {
        $cat_edit_row = $cat_data->fetch_assoc();
        $adsCode = $cat_edit_row['adsCode'];
        $showLatest = $cat_edit_row['showLatest'];
        $showPage = $cat_edit_row['showPage'];
        $ad_client_key = $cat_edit_row['ad_client_key'];
        $ad_slot_key = $cat_edit_row['ad_slot_key'];
        $mainAdsCode = $cat_edit_row['mainAdsCode'];
        $status = $cat_edit_row['status'];
        $btnContent = 'Update Sidebar';
        $btnName = 'submit_btn_ads_blog_update';
    }
} else {
    $adsCode = '';
    $showLatest = 0;
    $showPage = '';
    $id = '';
    $ad_client_key = '';
    $ad_slot_key = '';
    $mainAdsCode = '';
    $status = 1;
    $btnContent = 'Add Sidebar';
    $btnName = 'submit_btn_ads_blog';
}
?>
<style>
    .fileUpload span{
        cursor: pointer;
    }
    .fileUpload {
        background: #3c8dbc;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 5px;
        color: #fff;
        font-size: 1em;
        font-weight: bold;
        /*margin: 1.25em auto;*/
        overflow: hidden;
        padding: 0.5em;/*14px/16px*/
        position: relative;
        text-align: center;
        width: 110px;
        cursor: pointer;
    }
    .fileUpload:hover, .fileUpload:active, .fileUpload:focus {
        background: #00a2a4;
        cursor: pointer;
    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
        width: 148px;
        height: 46px;
        cursor: pointer;
    }

    input[type="file"] {
        position: fixed;
        right: 100%;
        bottom: 100%;
        cursor: pointer;
    }
    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
    .auto_check{
        float: right;
        width: 20px;
        height: 20px;
        margin: 0 !important;
    }
</style>
<script src="https://cdn.tiny.cloud/1/<?php echo tiny_code; ?>/tinymce/4/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "#adsCode",
        content_style: ".mce-content-body {font-size:12px;}",
        plugins: [
            "advlist lists link image imagetools charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste ",
            "spellchecker",
            "autoresize textcolor",
        ],
//        plugins: 'print preview fullpage powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap tinycomments mentions quickbars linkchecker emoticons',

        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        //                external_plugins: {"nanospell": "/nanospell/plugin.js"},
        //                nanospell_server: "php",
        browser_spellcheck: true,
        contextmenu: false,
        link_default_protocol: 'https',
        link_assume_external_targets: true,
//        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
        toolbar: "insertfile undo redo | styleselect | fontselect fontsizeselect formatselect forecolor | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | image | code | preview ",
        relative_urls: false,
        file_browser_callback: function (field_name, url, type, win) {
            tinymce.activeEditor.windowManager.open({
                title: "File Browser",
                url: 'ckeditor/myfilebrowser_blog.php',
                width: 1200,
                height: 540
            }, {
                oninsert: function (url) {
                    win.document.getElementById(field_name).value = url;
                    tinymce.activeEditor.windowManager.close();
                }
            });

        }
    });
</script>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Blog Sidebar Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Blog Sidebar</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <form method="post" id="data_form" action="services/post/sidebar.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <input type="hidden" name="url" value="sidebar-blog"/>
                <!-- right column -->
                <div class="col-md-9">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Any Details</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <!-- <label for="adsCode">Ads Code</label> -->
                                <textarea class="form-control" name="adsCode" id="adsCode" placeholder="Enter Ads Code Here.."><?php echo $adsCode; ?></textarea>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" style="width: 50%;">
                                    <option value="1" <?php
                                    if ($status == 1) {
                                        echo 'selected';
                                    }
                                    ?>>Active</option>
                                    <option value="0" <?php
                                    if ($status == 0) {
                                        echo 'selected';
                                    }
                                    ?>>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="submit_btn" name="<?php echo $btnName; ?>" type="submit" class="btn btn-primary"><?php echo $btnContent; ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Latest Post</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Show Latest Post</label>
                                <select name="showLatest" class="form-control">
                                    <option value="1" <?php
                                    if ($showLatest == 1) {
                                        echo 'selected';
                                    }
                                    ?>>Yes</option>
                                    <option value="0" <?php
                                    if ($showLatest == 0) {
                                        echo 'selected';
                                    }
                                    ?>>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Google Ads Code</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <textarea rows="6" name="mainAdsCode" class="form-control" type="text" placeholder="Ads Code" ><?php echo $mainAdsCode; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box box-info" style=" display: none;">
                        <div class="box-header with-border">
                            <h3 class="box-title">Google Ads Key</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <input name="ad_client_key" class="form-control" type="text" value="<?php echo $ad_client_key; ?>" placeholder="ad-client-key"/>
                            </div>
                            <div class="form-group">
                                <input name="ad_slot_key" class="form-control" type="text" value="<?php echo $ad_slot_key; ?>" placeholder="ad-slot-key"/>
                            </div>
                        </div>
                    </div>

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Select Page</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <select name="showPage" class=" form-control">
                                    <option value="5" <?php
                                    if ($showPage == 5) {
                                        echo 'selected';
                                    }
                                    ?>>Blogs</option>
                                    <option value="6" <?php
                                    if ($showPage == 6) {
                                        echo 'selected';
                                    }
                                    ?>>Blog Details</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-md-12">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/post/delete_multiple.php">
                         <input type="hidden" name="url" value="sidebar-blog"/>
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Post Sidebar</h3>
                        </div>
                        <div class="box-body">
                            <table style="width: 100%;" id="example1" class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 40px">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="selectall" class="selectall custom-control-input">
                                                <label class="custom-control-label" for="selectall"></label>
                                            </div>
                                        </th>
                                        <th>Page Name</th>
<!--                                        <th>Ad Client Key</th>
                                        <th>Ad Slot Key</th>-->
                                        <th>Show Latest Post</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
                                    $data = dbAction('sidebar_setting', $operation = 4, $from_data = "", ' where status IN (0,1) AND showPage IN(5,6) order by date desc');
                                    if ($data->num_rows > 0) {
                                        foreach ($data as $row) {
                                            if ($row['showPage'] == 5) {
                                                $page = 'Blogs';
                                            } elseif ($row['showPage'] == 6) {
                                                $page = 'Blog Details';
                                            }

                                            if ($row['status'] == 1) {
                                                $status = '<span class="label label-success">Active</span>';
                                            } else {
                                                $status = '<span class="label label-danger">Disable</span>';
                                            }

                                            if ($row['showLatest'] == 1) {
                                                $showLatest = '<span class="label label-success">Yes</span>';
                                            } else {
                                                $showLatest = '<span class="label label-danger">No</span>';
                                            }
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="custom-checkbox custom-control" style=" display: inline-block">
                                                        <input type="checkbox" name="check[]" id="<?php echo $row['id']; ?>" class="row_check custom-control-input" value="<?php echo $row['id']; ?>">
                                                        <label class="custom-control-label" for="<?php echo $row['id']; ?>"></label>
                                                    </div>
                                                </td>
                                                <td><?php echo $page; ?></td>
        <!--                                                <td><?php // echo $row['ad_client_key'];  ?></td>
                                                <td><?php // echo $row['ad_slot_key'];  ?></td>-->
                                                <td><?php echo $showLatest; ?></td>
                                                <td><?php echo $status; ?></td>
                                                <td>
                                                    <a class="action_btn btn-primary btn" href="index.php?page=sidebar-blog&id=<?php echo $row['id']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                                    <a class="action_btn deleteAction btn-danger btn" id="<?php echo $row['id']; ?>"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            <input type="checkbox" id="selectall" class="selectall custom-control-input">
                            <label class="custom-control-label label label-primary" for="selectall" style="cursor: pointer;">Check All</label>
                            <button type="submit" name="delete_multiple_sidebar" id="submit_btn_multiple_delete" class="btn btn-sm btn-danger btn-flat">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>