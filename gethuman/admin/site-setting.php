<?php
$cat_data = dbAction("settings", $operation = 4, $form_data = "", "id!= 0 order by id desc Limit 1");
$cat_edit_row = $cat_data->fetch_assoc();
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
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Site Settings
            <small>Update your website settings</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Site Settings</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-7">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">General Settings</h3>
                    </div>
                    <form method="post" id="data_form_site_setting" action="services/setting/site_setting.php">
                        <div class="box-body">
                            <div id="alert_box">
                            </div>
                            <div class="form-group">
                                <label for="site_title">Website Title</label>
                                <input type="text" class="form-control" name="site_title" id="site_title" value="<?php echo $cat_edit_row['site_title'] ?>" placeholder="Enter your site title here">
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" placeholder="Enter a meta description for your website"><?php echo $cat_edit_row['meta_description'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <textarea name="meta_keywords" id="meta_keywords" class="form-control" placeholder="Enter a meta keywords for your website"><?php echo $cat_edit_row['meta_keywords'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label style=" display: block;">Website URL</label>
                                <select class="form-control" name="site_port" id="site_port" style="width: 20%; display: inline-block;">
                                    <?php if ($cat_edit_row['site_port'] == 'https://') { ?>
                                        <option value="https://">https</option>
                                        <option value="http://">http</option>
                                    <?php } else { ?>
                                        <option value="http://">http</option>
                                        <option value="https://">https</option>
                                    <?php } ?>
                                </select> 
                                <input type="text" name="site_link" id="site_link" class="form-control" value="<?php echo $cat_edit_row['site_link']; ?>" placeholder="Enter your website url (Without http:// and end /)" style=" width: 75%; display: inline-block;">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="site_email">Email address</label>
                                        <input type="email" class="form-control" name="site_email" id="site_email" value="<?php echo $cat_edit_row['site_email']; ?>" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="site_phone">Phone Number</label>
                                        <input type="text" class="form-control" name="site_phone" id="site_phone" value="<?php echo $cat_edit_row['site_phone'] ?>" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="site_address">Address</label>
                                        <textarea  class="form-control" name="site_address" id="site_address" placeholder="Enter Phone Number"><?php echo $cat_edit_row['site_address'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ga_code">Google Analytics Code</label>
                                        <input type="text" class="form-control" name="ga_code" id="ga_code" value="<?php echo $cat_edit_row['ga_code']; ?>" placeholder="Ex: UA-12345678-1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gm_code">Google Maps API Key</label>
                                        <input type="text" class="form-control" name="gm_code" id="gm_code" value="<?php echo $cat_edit_row['gm_code'] ?>" placeholder="Google Maps API Key">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tiny_code">TinyMCE API Key [Text Editor] <a href="https://www.tiny.cloud/auth/signup" target="_blank">Create Key</a></label>
                                        <input type="text" class="form-control" name="tiny_code" id="tiny_code" value="<?php echo $cat_edit_row['tiny_code'] ?>" placeholder="TinyMCE API Key">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="gr_sitekey">Google reCAPTCHA Site Key <a href="https://www.google.com/recaptcha/about/" target="_blank">Create Key</a></label>
                                        <input type="text" class="form-control" name="gr_sitekey" id="gr_sitekey" value="<?php echo $cat_edit_row['gr_sitekey'] ?>" placeholder="TinyMCE API Key">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="gr_secretkey">Google reCAPTCHA Secret Key <a href="https://www.google.com/recaptcha/about/" target="_blank">Create Key</a></label>
                                        <input type="text" class="form-control" name="gr_secretkey" id="gr_secretkey" value="<?php echo $cat_edit_row['gr_secretkey'] ?>" placeholder="TinyMCE API Key">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sharethis_key">Share This API Key <a href="https://platform.sharethis.com/signup" target="_blank">Create Key</a></label>
                                        <input type="text" class="form-control" name="sharethis_key" id="sharethis_key" value="<?php echo $cat_edit_row['sharethis_key'] ?>" placeholder="TinyMCE API Key">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bus_limt">Limit Set Business added by User</label>
                                        <select class="form-control" id="bus_limt" name="bus_limt">
                                            <?php
                                            for ($i = 1; $i <= 50; $i++) {
                                                if ($cat_edit_row['bus_limt'] == $i) {
                                                    $active = 'selected';
                                                } else {
                                                    $active = '';
                                                }
                                                echo '<option value=' . $i . ' ' . $active . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="submit_btn_site_setting" name="site_setting" type="submit" class="btn btn-primary">Update Site Settings</button>
                        </div>
                    </form>
                </div>
                <div class="box box-info">
                    <form method="post" id="data_form_head_code" action="services/setting/set_logo.php" enctype="multipart/form-data">
                        <div class="box-header with-border">
                            <h3 class="box-title">Head Code Here</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="head_code">Head code add here</label>
                                <textarea rows="8" class="form-control" name="head_code" id="head_code" placeholder="Enter All head code here.."><?php echo $cat_edit_row['head_code'] ?></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="submit_btn_head_code" name="submit_btn_head_code" type="submit" class="btn btn-primary">Update Head Code</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-info">
                            <form method="post" id="" action="services/setting/set_logo.php" enctype="multipart/form-data">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Publish Settings</h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Auto Approve Listings</label>
                                        <?php if ($cat_edit_row['active_listings'] == 1) { ?>
                                            <input type="checkbox" id="auto_listings" class="minimal auto_check" checked>
                                        <?php } else { ?>
                                            <input type="checkbox" id="auto_listings" class="minimal auto_check">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Approve Reviews</label>
                                        <?php if ($cat_edit_row['active_reviews'] == 1) { ?>
                                            <input type="checkbox" id="auto_reviews" class="minimal auto_check" checked>
                                        <?php } else { ?>
                                            <input type="checkbox" id="auto_reviews" class="minimal auto_check">
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-info">
                            <form method="post" id="" action="services/setting/set_logo.php" enctype="multipart/form-data">
                                <div class="box-header with-border">
                                    <h3 class="box-title">User Settings</h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Email Account Activation Code</label>
                                        <?php if ($cat_edit_row['email_active_users'] == 1) { ?>
                                            <input type="checkbox" id="email_active" class="minimal auto_check" checked>
                                        <?php } else { ?>
                                            <input type="checkbox" id="email_active" class="minimal auto_check">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Captcha for Registration</label>
                                        <?php if ($cat_edit_row['captcha_signup'] == 1) { ?>
                                            <input type="checkbox" id="captcha_signup" class="minimal auto_check" checked>
                                        <?php } else { ?>
                                            <input type="checkbox" id="captcha_signup" class="minimal auto_check">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Captcha for Login</label>
                                        <?php if ($cat_edit_row['captcha_signin'] == 1) { ?>
                                            <input type="checkbox" id="captcha_signin" class="minimal auto_check" checked>
                                        <?php } else { ?>
                                            <input type="checkbox" id="captcha_signin" class="minimal auto_check">
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">

                    </div>
                </div>
            </div>
            <!-- right column -->
            <div class="col-md-5">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Logo & Favicon</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Logo (130px x 68px) PNG file.</label>
                                    <div class="fileUpload">
                                        <form method="post" id="data_form_logo" action="services/setting/set_logo.php" enctype="multipart/form-data">
                                            <input type="file" class="upload" name="logo_site" id="logo_site"/>
                                            <span><i class="fa  fa-cloud-upload"></i> Choose File</span>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>
                                        <img src="../images/logo.png" style="background: #ecf0f5;">
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Favicon Icon PNG File</label>
                                    <div class="fileUpload">
                                        <form method="post" id="data_form_favicon" action="services/setting/set_logo.php">
                                            <input type="file" class="upload" id="favicon_site" name="favicon_site"/>
                                            <span><i class="fa  fa-cloud-upload"></i> Choose File</span>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>
                                        <img src="../images/favicon.png" style="background: #ecf0f5; padding: 10px;">
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Home Page Banner</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>
                                        <img src="../images/hero.jpg" style=" width: 100%;">
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <label>Home Banner (1463px x 584px) jpg file.</label>
                                    <div class="fileUpload">
                                        <form method="post" id="data_form_banner" action="services/setting/set_logo.php" enctype="multipart/form-data">
                                            <input type="file" class="upload" name="home_banner" id="home_banner"/>
                                            <span><i class="fa  fa-cloud-upload"></i> Choose File</span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-info">
                    <form method="post" id="data_form_home_title" action="services/setting/set_logo.php" enctype="multipart/form-data">
                        <div class="box-header with-border">
                            <h3 class="box-title">Home Promo Line</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="home_title">Home Page Promo Text Line</label>
                                <input type="text" class="form-control" name="home_title" id="home_title" value="<?php echo $cat_edit_row['home_title'] ?>" placeholder="Enter your promo text line here">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="submit_btn_home_title" name="submit_btn_home_title" type="submit" class="btn btn-primary">Update Promo Text</button>
                        </div>
                    </form>
                </div>

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Upload Sitemap/xml/html File</h3>
                    </div>
                    <form method="post" id="data_form_site_map" action="services/setting/set_logo.php" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="fileUpload">
                                            <input type="file" class="upload" name="site_map" id="site_map" required>
                                            <span><i class="fa  fa-cloud-upload"></i> Choose File</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="submit_btn_site_map" name="submit_btn_site_map" type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Header Color</h3>
                    </div>
                    <form method="post" id="data_form_h_color" action="services/setting/set_logo.php">
                        <div class="box-body">
                            <!-- Color Picker -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Background Color: <span style=" background: <?php echo $cat_edit_row['headerColor'] ?>;padding: 2px 40px;"></span></label>
                                        <input id="headerColor" name="headerColor" value="<?php echo $cat_edit_row['headerColor'] ?>" type="text" class="form-control my-colorpicker1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Text Color: <span style=" background: <?php echo $cat_edit_row['headerTextColor'] ?>;padding: 2px 40px;"></span></label>
                                        <input id="headerTextColor" name="headerTextColor" value="<?php echo $cat_edit_row['headerTextColor'] ?>" type="text" class="form-control my-colorpicker1">
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button id="submit_btn_h_color" name="submit_btn_h_color" type="submit" class="btn btn-primary">Change</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.box-body -->
                </div>

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Footer Color</h3>
                    </div>
                    <form method="post" id="data_form_f_color" action="services/setting/set_logo.php">
                        <div class="box-body">
                            <!-- Color Picker -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Background Color: <span style=" background: <?php echo $cat_edit_row['footerColor'] ?>;padding: 2px 40px;"></span></label>
                                        <input id="footerColor" name="footerColor" value="<?php echo $cat_edit_row['footerColor'] ?>" type="text" class="form-control my-colorpicker1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Text Color: <span style=" background: <?php echo $cat_edit_row['footerTextColor'] ?>;padding: 2px 40px;"></span></label>
                                        <input id="footerColor" name="footerTextColor" value="<?php echo $cat_edit_row['footerTextColor'] ?>" type="text" class="form-control my-colorpicker1">
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button id="submit_btn_f_color" name="submit_btn_f_color" type="submit" class="btn btn-primary">Change</button>
                            </div>
                            <!-- /.form group -->
                        </div>
                    </form>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </section>
</div>