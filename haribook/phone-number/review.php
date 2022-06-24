<?php include("../admin/control/config.php"); ?>
<?php include("../temp/site-settings.php"); ?>
<?php
$domain = $_SERVER['HTTP_HOST'];
$urlPath = $_SERVER['REQUEST_URI'];
$urlArr = explode('/', $urlPath);

if ($domain == 'localhost') {
    $companySlug = $urlArr[3];
    $companySlugArr = explode('?', $companySlug);
    $companySlug = $companySlugArr[0];
} else {
    $companySlug = $urlArr[3];
    $companySlugArr = explode('?', $companySlug);
    $companySlug = $companySlugArr[0];
}

$listing_qs = "SELECT * FROM `listing` INNER JOIN category on category.id = listing.catId where status = 1 AND website = '$companySlug'";
$listing_data = queryRun($listing_qs, $debug = 3);
if ($listing_data->num_rows > 0) {
    $listing_row = $listing_data->fetch_assoc();
    $id = $listing_row['id'];
    $listId = $listing_row['listId'];
    $catId = $listing_row['catId'];
    $catName = $listing_row['catName'];
    $catSlug = $listing_row['catSlug'];
    $companySlug = $listing_row['companySlug'];
    $companyName = $listing_row['companyName'];
    $address = $listing_row['address'];
    $description = $listing_row['description'];
    $country = $listing_row['country'];
    $city = $listing_row['city'];
    $zipcode = $listing_row['zipcode'];
    $number = $listing_row['number'];
    $email = $listing_row['email'];
    $website = $listing_row['website'];
    $status = $listing_row['status'];
    $verified = $listing_row['verified'];
    $userId = $listing_row['userId'];
    $pieces = explode(" ", $companyName);
    $companyName = implode(" ", array_splice($pieces, 0, 5));
    $complete_address = $address . ' ' . $city . ' ' . $zipcode;
    $address_map = $address . ' ' . $city;
    $address_map = clean_spcial_char($address_map);
    $catName_search = UrlCleanSearch($listing_row['catName']);

    $metaTitle = $listing_row['metaTitle'];
    $metaKeyword = $listing_row['metaKeyword'];
    $metaDesc = $listing_row['metaDesc'];

    if ($description == '' || empty($description)) {
        $description = 'No description about this company yet. If you are the owner or manage this company you can claim it and add a short description.';
    }

    if ($metaTitle == '' || empty($metaTitle)) {
        $metaTitle = "$companyName Phone Number | Call Now & Skip the Wait";
    }
    if ($metaKeyword == '' || empty($metaKeyword)) {
        $metaKeyword = "$companyName";
    }
    if ($metaDesc == '' || empty($metaDesc)) {
        $metaDesc = "The best $companyName phone number with tools for skipping the wait on hold, the current wait time, tools for scheduling a time to talk with a $companyName rep, reminders when the call center opens, tips and shortcuts from other $companyName customers who called this number.";
    }

    if ($listing_row['logo'] == '') {
        $listLogo = 'upload/business-logo/not-found.png';
    } else {
        $listLogo = $listing_row['logo'];
    }

    $from_data = array("views" => 'views+1');
    $data_view = 'UPDATE `listing` SET views=views+1 WHERE listId="' . $listId . '"';
    $data_view = queryRun($data_view, $debug = 3);

    $total_review = total_review($listId);
    $avg_rating = avg_rating($listId);

    if ($country != '') {
        $country_data = "SELECT * FROM `countries`"
                . " INNER join listing on countries.id = listing.country where countries.id = $country";
        $country_data = queryRun($country_data, $debug = 3);
        $country_data = $country_data->fetch_assoc();
        $country_name = $country_data['name'];
    } else {
        $country_name = '';
    }
} else {
    $companyName = '404 Not Found';
    $metaTitle = '404 Not Found';
    $metaDesc = '404 Not Found';
    $metaKeyword = '404 Not Found';
}
?>
<!DOCTYPE html> 
<html lang="en-US">
    <head>
        <title><?php echo $metaTitle; ?></title>
        <meta name="description" content="<?php echo $metaDesc; ?>">
        <meta name="keywords" content="<?php echo $metaKeyword; ?>">
        <?php include '../head.php'; ?>
        <script src='https://platform-api.sharethis.com/js/sharethis.js#property=<?php echo $site_settings['sharethis_key']; ?>&product=sop' async='async'></script>
        <meta property="og:title" content="<?php echo $metaTitle; ?>" />
        <meta property="og:type" content="<?php echo $site_settings['site_title']; ?>:company" />
        <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
        <meta property="og:description" content="<?php echo $metaDesc; ?>" />
        <meta property="og:locale" content="en_US"/>
        <meta property="og:site_name" content="<?php echo $companyName; ?>" />
    </head>
    <body class="cat-bg company-details">
        <?php
        if ($listing_row['btnBanner'] != '') {
            echo '<style>.company-details .hero{background: #fff url(../' . $listing_row['btnBanner'] . ') !important;}</style>';
        }
        if ($listing_row['btnStatus'] != 1) {
            include '../header.php';
        }
        ?>

        <?php
        if ($listing_data->num_rows > 0) {
            ?>
            <?php
            if ($listing_row['btnStatus'] == 1) {
                echo '<style>.cd-primary-nav > li > a{color: #fff !important;}.cd-search{height:0 !important;}.padding{padding-top: 100px; padding-bottom: 190px;} .cd-main-header{position: absolute;background: transparent !important;}</style>';
                if ($listing_row['btnColor'] == '') {
                    $btnColor = '#bf1818';
                } else {
                    $btnColor = $listing_row['btnColor'];
                }
                ?>
                <section class="hero">
                    <div class="container text-center">
                        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="color: #fff;padding-top: 30px;">Dear users, due to the Covid-19 pandemic, we are working with limited strength. The wait time might  be a little longer than expected. Please wait for our technicians to call you back. Your cooperation is highly appreciated.</marquee>
                        <div class="row padding">
                            <?php if ($listing_row['btnPromo'] != '') { ?>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h2 class="h1-tittle"><?php echo $listing_row['btnPromo']; ?></h2>
                                </div>
                            <?php }
                            ?>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <a class="homeBtn" href="<?php echo $listing_row['btnUrl']; ?>" rel="nofollow" style="background: <?php echo $btnColor; ?>"><?php echo $listing_row['btnTitle']; ?></a>    
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <div class="container-fluid bg-color4 com-dtls-header">
                <div class="container ptb-30 mb-center">
                    
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <img src="<?php echo BASE_URL . $listLogo; ?>" alt="<?php echo $companyName; ?>" width="150">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7 col-xs-12 star-business">
                            <h1><?php echo $companyName ?> </h1>
                            <h5>Call <?php echo $companyName ?> customer service faster with <?php echo brand_title; ?></h5>
                            
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php  if($number !=''){?>
                                     <h2 class="col4-h4 tollFree">Toll Free : <?php echo $number; ?></h2>
                                <?php } ?>
                               
                              <a class="chatBtn" rel="nofollow noopener" href="javascript:void(Tawk_API.toggle())">Chat With A Help Expert</a>  
                            </div>
                            <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 linkdiv">
                                <p><i class="fa fa-globe globe-icon" aria-hidden="true"></i><a href="https://<?php echo $website; ?>" class="link" rel="nofollow" target="_blank"><?php echo $website; ?></a></p>
                                <p><a href="https://<?php echo $website; ?>" class="visit" rel="nofollow" target="_blank">Visit this website</a></p>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 linkdiv2">
                                <p class="ask-review"><i class="fa fa-check-circle ask" aria-hidden="true"></i>Asking for reviews</p>
                                <p>This company regularly asks their customers for reviews - whether positive or negative.</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            
            <section class="com-dtls">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 plr bdr-r bdr-b" style=" overflow: hidden;">
                        <?php // include '../temp/review-form.php'; ?>
                        <div class="mb-20 bg-color4 pd-20">
                            <h2 class="col4-h4 tollFree margin-0"><?php echo $number; ?></h2>
                            <h5>CUSTOMER SERVICE</h5>
                            <a class="chatBtn mb-20" rel="nofollow noopener" href="tel:<?php echo $number; ?>">Free: Skip Waiting on Hold</a>
                        <div class="mb-50">
                            <div class="mb-50"><b>Get targeted help: </b>Tell us the issue so we get you to right rep, offer relevant tips, reminders &amp; follow-up!</div>
                            <div class="tile-fl-half-bld">
                                <a href="#">Refund</a>
                                <a href="#">Account Access</a>
                                <a href="#">Dispute a Charge</a>
                                <a href="#">Can't Login</a>
                                <a href="#">Account Restricted</a>
                                <a href="#">A different issue</a>
                            </div>
                        </div>
                        </div>

                        <div class="mb-20 bg-color4 pd-20 list-block">
                            <h2>Popular customer problems and how to solve them</h2>
                            <div class="list-block">
                                <a target="_blank" rel="noopener" href="#">What Do I Do If My <?php echo $companyName ?> Account Got Hacked?</a>
                                <a target="_blank" rel="noopener" href="#">How Do I Remove a Bank Account from My <?php echo $companyName ?> Account?</a>
                                <a target="_blank" rel="noopener" href="#">How Do I Change My Debit Card on <?php echo $companyName ?>?</a>
                                <a target="_blank" rel="noopener" href="#">How Do I Appeal a <?php echo $companyName ?> Account Suspension?</a>
                                <a target="_blank" rel="noopener" href="#">How Do I Restore My <?php echo $companyName ?> Account?</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bdr-l plr">
                            <?php
                            if ($description != '' || !empty($description)) {
                                ?>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4">
                                    <h2 class="col4-h4"><?php echo $companyName; ?></h2>
                                    <p><?php echo $description; ?></p>
                                </div>
                            <?php } ?>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4">
                                <h3 class="col4-h4-2">Contact</h3>
                                <?php
                                if ($email != '' || !empty($email)) {
                                    ?>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <i class="fa fa-at i" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-11">
                                            <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php
                                if ($number != '' || !empty($number)) {
                                    ?>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <i class="fa fa-phone i-2" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-11">
                                            <p><a href="tel:<?php echo $number; ?>"><?php echo $number; ?></a></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php
                                if (!empty($address) || !empty($city) || !empty($zipcode) || !empty($country_name)) {
                                    if ($city != '' || !empty($zipcode)) {
                                        $comma = ' , ';
                                    } else {
                                        $comma = '';
                                    }
                                    if ($country_name != '' || !empty($country_name)) {
                                        $br = '<br>';
                                    } else {
                                        $br = '';
                                    }
                                    ?>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <i class="fa fa-map-marker i-2" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-11">
                                            <p><?php echo $address . $comma . $city . ' ' . $zipcode . ' ' . $country_name; ?></p> 
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if ($site_settings['sharethis_key'] != '') { ?>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4">
                                    <h3 class="col4-h4-2">Share the company's rating</h3>
                                    <div class="sharethis-inline-share-buttons"></div>
                                </div>
                            <?php } ?>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4">
                                <h3 class="col4-h4-2">Category</h3>
                                <p>Category <a href="<?php echo BASE_URL;?>category/<?php echo $catSlug; ?>"><?php echo $catName; ?></a> </p>
                            </div>
                            <?php
                            $data_related = "SELECT * FROM `listing` "
                                    . "INNER JOIN category ON category.id = listing.catId "
                                    . "WHERE listing.catId = '$id' AND listing.status = 1 AND listing.listId != $listId  order by RAND() limit 5";
                            $data_related = queryRun($data_related, $debug = 3);
                            $data_related->num_rows;
                            ?>
                            <?php if ($data_related->num_rows > 0) { ?>
                                <div class="sidebar">
                                    <div class="adds">
                                        <h3 class="col4-h4-2">Related Activity</h3>
                                        <div class="sponserAdd">
                                            <div class="">
                                                <ul class="list-unstyled activity-stream p-3  rListed">
                                                    <?php
                                                    foreach ($data_related as $row) {
                                                        $listId = $row['listId'];
                                                        $total_review = total_review($listId);
                                                        $avg_rating = avg_rating($listId);
                                                        ?>
                                                        <li class="activity-stream--item sidebar-list">
                                                            <p class="mb-0 r_list">
                                                                <a href="<?php echo BASE_URL; ?>phone-number/<?php echo $row['website']; ?>" title="<?php echo $row['companyName']; ?>">
                                                                    <?php echo $row['companyName']; ?>                    
                                                                </a>
                                                                <?php
                                                                for ($i = 1; $i <= $avg_rating; $i++) {
                                                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                                }
                                                                for ($i = 1; $i <= 5 - $avg_rating; $i++) {
                                                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                                                }
                                                                ?>    
                                                                <?php if ($row['address'] != '') { ?>
                                                                                                                        <!--<p class="detail-2"><?php echo $row['address'] . ' ' . $row['zipcode'] . ' ' . $row['city'] . ' ' . $country_name; ?></p>-->
                                                                <?php } ?>
                                                            </p>
                                                        </li>
                                                    <?php }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <script id="mNCC" language="javascript">
                                        medianet_width = "300";
                                        medianet_height = "250";
                                        medianet_crid = "277943833";
                                        medianet_versionId = "3111299";
                                        </script>
                                    <script src="https://contextual.media.net/nmedianet.js?cid=8CUA94EB6"></script>
                                </div>
                            <?php }
                            ?>
                        </div>
                        <?php
                        $side_data = dbAction("sidebar_setting", $operation = 4, $form_data = "", "showPage=2 AND status =1");
                        $data_latest = dbAction("sidebar_setting", $operation = 4, $form_data = "", "showPage=2 AND status =1 AND showLatest =1 order by showLatest desc limit 1");
                        if ($side_data->num_rows > 0) {
                            foreach ($side_data as $ads_row) {
                                if ($ads_row['adsCode'] != '') {
                                    echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4 col-pdng">' . $ads_row['adsCode'] . '</div>';
                                }
                                if ($ads_row['mainAdsCode'] != '') {
                                    echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4 col-pdng">' . $ads_row['mainAdsCode'] . '</div>';
                                }
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- basic modal -->
        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Please Login First...</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <form class=" ci-login" action="<?php echo BASE_URL ?>webservices/login.php" method="POST" name="login_form" id="login_form">
                            <p><b>Please Sign up to post your review</b></p>
                            <div class="form-group">
                                <label>Your Email ID:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label>Account Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <p>
                                    <button class="btn btn-primary mb15" type="submit" id="login" name="login">Log in </button>
                                </p>
                                <p><a class="btn btn-warning mt15" style="line-height:30px;" href="<?php echo BASE_URL ?>signup">Don't have an account? Sign up here</a></p>
                            </div>
                            <div id="success-alert" class="alert alert-success" style=" display: none;"> </div>
                            <div id="error-alert" class="alert alert-danger" style="display: none;"> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        include '../temp/error-page.php';
    }
    ?>
    <?php include '../footer.php'; ?>
    <script src="../js/review.js"></script>
</body>
</html>
