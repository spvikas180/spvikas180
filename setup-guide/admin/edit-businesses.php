<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $company_data = dbAction("company", $operation = 4, $form_data = "", "id= $id");
    $company_data_row = $company_data->fetch_assoc();
    $industryId = $company_data_row['industryId'];
    $status = $company_data_row['status'];
}
?>
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
            Edit Company
            <small>( <?php echo $company_data_row['brand']; ?> )</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Company</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                   
                    <form method="post" id="data_form_update_business" action="services/company/set_company.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                       <div class="box-body">
                                        <div class="">
                                           
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="brand">Brand</label>
                                                <input class="form-control" type="text"  name="brand" id="brand" value="<?php echo $company_data_row['brand'];?>" placeholder="Brand">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="companyName">Company Name</label>
                                                <input class="form-control" type="text"  name="companyName" id="companyName" value="<?php echo $company_data_row['companyName'];?>" placeholder="Company Name" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="previousName">Previous Name</label>
                                                <input class="form-control" type="text"  name="previousName" id="previousName" value="<?php echo $company_data_row['previousName'];?>" placeholder="Previous Name">
                                            </div>
                                               <div class="col-md-6 form-group">
                                                <div class="position-relative ">
                                                    <label class="control-label" for="industryId">Industry</label>
                                                    <select class="form-control" name="industryId" id="industryId" required="">
                                                        <option value="<?php echo $company_data_row['competitorAnalysis'];?>">Choose Industry</option>
                                                        <?php

                                                        function categoryTree($parent_id = 0, $sub_mark = '', $industryId) {
                                                            $query = dbAction('industry', $operation = 4, $from_data = "", "where industryId = $parent_id AND industryStatus = 1 order by industryName asc");
                                                            if ($query->num_rows > 0) {
                                                                while ($row = $query->fetch_assoc()) {
                                                                    if ($row['id'] == $industryId) {
                                                                        $select = 'selected';
                                                                    } else {
                                                                        $select = '';
                                                                    }
                                                                    echo '<option value="' . $row['id'] . '" ' . $select . '>' . $sub_mark . $row['industryName'] . '</option>';
                                                                    categoryTree($row['id'], $sub_mark . '-', $industryId);
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                        <?php categoryTree($parent_id = 0, $sub_mark = '', $industryId); ?>
                                                    </select>     
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="incorporationDate">Incorporation Date</label>
                                                <input class="form-control" type="text"  name="incorporationDate" id="incorporationDate" value="<?php echo $company_data_row['incorporationDate'];?>" placeholder="Incorporation Date">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="founder">Founder</label>
                                                <input class="form-control" type="text"  name="founder" id="founder" value="<?php echo $company_data_row['founder'];?>" placeholder="Founder">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="ceo">CEO</label>
                                                <input class="form-control" type="text"  name="ceo" id="ceo" value="<?php echo $company_data_row['ceo'];?>" placeholder="CEO">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="totalWorth">Total Worth</label>
                                                <input class="form-control" type="text"  name="totalWorth" id="totalWorth" value="<?php echo $company_data_row['totalWorth'];?>" placeholder="Total Worth">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="totalUsers">Total Users</label>
                                                <input class="form-control" type="text"  name="totalUsers" id="totalUsers" value="<?php echo $company_data_row['totalUsers'];?>" placeholder="Total Users">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="monthlyActiveUsers">Monthly Active Users</label>
                                                <input class="form-control" type="text"  name="monthlyActiveUsers" id="monthlyActiveUsers" value="<?php echo $company_data_row['monthlyActiveUsers'];?>" placeholder="Monthly Active Users">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="website">Website</label>
                                                <input class="form-control" type="url"  name="website" id="website" value="<?php echo $company_data_row['website'];?>" placeholder="Website">
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="headQuarter">Head Quarter</label>
                                                <input class="form-control" type="text"  name="headQuarter" id="headQuarter" value="<?php echo $company_data_row['headQuarter'];?>" placeholder="Head Quarter">
                                            </div>
                                           
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="number">Phone Number</label>
                                                <input class="form-control" type="text"  name="number" id="number" value="<?php echo $company_data_row['number'];?>" placeholder="Phone number">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="address">Address</label>
                                                <input class="form-control" type="text"  name="address" id="address" value="<?php echo $company_data_row['address'];?>" placeholder="Address">
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <label class="control-label" for="history">History</label>
                                                <textarea class="form-control"  name="history" id="history" value="" placeholder="History"><?php echo $company_data_row['history'];?></textarea>
                                            </div>
                                             <div class="col-md-12 form-group">
                                                <label class="control-label" for="listProducts">List of Products</label>
                                                <textarea class="form-control"  name="listProducts" id="listProducts"  placeholder="List of Products"><?php echo $company_data_row['listProducts'];?>
                                                    </textarea> 
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="control-label" for="currentStage">Current Stage & Market Share</label>
                                                <textarea class="form-control" name="currentStage" id="currentStage" placeholder="Current Stage & Market Share">
                                                    <?php echo $company_data_row['currentStage'];?>
                                                    </textarea>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="control-label" for="competitorAnalysis">Competitor Analysis </label>
                                                <textarea class="form-control"  name="competitorAnalysis" id="competitorAnalysis" placeholder="Competitor Analysis ">
                                                    <?php echo $company_data_row['competitorAnalysis'];?>
                                                    </textarea>
                                            </div>



                                         
                                           <!--  <div class="col-md-12 form-group">
                                                <label class="control-label" for="description">Description</label>
                                                <textarea class="form-control" name="description"></textarea>
                                            </div> -->

                                            <div class="col-md-12 form-group">
                                                <h4>Social Information</h4>
                                                <hr>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="facebook">Facebook</label>
                                                <input class="form-control" type="url"  name="facebook" id="facebook" value="<?php echo $company_data_row['facebook'];?>" placeholder="Facebook">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="twitter">Twitter</label>
                                                <input class="form-control" type="url"  name="twitter" id="twitter" value="<?php echo $company_data_row['twitter'];?>" placeholder="Twitter">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="linktree">Linktree</label>
                                                <input class="form-control" type="url"  name="linktree" id="linktree" value="<?php echo $company_data_row['linktree'];?>" placeholder="Linktree">
                                            </div>
                                              <div class="col-md-6 form-group">
                                                <label class="control-label" for="instagram">Instagram</label>
                                                <input class="form-control" type="url"  name="instagram" id="instagram" value="<?php echo $company_data_row['instagram'];?>" placeholder="Instagram">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="linkedIn">LinkedIn</label>
                                                <input class="form-control" type="url"  name="linkedIn" id="linkedIn" value="<?php echo $company_data_row['linkedIn'];?>" placeholder="LinkedIn">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="1" <?php if($status==1){echo 'selected';} ?> >Active</option>
                                                    <option value="0" <?php if($status==0){echo 'selected';} ?>>Inactive</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <h4>FAQs</h4>
                                                <hr>
                                            </div>
                                            <div class="user-details">
                                        <?php
                                        if (isset($_GET['id'])) {
                                            $data_faq = dbAction('faq', $operation = 4, $from_data = "", ' where companyId=' . $id . '');
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
                                    <div class="row">
                                    <div class="col-md-12 position-relative form-group" style=" margin-top: 15px;">
                                        <div class="col-md-3 form-group">
                                            <button type="button" class="add_details btn btn-block btn-info">Add More FAQs</button>
                                        </div>
                                    </div>
                                </div>
                            <div class="box-footer addbtnbottom">
                            <button id="submit_btn_update_business" name="update_business" type="submit" class="btn btn-primary">Update Company
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>