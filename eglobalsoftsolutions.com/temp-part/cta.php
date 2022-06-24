<?php
//$cta = content('https://docs.google.com/spreadsheets/d/e/2PACX-1vSjxnc_v9wnph8eg7o5VNpFncwKI-CzsZVCkdwwvmQGL1R8FWqD1vFm8LpduAlR3EJowbVYmSeVQBek/pub?output=csv');
$cta=content('content/home/cta.csv'); 
?>
<div class="calToAction">
    <div class="container">
        <div class="cta_box effect2" >
            <div class="row">
                <div class="col-md-8">
                    <h6><?php echo $cta[1][0]; ?></h6>
                    <b><?php echo $cta[1][1]; ?></b>
                    <p><?php echo $cta[1][2]; ?></p>
                </div>
                <div class="col-md-4">
                    <div class="egs_button pull-right">
                        <div class="button">
                            <span></span>
                            <a href="<?php echo BASE; ?><?php echo $cta[1][3]; ?>" class="btn">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>