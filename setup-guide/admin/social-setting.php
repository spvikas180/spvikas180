<?php
$cat_data = dbAction("settings", $operation = 4, $form_data = "", "id!= 0 order by id desc Limit 1");
$cat_edit_row = $cat_data->fetch_assoc();
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Social Settings
            <small>Update your website settings</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Social Settings</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-7">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Social Settings</h3>
                    </div>
                    <form method="post" id="data_form_social_setting" action="services/setting/site_setting.php">
                        <div class="box-body">
                            <div id="alert_box">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="site_email">Facebook Page URL</label>
                                        <input type="text" class="form-control" name="fb_page" id="fb_page" value="<?php echo $cat_edit_row['fb_page']; ?>" placeholder="Facebook Page URL">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="site_phone">Twitter URL</label>
                                        <input type="text" class="form-control" name="twitter_link" id="twitter_link" value="<?php echo $cat_edit_row['twitter_link'] ?>" placeholder="Twitter URL">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ga_code">Instagram URL</label>
                                        <input type="text" class="form-control" name="pinterest_link" id="pinterest_link" value="<?php echo $cat_edit_row['pinterest_link']; ?>" placeholder="Instagram URL">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gm_code">Google+ URL</label>
                                        <input type="text" class="form-control" name="google_pluse_link" id="google_pluse_link" value="<?php echo $cat_edit_row['google_pluse_link'] ?>" placeholder="Google+ URL">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="submit_btn_social_setting" name="social_setting" type="submit" class="btn btn-primary">Update Social Settings</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
            </div>
        </div>
    </section>
</div>