
<section class="egs_services egs_usp">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="usp">
                    <img src="<?php img('images/web-development.png'); ?>" alt="web development">
                    <div class="des_ser">
                        <h4><?php echo $ourValues[1][0]; ?></h4>
                        <h6><?php echo $ourValues[1][1]; ?></h6>
                        <p><?php echo $ourValues[1][2]; ?></p>
                        <div class="egs_button">
                            <div class="button">
                                <span></span>
                                <a href="#" class="btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <?php
                $col = 2;
                for ($ethos = 0; $ethos < 4; $ethos++) {
                    ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="serviceBox" data-aos="zoom-out-up">
                            <div class="service-icon"><i class="fa fa-<?php echo $ourValues[$col][3]; ?>"></i></div>
                            <h3 class="title"><?php echo $ourValues[$col][0]; ?></h3>
                            <p class="description"><?php echo $ourValues[$col][2]; ?></p>
                        </div>
                    </div>
                    <?php
                    $col++;
                }
                ?>

            </div>
        </div>
    </div>
</section>