<script src="https://cdn.tiny.cloud/1/<?php echo tiny_code; ?>/tinymce/4/tinymce.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="components/tagit/css/jquery.tagit.css" rel="stylesheet" type="text/css">
<link href="components/tagit/css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">
<link href="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"  rel="stylesheet" type="text/css"/>
<style type="text/css">
    .addbtnbottom{
        position: fixed;
    bottom: 0;
    background: #222d32e3;
    width: 80%;
    padding: 20px;
    margin-bottom: 0;
    }
</style>
<script>
    tinymce.init({
        selector: "#history,#listProducts,#currentStage,#competitorAnalysis",
        content_style: ".mce-content-body {font-size:12px;}",
        plugins: [
            "advlist lists link image imagetools charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste ",
            "spellchecker",
            "autoresize textcolor",
        ],

        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        browser_spellcheck: true,
        contextmenu: false,
        link_default_protocol: 'https',
        link_assume_external_targets: true,
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
            Add Product
            <small>Manage Add Product</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Product</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_3">
                                <form method="post" id="data_form_add_business" action="services/product/set_product.php">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <h4>Add Product</h4>
                                                <hr>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="productName">Product Name</label>
                                                <input class="form-control" type="text"  name="productName" id="productName" value="" placeholder="Product Name">
                                            </div>
                                            
                                               <div class="col-md-6 form-group">
                                                <div class="position-relative ">
                                                    <label class="control-label" for="companyId">Choose Company</label>
                                                    <select class="form-control" name="companyId" id="companyId" required="">
                                                        <?php
                                                            $query = dbAction('company', $operation = 4, $from_data = "", "where status = 1 order by companyName asc");
                                                            if ($query->num_rows > 0) {
                                                                while ($row = $query->fetch_assoc()) {
                                                                    echo '<option value="'.$row['id'].'">'.$row['brand'].'</option>';
                                                                }
                                                            }
                                                        
                                                        ?>
                                                    </select>     
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="col-md-12 form-group">
                                                <label class="control-label" for="productDesp">Product Description</label>
                                                <textarea class="form-control" name="productDesp" id="productDesp" value="" placeholder="Product Description"></textarea>
                                            </div>
                                             
                                            <div class="col-md-6 form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <h4>FAQs</h4>
                                                <hr>
                                            </div>
                                            <div class="user-details">
                                        <?php
                                        if (isset($_GET['id'])) {
                                            $data_faq = dbAction('faq', $operation = 4, $from_data = "", ' where productId=' . $id . '');
                                            if ($data_faq->num_rows > 0) {
                                                $i = 1;
                                                foreach ($data_faq as $row_data_faq) {
                                                    if ($i == 1) {
                                                        $faq_rbtn = '';
                                                    } else {
                                                        $faq_rbtn = '<div class="col-md-3 form-group"><button class="btn remove-btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">Remove FAQs <i class="fa fa-trash-o" aria-hidden="true"></i></button></div>';
                                                    }
                                                    ?>
                                                    <div class="user_data">
                                                        <div class="col-md-6 form-group">
                                                            <div class="col-md-12 form-group">
                                                                <label class="control-label">FAQs Title</label>
                                                                <input class="form-control" type="text" name="faq_title[]" placeholder="FAQs Title" value="<?php echo $row_data_faq['faq_title']; ?>">
                                                            </div>
                                                            <div class="col-md-12 position-relative form-group">
                                                                <label class="control-label">FAQs Description</label>
                                                                <textarea class="form-control" name="faq_des[]" placeholder="FAQs Description"><?php echo $row_data_faq['faq_des']; ?></textarea>
                                                            </div>
                                                            <?php echo $faq_rbtn; ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $i++;
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-12 position-relative form-group" style=" margin-top: 15px;">
                                        <div class="col-md-3 form-group">
                                            <button type="button" class="add_details btn btn-block btn-info">Add More FAQs</button>
                                        </div>
                                    </div>



                                     <div class="col-md-12 form-group">
                                                <h4>Issue Resolve</h4>
                                                <hr>
                                            </div>
                                            <div class="user-details-resolve">
                                        <?php
                                        if (isset($_GET['id'])) {
                                            $data_resolve = dbAction('issue_resolve', $operation = 4, $from_data = "", ' where productId=' . $id . '');
                                            if ($data_resolve->num_rows > 0) {
                                                $i = 1;
                                                foreach ($data_resolve as $row_data_resolve) {
                                                    if ($i == 1) {
                                                        $faq_rbtn = '';
                                                    } else {
                                                        $faq_rbtn = '<div class="col-md-3 form-group"><button class="btn remove-btn-resolve btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">Remove <i class="fa fa-trash-o" aria-hidden="true"></i></button></div>';
                                                    }
                                                    ?>
                                                    <div class="user_data_resolve">
                                                        <div class="col-md-6 form-group">
                                                            
                                                            <div class="col-md-12 position-relative form-group">
                                                                <label class="control-label">Resolve</label>
                                                                <textarea class="form-control" name="title[]" placeholder="FAQs Description"><?php echo $row_data_resolve['title']; ?></textarea>
                                                            </div>
                                                            <?php echo $faq_rbtn; ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $i++;
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-12 position-relative form-group" style=" margin-top: 15px;">
                                        <div class="col-md-3 form-group">
                                            <button type="button" class="add_details_resolve btn btn-block btn-info">Add More Issue Resolve</button>
                                        </div>
                                    </div>


                                    <div class="col-md-12 form-group">
                                                <h4>Quation and Answers</h4>
                                                <hr>
                                            </div>
                                <div class="user-details-qua-ans">
                                        <?php
                                        if (isset($_GET['id'])) {
                                            $data_resolve = dbAction('quation_answer', $operation = 4, $from_data = "", ' where productId=' . $id . '');
                                            if ($data_resolve->num_rows > 0) {
                                                $i = 1;
                                                foreach ($data_resolve as $row_data_resolve) {
                                                    if ($i == 1) {
                                                        $faq_rbtn = '';
                                                    } else {
                                                        $faq_rbtn = '<div class="col-md-3 form-group"><button class="btn remove-btn-qua-ans btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">Remove <i class="fa fa-trash-o" aria-hidden="true"></i></button></div>';
                                                    }
                                                    ?>
                                                    <div class="user_data_qua_ans">
                                                        <div class="col-md-6 form-group">
                                                            
                                                            <div class="col-md-12 position-relative form-group">
                                                                <label class="control-label">Resolve</label>
                                                                <textarea class="form-control" name="quation[]" placeholder="Quation"><?php echo $row_data_qua_ans['quation']; ?></textarea>
                                                            </div>
                                                            <div class="col-md-12 position-relative form-group">
                                                                <label class="control-label">Resolve</label>
                                                                <textarea class="form-control" name="answer[]" placeholder="answer"><?php echo $row_data_qua_ans['answer']; ?></textarea>
                                                            </div>
                                                            <?php echo $faq_rbtn; ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $i++;
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-12 position-relative form-group" style=" margin-top: 15px;">
                                        <div class="col-md-3 form-group">
                                            <button type="button" class="add_details_qua_ans btn btn-block btn-info">Add Quation Answers</button>
                                        </div>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <h4>Download Trial Version</h4>
                                        <hr>
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label class="control-label" for="btn1Name">Title</label>
                                        <input class="form-control" type="text"  name="btn1Name" id="btn1Name" value="" placeholder="Button Title">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label class="control-label" for="btn1Url">Button Url</label>
                                        <input class="form-control" type="url"  name="btn1Url" id="btn1Url" value="" placeholder="Button Url">
                                    </div>
                                     <div class="col-md-2 form-group">
                                        <label class="control-label" for="btn1BgColor">Background Color</label>
                                        <input class="form-control" type="color"  name="btn1BgColor" id="btn1BgColor" value="" placeholder="Button Background Color">
                                    </div>


                                    <div class="col-md-12 form-group">
                                        <h4>GUIDEBOOK FOR SETUP</h4>
                                        <hr>
                                    </div>
                                     <div class="col-md-5 form-group">
                                        <label class="control-label" for="btn2Name">Title</label>
                                        <input class="form-control" type="text"  name="btn2Name" id="btn2Name" value="" placeholder="Button Title">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label class="control-label" for="btn2Url">Button Url</label>
                                        <input class="form-control" type="url"  name="btn2Url" id="btn2Url" value="" placeholder="Button Url">
                                    </div>
                                     <div class="col-md-2 form-group">
                                        <label class="control-label" for="btn2BgColor">Background Color</label>
                                        <input class="form-control" type="color"  name="btn2BgColor" id="btn2BgColor" value="" placeholder="Button Background Color">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <h4>RESOLVE YOUR ISSUES</h4>
                                        <hr>
                                    </div>
                                     <div class="col-md-5 form-group">
                                        <label class="control-label" for="btn3Name">Title</label>
                                        <input class="form-control" type="text"  name="btn3Name" id="btn3Name" value="" placeholder="Button Title">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label class="control-label" for="btn3Url">Button Url</label>
                                        <input class="form-control" type="url"  name="btn3Url" id="btn3Url" value="" placeholder="Button Url">
                                    </div>
                                     <div class="col-md-2 form-group">
                                        <label class="control-label" for="btn3BgColor">Background Color</label>
                                        <input class="form-control" type="color"  name="btn3BgColor" id="btn3BgColor" value="" placeholder="Button Background Color">
                                    </div>


                                            <div class="col-md-12 form-group addbtnbottom">
                                                <button id="submit_btn_add_business" name="add_business" type="submit" class="btn btn-primary">Add Product</button>
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
