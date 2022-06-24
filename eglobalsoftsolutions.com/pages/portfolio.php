<section id="latest-works" class="latest-works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Our Works</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <ul id="filters" class="clearfix">
                <li><span class="filter active" data-filter=".homeSer, .realestate, .health, .restobars, .restobars, .edu, .delivery">All</span></li>
                <li><span class="filter" data-filter=".homeSer">Home Services</span></li>
                <li title="Real Estate Companies & agents"><span class="filter" data-filter=".realestate">Real Estate</span></li>
                <li title="Health, Fitness & Doctors"><span class="filter" data-filter=".health">Health, Fitness & Doctors</span></li>
                <li title="Restobars"><span class="filter" data-filter=".restobars">Restobars</span></li>
                <li><span class="filter" data-filter=".web">Business & Legal services</span></li>
                <li title="Educational"><span class="filter" data-filter=".edu">Educational</span></li>
                <li title="Delivery"><span class="filter" data-filter=".delivery">Delivery</span></li>
            </ul>

        <div id="portfoliolist">
            <?php $list = array(
                'homeSer' => "Home Services",
                'realestate' => "Real Estats",
                'health' => "Health & Doctors",
                'restobars' => "Restobars",
                'web' => "Business & Legal services",
                'edu' => "Educational",
                'delivery' => "Delivery"
            );
            $i=1;
            foreach ($list as $key => $value) { $imgName=str_replace(" ", "-", $value); ?>
                <div class="portfolio <?php echo $key; ?>" data-cat="<?php echo $key; ?>">
                <div class="portfolio-wrapper">             
                    <img src="<?php echo BASE; ?>images/cats/<?php echo strtolower($imgName); ?>.png" alt="<?php echo $value; ?>" />
                    <div class="label">
                        <div class="label-text">
                            <span class="text-category"><?php echo $value; ?></span>
                            <ul>
                            <?php 
                            $data=tis_confiq($key);
                            foreach ($data as $subKey => $subValue) { $liksName=str_replace(" ", "-", $subValue);
                            $idName=str_replace("&", "-", $liksName);
                            $idName=str_replace("/", "-", $idName); ?>
                                <li><a href="#<?php echo $idName; ?>" class="text-title" data-toggle="modal" ><?php echo $subValue; ?></a>
                                <div class="modal fade" id="<?php echo $idName; ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                                                <h4 class="modal-title" style="text-align:center;color: #333;"><?php echo $subValue; ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul>
                                                    <?php $liks=linksExm($subValue);
                                                    $demo=1;
                                                    foreach ($liks as $liksKey => $liksValue) { ?>
                                                        <li><a href="<?php echo $liksValue; ?>" rel="nofollow"  class="text-title" target="_blank">Demo <?php echo $demo; ?></a></li>
                                                    <?php $demo++; } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                           <?php } ?>
                         </ul>
                        </div>
                        <div class="label-bg"></div>
                    </div>
                </div>
            </div>
           <?php $i++; } ?>                        
            
        </div>
        
    </div><!-- container -->
    </div>
</section>
<style>
    .modal-backdrop{z-index: 9 !important;}
    @media(max-width: 768px){
        #portfoliolist .portfolio {width: 100%;}
    .portfolio .label {opacity: 1;position: initial;}
    .portfolio .label li a {font-size: 9px;padding: 3px;}
    .portfolio img {display: none;}
    }
</style>