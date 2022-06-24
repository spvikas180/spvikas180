<?php //$services=content('https://docs.google.com/spreadsheets/d/e/2PACX-1vRvC987TlhjNXv8ZljWmajB2xgd2COZ15wm0JThBDSMYt-NPKLcGGTb5MhEcbYIo6y63Ca9Nvqh1fFv/pub?gid=1869832709&single=true&output=csv'); ?>

<?php $services=content('content/home/services.csv'); ?>

<section class="tisServices">

    <div class="container">

    	<div class="section-title">

			<h2><?php echo $services[1][0]; ?></h2>

			<p><?php echo $services[1][1]; ?></p>

		</div>

    </div>



    <div class="container">



        <div class="row tabcont">



            <div class="col-md-12 service_result">



                <ul id="myUL">

                    <?php $serviceCol=2; for ($serLoop=0; $serLoop < 14; $serLoop++) {  ?>

                        <li class="service_design " data-aos="zoom-out-up">



                        <a href="<?php echo $services[$serviceCol][3]; ?>">



                            <span class="fa fa-<?php echo $services[$serviceCol][2]; ?> mbr-iconfont"></span>



                            <div>



                                <b><?php echo $services[$serviceCol][0]; ?></b>



                                <p><?php echo $services[$serviceCol][1]; ?></p>



                            </div>



                        </a>



                    </li>

            <?php $serviceCol++;   } ?>



                </ul>



            </div>



        </div>



    </div>

</section>

