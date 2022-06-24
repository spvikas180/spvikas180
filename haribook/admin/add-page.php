<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $page_data = dbAction("pages", $operation = 4, $form_data = "", "id=" . $id);
    if ($page_data->num_rows > 0) {
        $page_edit_row = $page_data->fetch_assoc();
        $id = $page_edit_row['id'];
        $status = $page_edit_row['status'];
        $pageName = $page_edit_row['pageName'];
        $number = $page_edit_row['number'];
        $pageSlug = $page_edit_row['pageSlug'];
        $pageDesc = $page_edit_row['pageDesc'];
        $metaTitle = $page_edit_row['metaTitle'];
        $metaKey = $page_edit_row['metaKey'];
        $metaDesc = $page_edit_row['metaDesc'];
        $submit_btn = 'update_category';
        $submit_btn_content = 'Update Page';
    }
} else {
    $pageName = '';
    $number = '';
    $pageSlug = '';
    $pageDesc = '';
    $metaTitle = '';
    $metaKey = '';
    $metaDesc = '';
    $status = 1;
    $submit_btn = 'add_category';
    $submit_btn_content = 'Add New';
    $id = '';
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="ckeditor/js/tinymce/source/tinymce.min.js"></script>
<script src="https://cdn.tiny.cloud/1/<?php echo tiny_code; ?>/tinymce/4/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "#pageDesc",
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
            Add Page
            <small>Manage Add Page</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admin Page</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_3">

                                <form method="post" id="data_form" action="services/page/set_page.php">
                                    <div class="box-body">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Page Name</label>
                                                <input placeholder="Page Name" id="pageName" name="pageName" data-validation="required" class="form-control" value="<?php echo $pageName; ?>" required>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Slug</label>
                                                <input placeholder="Page Slug" id="pageSlug" name="pageSlug" class="form-control" value="<?php echo $pageSlug; ?>">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <div class="position-relative form-group">
                                                    <label for="status" class="">Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="1" <?php
                                                        if ($status == 1) {
                                                            echo 'selected';
                                                        }
                                                        ?>>Active</option>
                                                        <option value="0" <?php
                                                        if ($status == 0) {
                                                            echo 'selected';
                                                        }
                                                        ?>>Disable</option>
                                                    </select>     
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12 form-group">
                                                <label class="control-label">Meta Title </label>
                                                <textarea class="form-control" name="metaTitle" id="metaTitle" placeholder="Title" required><?php echo $metaTitle ?></textarea>
                                            </div>
                                            <div class="col-sm-4 col-xs-12 form-group">
                                                <label class="control-label">Meta Description </label>
                                                <textarea class="form-control" name="metaDesc" id="metaDesc" placeholder="Description must be within 150 Characters"><?php echo $metaDesc; ?></textarea>
                                            </div>
                                            <div class="col-sm-4 col-xs-12 form-group">
                                                <label class="control-label">Meta keywords </label>
                                                <textarea class=" form-control" name="metaKey" id="metaKey" placeholder="keywords1, keywords2, keywords3" ><?php echo $metaKey ?></textarea>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-12 ">
                                                <label for="pageDesc">Description</label>
                                                <textarea class="form-control summernote" id="pageDesc" name="pageDesc" cols="20" rows="10" required>
                                                    <?php
                                                    if (isset($pageDesc)) {
                                                        echo $pageDesc;
                                                    }
                                                    ?></textarea>
                                            </div>
                                            <div class="col-md-12 box-footer">
                                                <button type="submit" name="<?php echo $submit_btn; ?>" id="submit_btn" class="mt-2 btn btn-primary"><?php echo $submit_btn_content; ?>  </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="loaderOverlay" class="overlay" style=" display: none;">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
