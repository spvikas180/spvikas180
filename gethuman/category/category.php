<?php include("../admin/control/config.php"); ?>
<?php include("../temp/site-settings.php"); ?>
<?php
$domain = $_SERVER['HTTP_HOST'];
$urlPath = $_SERVER['REQUEST_URI'];
$urlArr = explode('/', $urlPath);

$rowperpage = 10;

if (isset($_GET['page'])) {
    $page = @$_GET['page'];
    $page = str_replace(".php", "", $page);
    if ($page <= 1) {
        $start_limit = 0;
    } else {
        $start_limit = ($page - 1) * $rowperpage;
    }
} else {
    $page = 1;
    $start_limit = 0;
}


if ($domain == 'localhost') {
    $catSlug = $urlArr[3];
    $urlArr = explode('&', $catSlug);
    $catSlug = $urlArr[0];
} else {
    $catSlug = $urlArr[3];
    $urlArr = explode('&', $catSlug);
    $catSlug = $urlArr[0];
}


$data_cat = dbAction('category', $operation = 4, $from_data = "", " where catStatus = 1 AND catSlug = '$catSlug' ");
if ($data_cat->num_rows > 0) {
    foreach ($data_cat as $row_cat) {
        $id = $row_cat['id'];
        $subCatId = $row_cat['catId'];
        $catName = $row_cat['catName'];
        $catTitle = $row_cat['catTitle'];
        $catMetaDesc = $row_cat['catMetaDesc'];
        $catMetaKey = $row_cat['catMetaKey'];
        $catDate = $row_cat['catDate'];
        if ($catTitle == '' || empty($catTitle)) {
            $catTitle = 'Top Rated ' . $catName . ' Companies on ' . brand_title . '';
        }
        if ($catMetaKey == '' || empty($catMetaKey)) {
            $catMetaKey = $catName;
        }
        if ($catMetaDesc == '' || empty($catMetaDesc)) {
            $catMetaDesc = 'Quickly find and compare all the top-rated ' . $catName . ' companies on ' . brand_title . ', and add your own experiences.';
        }

        if ($subCatId == 0) {
            $cat_id = $id;
            $whereCatId = 'catId';
        } else {
            $cat_id = $subCatId;
            $whereCatId = 'catId';
        }
    }
    $data = "SELECT * FROM `listing` "
            . "INNER JOIN category ON category.id = listing.catId "
            . "WHERE listing.catId = '$id' AND listing.status = 1 order by verified desc, listing.date desc LIMIT $start_limit,$rowperpage";
    $data = queryRun($data, $debug = 3);
} else {
//    header("location:" . BASE_URL . '404');
    $catTitle = '404 Not Found';
}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title><?php echo $catTitle; ?></title>
        <meta name="description" content="<?php echo @$catMetaDesc; ?>">
        <meta name="keywords" content="<?php echo @$catMetaKey; ?>">
        <?php include '../head.php'; ?>
    </head>
    <body class="cat-bg">
        <?php include '../header.php'; ?>
        <?php
        if ($data_cat->num_rows > 0) {
            ?>
            <div class="container-fluid bg-color4 cat-dtls-header">
                <div class="container">
                    <h4 class="cat-dtls-h4"><i class="fa fa-angle-left i-r" aria-hidden="true"></i><a href="<?php echo BASE_URL;?>categories">All Categories</a></h4>
                    <h1 class="cat-dtls-h1">Best in <?php echo $catName; ?></h1>
                    <h5 class="cat-dtls-h5">Top-rated businesses in the <?php echo $catName; ?></h5>
                </div>
            </div>

            <section class="cat-dtls">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 bdr-r col-pdng bdr-b">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-4-pdng mb-20 bg-color4">
                                    <h3>Category</h3>
                                    <ul class="cat-dtl-list">
                                        <li><a href="<?php echo BASE_URL;?>categories"><i class="fa fa-angle-left i-r" aria-hidden="true"></i> View all categories</a>
                                            <ul>
                                                <?php
                                                $data_side_cat = dbAction('category', $operation = 4, $from_data = "", ' where catStatus = 1 AND catId = 0 AND id= ' . $cat_id . '');
                                                if ($data_side_cat->num_rows > 0) {
                                                    foreach ($data_side_cat as $data_side_cat_row) {
                                                        ?>
                                                        <li class="bold"><?php echo $data_side_cat_row['catName']; ?>
                                                            <?php
                                                            $data_sub = dbAction('category', $operation = 4, $from_data = "", ' where catId = ' . $data_side_cat_row['id'] . '');
                                                            if ($data_sub->num_rows > 0) {
                                                                ?>
                                                                <ul class="cat-dtl-sublist">
                                                                    <?php
                                                                    foreach ($data_sub as $row_sub) {
                                                                        ?>
                                                                        <li><a href="<?php echo BASE_URL;?>category/<?php echo $row_sub['catSlug']; ?>"><?php echo $row_sub['catName']; ?> </a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                                <?php
                                                            }
                                                            ?>
                                                        </li>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                    <!-- Haribook -->
                                    <ins class="adsbygoogle"
                                         style="display:block"
                                         data-ad-client="ca-pub-6866852057377013"
                                         data-ad-slot="2763129718"
                                         data-ad-format="auto"
                                         data-full-width-responsive="true"></ins>
                                    <script>
                                         (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
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
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-9-pdng bdr-l">
                            <h3>Top-rated companies</h3> 
                            <?php
                            if ($data->num_rows > 0) {
                                foreach ($data as $row) {
                                    $listId = $row['listId'];
                                    if ($row['logo'] == '') {
                                        $listLogo = 'upload/business-logo/not-found.png';
                                    } else {
                                        $listLogo = $row['logo'];
                                    }
                                    $total_review = total_review($listId);
                                    $avg_rating = avg_rating($listId);
                                    ?>
                                    <a href="<?php echo BASE_URL; ?>reviews/<?php echo $row['website']; ?>">
                                        <div class="row row-pdng bg-color4">
                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                <img src="<?php echo BASE_URL . $listLogo; ?>" class="max-width" alt="<?php echo $row['companyName']; ?>">
                                            </div>
                                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                <h4 class="heading-h4"><?php echo $row['companyName']; ?></h4>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-12 plr star-business">
                                                    <?php
                                                    for ($i = 1; $i <= $avg_rating; $i++) {
                                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    }
                                                    for ($i = 1; $i <= 5 - $avg_rating; $i++) {
                                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-xs-12 plr">
                                                    <p class="star-p"><?php echo $total_review; ?> reviews . <?php echo brand_title . ' Score ' . $avg_rating; ?></p>
                                                </div>
                                                <!--<p class="detail-1"><?php echo $catName; ?></p>-->
                                                <?php if ($row['address'] != '') { ?>
                                                    <p class="detail-2"><?php echo $row['address'] . ' ' . $row['zipcode'] . ' ' . $row['city']; ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                                $pagination_data = "SELECT * FROM `listing` INNER JOIN category ON category.id = listing.catId WHERE listing.catId = '$id' AND listing.status = 1";
                                $pagination_data = queryRun($pagination_data, $debug = 3);
//                                        $pagination_data = dbAction('listing', $operation = 4, $from_data = "", " where status = 1 AND companySlug = '$catSlug'");
                                $url_page = BASE_URL . 'category/' . $catSlug . '&page=';
                                include '../temp/pagination.php';
                            } else {
                                echo 'Search not match';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        } else {
            include '../temp/error-page.php';
        }
        ?>
        <?php include '../footer.php'; ?>
    </body>
</html>
