<?php
include"config.php";
include"content/content-management.php";
?>
<?php 
include"temp-part/services.php";
 include"temp-part/usp.php";
 include"temp-part/portfolio.php";
 // include"temp-part/testimonials.php";
include"temp-part/process.php";
 ?>
 <link rel="stylesheet" href="<?php echo BASE; ?>css/owl.carousel.min.css">
<script src="<?php echo BASE; ?>js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        var owl = $('.portFolio');
        owl.owlCarousel({
            items: 5,
            loop: true,
            margin: 15,
            autoplay: true,
            dots: false,
            autoplayHoverPause: true
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000]);
        });
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay');
        });
    });

    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 15,
            autoplay: true,
            dots: false,
            autoplayHoverPause: true
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000]);
        });
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay');
        });
    });
</script>
