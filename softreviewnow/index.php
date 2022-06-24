<?php include("admin/control/config.php"); ?>
<?php
// echo $password = substr(do_hash('admin'), 0, 32);
include("temp/site-settings.php");
$page = 'home';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo $site_settings['site_title']; ?></title>
        <meta name="description" content="<?php echo $site_settings['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $site_settings['meta_keywords']; ?>">
        <?php include 'head.php'; ?>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <!-- Hero Bg-->
        <section class="hero">
            <div class="container text-center">
                <div class="row padding">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <h1 class="h1-tittle"><?php echo $site_settings['home_title']; ?></h1>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <h3 class="h3-tittle">Read reviews. Write reviews. Find companies.</h3>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-20 text-center">
                        <div class="example">
                            <form method="get" action="<?php echo BASE_URL; ?>search">
                                <div class="col-sm-offset-2 col-sm-6 col-xs-9 p0">
                                    <div class="input-with-icon">
                                        <div class="typeahead__container">
                                            <div class="typeahead__field">
                                                <div class="typeahead__query">
                                                    <input type="search" name="query" class="js-typeahead-car_v1 stuff_home" placeholder="Search..." id="stuff" required autocomplete="off"/> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-3 p0">
                                    <button id="searchBtn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Bg End-->

        <!-- recent-review -->
        <?php include 'temp/categories.php'; ?>
        <!-- recent-review End-->
        
        <!-- recent-review -->
        <?php include 'temp/recent-review.php'; ?>
        <!-- recent-review End-->
        
        <!-- recent-review -->
        <?php include 'temp/recent-business.php'; ?>
        <!-- recent-review End-->

        

        <?php include 'footer.php'; ?>
    </body>
</html>
