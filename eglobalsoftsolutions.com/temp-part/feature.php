
<section id="features" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title box">
                    <h2><?php echo $features[1][0]; ?></h2>
                    <p><?php echo $features[1][1]; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-left">
                    <img src="<?php echo img('images/who-we-are.png'); ?>" alt="who we are">
                </div>	
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 ">
                <div class="feature-right">
                    <?php
                    $featuresCol = 2;
                    for ($feaLoop = 0; $feaLoop < 4; $feaLoop++) {
                        ?>
                        <div class="single-right">
                            <i class="fa fa-<?php echo $features[$featuresCol][2]; ?>" aria-hidden="true"></i>
                            <div class="right-content">
                                <h3><?php echo $features[$featuresCol][0]; ?></h3>
                                <P><?php echo $features[$featuresCol][1]; ?></P>
                            </div>
                        </div>
                        <?php
                        $featuresCol++;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>