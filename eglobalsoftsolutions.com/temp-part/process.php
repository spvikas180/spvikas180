<?php //$process=content('https://docs.google.com/spreadsheets/d/e/2PACX-1vRvC987TlhjNXv8ZljWmajB2xgd2COZ15wm0JThBDSMYt-NPKLcGGTb5MhEcbYIo6y63Ca9Nvqh1fFv/pub?gid=1673632848&single=true&output=csv'); ?>

<?php $process=content('content/home/process.csv'); ?>

<section class="work_process">

    <div class="overlay">

        <div class="container">

        <br>

        <div class="section-title">

            <h4>Our Work <span>Process</span></h4>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="main-workProcess">

                    <?php $processCol=1; for ($processLoop=0; $processLoop < 4; $processLoop++) {  ?>

                            <div class="workProcess" data-aos="zoom-out-up">

                                <div class="workProcess-icon"><span class="i_con"><i class="fa fa-<?php echo $process[$processCol][2]; ?>"></i></span></div>

                                <div class="workProcess-content">

                                    <h3 class="title"><?php echo $process[$processCol][0]; ?></h3>

                                    <p class="description"><?php echo $process[$processCol][1]; ?></p>

                                </div>

                            </div>

                        <?php $processCol++; } ?>

                </div>

            </div>

            <div class="col-md-6">

            </div>

        </div>

    </div>

    </div>

</section>

<!-- <section class="work-porcess-area section">

    <div class="container">

    <div class="section-header">

      <h2>E-GSS Work Process</h2>

      <p>Lorem Ipsum is simply dummy text of the printing.</p>

    </div>

        <div class="process-info">

            <div class="row">

                <div class="col-md-3">

                    <div class="single-process first text-center">

                        <i class="fa fa-search"></i>

                        <h4>Prepare a Strategy</h4>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="single-process secend text-center">

                        <i class="fa fa-cog"></i>

                        <h4>Design the Roadmap</h4>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="single-process thard text-center">

                        <i class="fa fa-globe"></i>

                        <h4>Develop the Project</h4>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="single-process last text-center">

                        <i class="fa fa-rocket"></i>

                        <h4>Swift execution</h4>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section> -->