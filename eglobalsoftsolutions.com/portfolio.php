<?php include"config.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page_title = "Portfolio - Nexus Web World";
        $page_des = "";
        $page_key = "";
        $pageName = "";
        ?>
        <?php include_once"head.php"; ?>
        <?php
        $page = "portfolio.php";
        $path = "pages";
        $fileName = scandir($path, 1);
        $indirName = array_search($page, $fileName);
        $flatName = str_replace(".php", "", $page);
        ?>
        <link rel="stylesheet" href="<?php echo BASE; ?>css/pages/portfolio.css">
        <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
        <link rel="stylesheet" href="<?php echo BASE; ?>css/owl.carousel.min.css">
    </head>
    <body class="common_body">
        <?php include_once"header.php"; ?>
        <?php include_once"temp-part/common-banner.php"; ?>
        <section class="page_wrapper">
            <?php
            if (in_array($page, $fileName)) {
                include_once $path . "/" . $page;
            } else {
                echo "<h1>Unvarified page</h1>";
            }
            ?>
        </section>
        <?php include_once"footer.php"; ?>
        <script src="<?php echo BASE; ?>js/pages/portfolio.js"></script>

<script src="<?php echo BASE; ?>js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        var owl = $('.single-pf');
        owl.owlCarousel({
            item:1,
            autoplay: true,
            dots: false
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000]);
        });
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay');
        });
    });
</script>
        <script >
            $(function () {
                
                var filterList = {
                
                    init: function () {
                    
                        $('#portfoliolist').mixItUp({
                        selectors: {
                          target: '.portfolio',
                          filter: '.filter' 
                      },
                      load: {
                      filter: '.homeSer, .realestate, .health, .restobars, .restobars, .edu, .delivery'  
                    }     
                        });                             
                    
                    }

                };
                
                filterList.init();
                
                
            });
            </script>
    </body>
</html>