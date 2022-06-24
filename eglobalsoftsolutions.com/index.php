<?php include"config.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <?php
        $page_title = "Digital Marketing Company - SEO, SMO, PPC, Web Designing Agency - Nexus Web World";
        $page_des = "We provide premier SEO, SMO, PPC, website designing, web development, graphics designing, WordPress development solution, E-commerce solution, and search engine optimization services across the world. Avail our services and get quality results at affordable rates.";
        $page_key = "SEO, SMO, PPC, website designing, web development, graphics designing, wordpress development solution, e-commerce solution, digital marketing";
        ?>
        <!-- COMMON TAGS -->
        <?php include_once"head.php"; ?>	
    </head>
    <body class="home">

        <!-- Header Area -->
        <?php include"header.php"; ?>
        <!--/ End Header Area -->

        <!-- Slider Area -->
        <?php include"temp-part/slider.php"; ?>
        <!--/ End Slider Area -->
        <!-- features Area -->
        <?php include"temp-part/feature.php"; ?>
        <!--/ End features Area -->
        <?php //include"temp-part/portfolio.php"; ?>
        <div id="contentAfter">
            <div id="lodingData">
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
            </div>
        <?php //include"temp-part/usp.php"; ?>
        <?php //include"temp-part/portfolio.php"; ?>
        <?php //include"temp-part/testimonials.php"; ?>
        <?php //include"temp-part/process.php"; ?>
        </div>
        <!-- Footer Area -->
        <?php include"footer.php"; ?>
        <link rel="stylesheet" href="<?php echo BASE; ?>css/animate-text.css">
        <!-- <link rel="stylesheet" href="<?php echo BASE; ?>css/aos.css"> -->
        <!--/ End Footer Area -->

        <script src="<?php echo BASE; ?>js/jquery.nav.js"></script>
        <script src="<?php echo BASE; ?>js/animate-text.js"></script>
        <!-- <script src="<?php echo BASE; ?>js/aos.js"></script> -->
        <script> //AOS.init();</script>
        <script>
          $(document).ready(function(){
            var counter=0;
            $(window).scroll(function () {
                if ($(window).scrollTop() > 100 && counter < 1) {
                    appendData();
                }
            });
            function appendData() {
                $.ajax({
                    type:'POST',
                    url:'getData.php',
                    success:function(html){
                        $('#contentAfter').append(html);
                        $("#lodingData").hide();
                    }
                });
                counter++;  
            }
        });
        </script>
        <script src="<?php echo BASE; ?>js/particles.min.js"></script>
        <!-- <script src="<?php echo BASE; ?>js/cris.js"></script> -->
        <?php ob_end_flush(); ?>
    </body>
</html>