<?php $testimonial = content('https://docs.google.com/spreadsheets/d/e/2PACX-1vRvC987TlhjNXv8ZljWmajB2xgd2COZ15wm0JThBDSMYt-NPKLcGGTb5MhEcbYIo6y63Ca9Nvqh1fFv/pub?gid=386378691&single=true&output=csv'); ?>
<?php //$testimonial=content('content/home/testimonials.csv');     ?>
<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="owl-carousel testimonial-slider">
                        <?php
                        $testiCol = 1;
                        for ($testiLoop = 0; $testiLoop < 3; $testiLoop++) {
                            ?>
                            <div class="single-testimonial">
                                <img src="<?php echo BASE; ?>images/testimonials/<?php echo $testimonial[$testiCol][2]; ?>.jpg" alt="<?php echo $testimonial[$testiCol][2]; ?>">
                                <h5><i>What Clients  Says</i></h5>
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i><i><?php echo $testimonial[$testiCol][1]; ?><i class="fa fa-quote-right" aria-hidden="true"></i></i></p>
                                <span> -<?php echo $testimonial[$testiCol][0]; ?></span>
                            </div>
                            <?php
                            $testiCol++;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>