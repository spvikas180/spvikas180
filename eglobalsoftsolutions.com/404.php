<?php include"config.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <?php
        $page_title = "404 error - Nexus Web World";
        $page_des = "page not found";
        $page_key = "404";
        ?>
        <!-- COMMON TAGS -->
        <?php include_once"head.php"; ?>	
    </head>
    <body class="common_body">
        <!-- Header Area -->
        <?php include"header.php"; ?>
        <?php include"temp-part/common-banner.php"; ?>
        <!--/ End Header Area -->
        <!-- 404 Error Page -->
        <section class="error">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="error-left">
                                    <h2>404</h2>
                                    <p><span>Opps!</span>Page Not Found!</p>
                                    <p class="p2">Sorry the Page Could not be Found here.<br>Try using the button below to go to main page of the site</p>
                                    <div class="button-head">
                                        <div class="button">
                                            <span></span>
                                            <a href="http://nexuswebworld.com/" class="btn">Go Back</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="error-right">
                                    <img class="img" src="<?php echo BASE; ?>images/error-img.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End 404 Error Page -->
        <!-- Footer Area -->
        <?php include"footer.php"; ?>
        <!--/ End Footer Area -->
    </body>
</html>