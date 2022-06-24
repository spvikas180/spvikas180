<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $blog_data = dbAction("blogs", $operation = 4, $form_data = "", "blogId=" . $id);
    if ($blog_data->num_rows > 0) {
        $blog_data_row = $blog_data->fetch_assoc();
        $blogTitle = $blog_data_row['blogTitle'];
        $blogDesp = $blog_data_row['blogDesp'];
        $blogStatus = $blog_data_row['blogStatus'];
        $blogAuthor = $blog_data_row['blogAuthor'];
        $blogInfo = $blog_data_row['blogInfo'];
        $blogImage = $blog_data_row['blogImage'];
        $blogMetaTitle = $blog_data_row['blogMetaTitle'];
        $blogMetaKey = $blog_data_row['blogMetaKey'];
        $blogMetaDesp = $blog_data_row['blogMetaDesp'];
        if ($blogImage == '') {
            $blogImage = 'upload/blog/no-image.png';
        }

        $catArr = [];
        $data_cat_arr = dbAction('blog_cat_mapping', $operation = 4, $from_data = "", " where blogId=$id");
        if ($data_cat_arr->num_rows > 0) {
            foreach ($data_cat_arr as $row_data_cat_arr) {
                array_push($catArr, $row_data_cat_arr['blogcatId']);
            }
        }
        $submit_btn = 'update_category';
        $submit_btn_content = 'Update Post';
    }
} else {
    $blogTitle = '';
    $blogDesp = '';
    $blogStatus = 1;
    $blogAuthor = '';
    $blogImage = 'upload/blog/no-image.png';
    $blogMetaTitle = '';
    $blogMetaKey = '';
    $blogMetaDesp = '';
    $submit_btn = 'add_category';
    $submit_btn_content = 'Submit';
    $id = '';
}
?>

<script src="https://cdn.tiny.cloud/1/<?php echo tiny_code; ?>/tinymce/4/tinymce.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="components/tagit/css/jquery.tagit.css" rel="stylesheet" type="text/css">
<link href="components/tagit/css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">
<link href="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"  rel="stylesheet" type="text/css"/>
<style>
    .multiselect-native-select .btn-group {
        width: 100%;
        border: 1px solid #ced4da;
    }
    .multiselect-native-select .btn-group button {
        overflow: hidden;
        border-radius: 0;
    }
    .multiselect-container .checkbox input[type="checkbox"] {
        opacity: 1;
    }
    .check {
        border: 3px solid #4fff28;
    }
    .box {
        margin-bottom: 5px;
    }
    .note-editor.note-frame .note-editing-area .note-editable{ min-height: 280px}
    .open>.dropdown-menu {
        width: 100%;
    }
    .tagit-autocomplete.ui-widget-content{ z-index: 9;}
    .multiselect-container{
        transform: translate3d(0px, 0px, 0px) !important;
    }
    #mceu_43 {height: 500px; overflow: auto;}
    .tagsDiv .crDiv{
        border: 1px solid;
        padding: 2px 5px;
        border-radius: 20px;

    }
    .tagsDiv .crDiv i{
        margin-left: 5px;
        cursor: pointer;
    }
    .more-img {
        position: relative;
    }
    .more-img .close {
        position: absolute;
        top: -2px;
        right: 0px;
        z-index: 100;
        opacity: 1;
        color: red;
        border: 1px solid;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        padding-left: 8px;
        padding-top: 2px;
    }
    #searchImg{
        width: 20%;
        display: inline-block;
        text-align: right;
        position: absolute;
        right: 40px;
    }
</style>
<script>
    tinymce.init({
        selector: "#blogDesp",
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
            Add Post
            <small>Manage your website Add Post</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Post</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Post</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_3">
                                <form id="data_form" action="services/post/set_post.php" name="data_form" method="post">
                                    <input type="hidden" id="blogId" name="id" value="<?php echo $id; ?>"/>
                                    <input type="hidden" id="saveDraft" name="saveDraft" value="submit"/>
                                    <?php if (isset($_GET['id'])) { ?>
                                        <input type="hidden" id="blogDraft" name="blogDraft" value="1"/>
                                    <?php } else { ?>
                                        <input type="hidden" id="blogDraft" name="blogDraft" value="1"/>
                                    <?php }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-8 col-xs-12">
                                            <div class="col-xs-12 position-relative form-group">
                                                <label class="control-label" for="">Post Title</label>
                                                <input type="text" placeholder="Title" id="blogTitle" name="blogTitle"
                                                       data-validation="required" class="form-control" value="<?php echo $blogTitle; ?>" required>
                                            </div>
                                            <div class="col-xs-12 position-relative form-group">
                                                <label class="control-label" for="blogMetaTitle">Meta Title</label>
                                                <input type="text" placeholder="Meta Title" id="blogMetaTitle" name="blogMetaTitle" class="form-control" value="<?php echo $blogMetaTitle; ?>">
                                            </div>
                                            <div class="col-xs-12 position-relative form-group">
                                                <label class="control-label" for="blogMetaKey">Meta Keyword</label>
                                                <input type="text" placeholder="Meta Keyword" id="blogMetaKey" name="blogMetaKey" class="form-control" value="<?php echo $blogMetaKey; ?>">
                                            </div>
                                            <div class="col-xs-12 position-relative form-group">
                                                <label for="blogMetaDesp" class="control-label">Meta Description</label>
                                                <textarea class="form-control" id="blogMetaDesp" name="blogMetaDesp"><?php echo $blogMetaDesp; ?></textarea>
                                            </div>
                                            <div class="col-xs-12 position-relative form-group" id="tyni-hover">
                                                <label for="blogDesp" class="control-label">Post Description</label>
                                                <textarea class="form-control" id="blogDesp" name="blogDesp"
                                                          data-validation="required" cols="20" rows="20" style=" height: 200px;"><?php echo $blogDesp; ?></textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <div class="col-xs-12 position-relative form-group">
                                                <label class="control-label" for="blogcatId">Categories </label><p id="brand_btn" class="btn mb-0" data-toggle="modal" data-target="#postCatModal" style="border: 1px solid; padding: 2px 5px;"> Add More <i class="fa fa-plus-circle" aria-hidden="true"></i></p>
                                                <select class="form-control" name="blogcatId[]" id="blogcatId" multiple="multiple">
                                                    <?php
                                                    $data_cat = dbAction('post_cat', $operation = 4, $from_data = "", ' where catStatus IN (0,1) order by catName asc');
                                                    if ($data_cat->num_rows > 0) {
                                                        foreach ($data_cat as $row_data_cat) {
                                                            ?>
                                                            <option value="<?php echo $row_data_cat['catId']; ?>"   
                                                            <?php
                                                            if (isset($_GET['id'])) {
                                                                if (in_array($row_data_cat['catId'], $catArr)) {
                                                                    echo 'selected="selected"';
                                                                }
                                                            }
                                                            ?>><?php echo $row_data_cat['catName'] ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                </select>
                                            </div>

                                            <div class="col-xs-12 position-relative form-group">
                                                <label class="control-label">Author </label>
                                                <div class="">
                                                    <select class="form-control" name="blogAuthor" id="blogAuthor">
                                                        <?php
                                                        $data_author = dbAction('author', $operation = 4, $from_data = "", ' where authorStatus=1');
                                                        if ($data_author->num_rows > 0) {
                                                            foreach ($data_author as $row_data_author) {
                                                                if ($row_data_author['authorId'] == $blogAuthor) {
                                                                    $selected = 'selected';
                                                                } else {
                                                                    $selected = '';
                                                                }
                                                                ?>
                                                                <option value="<?php echo $row_data_author['authorId'] ?>" <?php echo $selected; ?>><?php echo $row_data_author['authorName'] ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-xs-12">
                                                <label class="control-label">Featured Image </label>
                                                <div class="more-img">
                                                    <?php if (isset($_GET['id'])) { ?>
                                                        <?php if ($blog_data_row['blogImage'] != '') { ?>
                                                            <span id="<?php echo $id; ?>" class="close deleteBlogFeaImg">&times;</span>
                                                        <?php }
                                                        ?>
                                                        <img id="logoPic" src="<?php echo BASE_URL . $blogImage; ?>" style=" width: 100%; height: auto;">

                                                    <?php } else { ?>
                                                        <img id="logoPic" src="" height="143px">
                                                    <?php }
                                                    ?>
                                                    <input class="form-control " type="file" name="blogImage" id="blogImage"/>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 form-group">
                                                <label for="blogImage1">Or Choose Image from Server : </label>
                                                <a id="modelBtn" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#addcustom"><i
                                                        class="fa fa-plus"></i> Choose
                                                </a>
                                                <input style="position: relative; width: 95%;" type="text" readonly class="form-control" id="blogimage1" name="blogImage1" value="">
                                                <i style="font-size:25px;color: red;position: relative; top: -32px; right: -290px;" class="fa fa-trash clearData"></i>
                                            </div>

                                            <div class="form-group col-xs-12 tagsDiv">
                                                <label for="singleFieldTags2">Tags : </label>
                                                <span id="TagData">
                                                    <?php
                                                    if (isset($_GET['id'])) {
                                                        $data_tags = "SELECT tt.tagTitle,tm.mappingId as mappingId FROM tag_mapping AS tm"
                                                                . " INNER JOIN tags AS tt ON tm.tagId=tt.tagId"
                                                                . " WHERE tm.blogId= $id ";
                                                        $data_tags = queryRun($data_tags, $debug = 3);
                                                        if ($data_tags->num_rows > 0) {
                                                            foreach ($data_tags as $row_data_tags) {

                                                                echo '<span class="crDiv">' . $row_data_tags['tagTitle'] . '<i id="' . $row_data_tags['mappingId'] . '" class="fa fa-close deleteTag" aria-hidden="true"></i></span> ';
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </span>
                                                <input id="singleFieldTags2" name="tags" class="form-control" placeholder="type here to tag the post">
                                            </div>


                                            <div class="col-xs-12 form-group ">
                                                <label class="control-label">Status </label>
                                                <select class=" form-control" id="blogStatus" name="blogStatus" >
                                                    <?php
                                                    if ($blogStatus == 1) {
                                                        $active = 'selected';
                                                    } else {
                                                        $active = 'selected';
                                                    }
                                                    ?>
                                                    <option value="1" <?php
                                                    if ($blogStatus == 1) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Active</option>
                                                    <option value="0" <?php
                                                    if ($blogStatus == 0) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Inactive</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-xs-12">
                                                <!--<button class="btn btn-primary" id="resetform" >Preview</button>-->
                                                <button id="drt_btn" type="submit" style="display: none;">Draft</button>
                                                <button type="submit" name="<?php echo $submit_btn; ?>" id="submit_btn_post" class="btn btn-success"><?php echo $submit_btn_content; ?>  </button>
                                                <button id="button" class="btn btn-primary" type="button">Preview</button>
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
                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="postCatModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal form-label-left input_mask" id="data_form_category" action="services/post/set_category.php" name="user_form" method="post">
                            <div class="form-row">
                                <input type="hidden" name="catStatus" value="1"/>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <label class="">Category Name*</label>
                                    <input type="text" class="form-control" id="catName" name="catName" placeholder="Categories name" value="" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="position-relative">
                                        <label for="catIdMain" class="">Parent Category</label>
                                        <select class="form-control" name="catIdMain" id="catIdMain">
                                            <option value="0">Parent</option>
                                            <?php

                                            function categoryTree($parent_id = 0, $sub_mark = '', $catIdMain) {
                                                $query = dbAction('post_cat', $operation = 4, $from_data = "", "where catIdMain = $parent_id AND catStatus = 1 order by catName asc");
                                                if ($query->num_rows > 0) {
                                                    while ($row = $query->fetch_assoc()) {
                                                        if ($row['catId'] == $catIdMain) {
                                                            $select = 'selected';
                                                        } else {
                                                            $select = '';
                                                        }
                                                        echo '<option value="' . $row['catId'] . '" ' . $select . '>' . $sub_mark . $row['catName'] . '</option>';
                                                        categoryTree($row['catId'], $sub_mark . '-', $catIdMain);
                                                    }
                                                }
                                            }
                                            ?>
                                            <?php categoryTree($parent_id = 0, $sub_mark = '', $catIdMain); ?>
                                        </select>     
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <button type="submit" class="btn btn-success" name="add_category" id="submit_btn_category_post">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button  id="dismiss" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade mydiv" id="addcustom" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <input id="searchImg" class="form-control" type="search" style=" width: 20%; float: right;"/>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="float: right;">×</button>
                <h5 style="float: left">Choose Image:</h5>
            </div>
            <div class="modal-body myscroll" style="height: 400px;overflow-y: scroll">
                <div class="row" id="imgdata">

                </div>
            </div>
            <div class="modal-footer">
                <button id="dismissImage" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary pull-right" id="choose_file">SELECT</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>