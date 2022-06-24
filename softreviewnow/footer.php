<!-- Footer -->
<section class="footer bg-color">
    <div class="container">
<!--        <div class="row row-margin">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img src="<?php echo BASE_URL; ?>images/logo.png" alt="<?php echo $site_settings['site_title']; ?>">
            </div>
        </div>-->
        <div class="row row-margin">	
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h4 class="h4-tittle">About</h4>
                <ul class="list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>	
                    <li><a href="<?php echo BASE_URL; ?>blog/">Blog</a></li>
                    <li><a href="<?php echo BASE_URL; ?>sitemap.xml">Sitemap</a></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h4 class="h4-tittle">Community</h4>
                <ul class="list">
                    <li><a href="<?php echo BASE_URL; ?>login">Log in</a></li>	
                    <li><a href="<?php echo BASE_URL; ?>signup">Sign up</a></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <?php
                $data_popular = dbAction('blogs', $operation = 4, $from_data = "", " where blogStatus = 1 AND blogDraft = 1 order by blogCreated desc limit 4");
                if ($data_popular->num_rows > 0) {
                    ?>
                    <h4 class="h4-tittle">Latest Post</h4>
                    <ul class="list">
                        <?php
                        foreach ($data_popular as $popular_row) {
                            ?>
                            <li>
                                <a href="<?php echo BASE_URL . 'blog/' . $popular_row['blogInfo']; ?>">
                                    <?php echo $popular_row['blogTitle']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php
                }
                ?>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h4 class="h4-tittle">Follow us on</h4>
                <ul class="list2">
                    <?php if ($site_settings['fb_page'] != '') { ?>
                        <li><a href="<?php echo $site_settings['fb_page']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <?php }
                    ?>
                    <?php if ($site_settings['twitter_link'] != '') { ?>
                        <li><a href="<?php echo $site_settings['twitter_link']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <?php }
                    ?>
                    <?php if ($site_settings['pinterest_link'] != '') { ?>
                        <li><a href="<?php echo $site_settings['pinterest_link']; ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>	
                    <?php }
                    ?>
                    <?php if ($site_settings['google_pluse_link'] != '') { ?>
                        <li><a href="<?php echo $site_settings['google_pluse_link']; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <?php }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 plr">

                <ul class="btm-list">
                    <?php
                    $data_page = dbAction("pages", $operation = 4, $from_data = "", " where status = 1");
                    if ($data_page->num_rows > 0) {
                        foreach ($data_page as $row_page) {
                            $pageName = $row_page["pageName"];
                            $pageSlug = $row_page["pageSlug"];
                            ?>
                            <li> 
                                <a class="up_case" href="<?php echo BASE_URL ?><?php echo $pageSlug; ?>">
                                    <?php echo $pageName; ?>
                                </a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <p class="copyright">&copy; 2020 <?php echo brand_title; ?>, Inc. All rights reserved.</p>
            </div>
        </div>
    </div>	
</section>
<!-- Footer End -->
<script src="<?php echo BASE_URL; ?>js/select.js"></script>
<script src="<?php echo BASE_URL; ?>js/jquery-2.1.1.js"></script>
<script src="<?php echo BASE_URL; ?>js/jquery.form.min.js"></script>
<script src="<?php echo BASE_URL; ?>js/jquery.mobile.custom.min.js"></script>
<script src="<?php echo BASE_URL; ?>js/main.js"></script>
<script src="<?php echo BASE_URL ?>js/typeahead.min.js"></script>
<?php include 'js/typeahead.php'; ?>
