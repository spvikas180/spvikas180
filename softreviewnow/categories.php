<?php include("admin/control/config.php"); ?>
<?php include("temp/site-settings.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo $site_settings['site_title']; ?> Categories</title>
        <meta name="description" content="Discover and compare the best and most trusted companies on <?php echo $site_settings['site_title']; ?>, with over 4000+ categories to choose from.">
        <meta name="keywords" content="#">
        <?php include 'head.php'; ?>
    </head>
    <body class="cat-bg">
        <?php include 'header.php'; ?>

        <div class="container-fluid bg-color4">
            <div class="container">
                <h1 class="cat-h1">Compare the best companies on <?php echo brand_title; ?></h1>
            </div>
        </div>

        <?php
        $data = dbAction('category', $operation = 4, $from_data = "", ' where catStatus = 1 AND catId = 0 order by catName asc');
        ?>
        <section class="cat-mtb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 border-r col-padding border-b mb-20">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4 col-pdng">
                                <h3 class="cat-h3">View Category</h3>
                                <ul class="cat-list">
                                    <?php
                                    if ($data->num_rows > 0) {
                                        foreach ($data as $row) {
                                            ?>
                                            <li><a><?php echo $row['catName']; ?></a></li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <script id="mNCC" language="javascript">
                                medianet_width = "160";
                                medianet_height = "600";
                                medianet_crid = "974581725";
                                medianet_versionId = "3111299";
                                </script>
                            <script src="https://contextual.media.net/nmedianet.js?cid=8CUA94EB6"></script>
                            <?php
                            $side_data = dbAction("sidebar_setting", $operation = 4, $form_data = "", "showPage=3 AND status =1");
                            $data_latest = dbAction("sidebar_setting", $operation = 4, $form_data = "", "showPage=3 AND status =1 AND showLatest =1 order by showLatest desc limit 1");
                            if ($side_data->num_rows > 0) {
                                foreach ($side_data as $ads_row) {
                                    if ($ads_row['adsCode'] != '') {
                                        echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4  pd-t-15">' . $ads_row['adsCode'] . '</div>';
                                    }
                                    if ($ads_row['mainAdsCode'] != '') {
                                        echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4  pd-t-15">' . $ads_row['mainAdsCode'] . '</div>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>


                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 border-l">
                        <?php
                        if ($data->num_rows > 0) {
                            foreach ($data as $row) {
                                ?>
                                <div class="row border-b bg-color4 col-padding2 mb-20">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <h4 class="cat-h4"><a href="<?php echo BASE_URL;?>category/<?php echo $row['catSlug']; ?>"><?php echo $row['catName']; ?></a></h4>
                                    </div>
                                    <?php
                                    $data_sub = dbAction('category', $operation = 4, $from_data = "", ' where catId = ' . $row['id'] . '');
                                    if ($data_sub->num_rows > 0) {
                                        ?>
                                        <div class="col-sm-8">
                                            <ul class="cat-list2">
                                                <?php
                                                foreach ($data_sub as $row_sub) {
                                                    ?>
                                                    <li><a href="<?php echo BASE_URL;?>category/<?php echo $row_sub['catSlug']; ?>"><?php echo $row_sub['catName']; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                
            </div>
        </section>
        <?php include 'footer.php'; ?>
    </body>
</html>
