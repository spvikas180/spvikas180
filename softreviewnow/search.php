<?php include("admin/control/config.php"); ?>
<?php include("temp/site-settings.php"); ?>
<?php
$urlPath = $_SERVER['REQUEST_URI'];
if (isset($_GET['query'])) {
    if ($_GET['query'] != '') {
        $search = @$_GET['query'];

        $listing_data = dbAction('listing', $operation = 4, $from_data = "", " where website = '$search'");
        if ($listing_data->num_rows > 0) {
//            header("location:" . BASE_URL . 'reviews/' . $search);
            echo '<script>window.location.href = "' . BASE_URL . 'reviews/' . $search . '"</script>';
        }

        $searchArr = explode(' ', $search);
        $sArr = '';
        for ($i = 0; $i < count($searchArr); $i++) {
            $sArr .= " OR catName LIKE '%$searchArr[$i]%' OR companyName LIKE '%$searchArr[$i]%' OR website LIKE '%$searchArr[$i]%'";
        }
        $rowperpage = 10;
        if (isset($_GET['page'])) {
            $page = @$_GET['page'];
            if ($page <= 1) {
                $start_limit = 0;
            } else {
                $start_limit = ($page - 1) * $rowperpage;
            }
        } else {
            $page = 1;
            $start_limit = 0;
        }
    } else {
        echo '<script>window.location.href = "' . BASE_URL . '"</script>';
    }
} else {
    echo '<script>window.location.href = "' . BASE_URL . '"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <title><?php echo 'You searched for ' . $search; ?></title>
        <meta name="description" content="<?php echo 'You searched for ' . $search; ?>">
        <meta name="keywords" content="<?php echo 'You searched for ' . $search; ?>">
        <?php include 'head.php'; ?>
        <script type="application/ld+json"> 
            { "@context": "https://schema.org", 
            "@type": "WebSite", 
            "url": "<?php echo BASE_URL; ?>", 
            "potentialAction": { 
            "@type": "SearchAction", 
            "target": "<?php echo BASE_URL; ?>search?q={search_term_string}", 
            "query-input": "required name=search_term_string" 
            } 
            } 
        </script>
    </head>
    <body class="cat-bg">
        <?php include 'header.php'; ?>

        <div class="container-fluid bg-color4 cat-dtls-header">
            <div class="container">
                <h1 class="cat-dtls-h1">Best in <?php echo $search; ?></h1>
                <h5 class="cat-dtls-h5">Top-rated businesses in the <?php echo $search; ?></h5>
            </div>
        </div>
        <section class="cat-dtls">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-color4 bdr-r col-pdng bdr-b">
                        <?php
                        $side_data = dbAction("sidebar_setting", $operation = 4, $form_data = "", "showPage=4 AND status =1");
                        $data_latest = dbAction("sidebar_setting", $operation = 4, $form_data = "", "showPage=4 AND status =1 AND showLatest =1 order by showLatest desc limit 1");
                        if ($side_data->num_rows > 0) {
                            foreach ($side_data as $ads_row) {
                                echo $ads_row['adsCode'];
                                echo $ads_row['mainAdsCode'];
                            }
                        }
                        ?>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-9-pdng bdr-l">
                        <?php
                        $data_search = "SELECT * FROM `listing`"
                                . " INNER JOIN category on listing.catId = category.id "
                                . " where companyName = '' $sArr GROUP BY companyName limit $start_limit,$rowperpage";

                        $pagination_data = "SELECT * FROM `listing`"
                                . " INNER JOIN category on listing.catId = category.id "
                                . " where companyName = '' $sArr GROUP BY companyName";

                        $data_search = queryRun($data_search, $debug = 3);
                        if ($data_search->num_rows > 0) {
                            echo '<h3>Top-rated companies</h3>';
                            foreach ($data_search as $row) {
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
                                            <!--<p class="detail-1"><?php //echo $catName;                                                              ?></p>-->
                                            <?php if ($row['address'] != '') { ?>
                                                <p class="detail-2"><?php echo $row['address'] . ' ' . $row['zipcode'] . ' ' . $row['city']; ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                            if (isset($_GET['query'])) {
                                if ($_GET['query'] != '') {
                                    $pageUrl = str_replace(' ', '+', $_GET['query']);
                                    $pagination_data = queryRun($pagination_data, $debug = 3);
                                    $url_page = BASE_URL . 'search?query=' . $pageUrl . '&page=';
                                    include 'temp/pagination.php';
                                }
                            }
                        } else {
                            ?>
                            <h3>Sorry, we couldn't find '<?php echo $search; ?>'</h3>
                            <p>This could be because there's a typo in your search, or because the business isn't on Trustpilot yet. Please check that you spelled the business name or domain correctly, or be the first person to review this business.</p>
                            <div id="errorDomain" class="alert alert-warning" role="alert"> </div>
                            <p class="plus" id="createdomain">+ Add new website</p>
                            <div class="row" id="recDiv">
                                <form id="domain_form" method="post" action="webservices/get_domain.php">
                                    <div class="col-sm-4">
                                        <input type="text" name="website" class="revinput form-control" placeholder="www.tispliot.com" required/>
                                    </div>
                                    <div class="col-sm-3">
                                        <button id="revbtn" class="btn revbtn btn-primary">Review this company</button>
                                    </div>
                                </form>
                            </div>

                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <script>
            $(document).ready(function () {
                $('#errorDomain').css("display", "none");
                $('#recDiv').css("display", "none");
                $('#createdomain').click(function () {
                    $('#createdomain').css("display", "none");
                    $('#recDiv').css("display", "block");
                });

                $('#revbtn').click(function () {
                    $('#errorDomain').css("display", "none");
                    var options = {
                        beforeSend: function () {
                            $('#revbtn').html('Loading <i class="fa fa-spinner fa-spin"></i>');
                        },
                        success: function (response) {
                            var json = $.parseJSON(response);
                            if (json.status == 'success') {
                                window.location.href = '<?php echo BASE_URL; ?>reviews/' + json.domain;
                                $('#revbtn').html('Review this company');
                            } else {
                                $('#revbtn').html('Review this company');
                                $('#errorDomain').html(json.msg);
                                $('#errorDomain').css("display", "block");
                            }
                        },
                        error: function (response) {
                            $('#error').html(response);
                            $('#revbtn').html('Review this company');
                        }
                    };
                    $('#domain_form').ajaxForm(options);
                });
            });
        </script>
    </body>
</html>
