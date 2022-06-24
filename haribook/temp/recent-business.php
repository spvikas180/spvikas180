<?php
$data = dbAction('listing', $operation = 4, $from_data = "", " where status = 1 order by date DESC limit 12");
//$data = queryRun($data, $debug = 3);
if ($data->num_rows > 0) {
    ?>
    <section class="bg-color3">
        <div class="container">
            <div class="row mb1-40">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-40">
                    <h3 class="text">Recent Business</h3>
                    <!--<p>Reviewers have given shout-outs to these companies for going above and beyond during the COVID-19 crisis.</p>-->
                </div>
                <?php
                foreach ($data as $row) {
                    $listId = $row['listId'];
                    $logo = $row['logo'];
                    if ($logo == '') {
                        $logo = BASE_URL . 'upload/business-logo/not-found.png';
                    } else {
                        $logo = BASE_URL . $logo;
                    }
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb1-40">
                        <div class="column bg-color4 review-padd">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="avatar" src="<?php echo $logo; ?>" alt="<?php echo $row['companyName']; ?>"> 
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 star-business">
                                <a class="write-review" href="<?php echo BASE_URL; ?>phone-number/<?php echo $row['website']; ?>"><?php echo $row['companyName']; ?></a>
                                <p><?php echo date('M j Y', strtotime($row['date'])); ?></p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="desp-div">
                                    <?php echo $row['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center homedes">
                    <h3 class="text">About <?php echo brand_title; ?></h3>
                    <p>
                        <?php echo brand_title; ?> was established back in 2019 with a principle to offer routine day to day services to the interested ones. It works similar to a mediator between the local customers and the businesses. <?php echo brand_title; ?> provides excellent opportunities for the local business owners to reach their potential customer through its organic traffic. It is also an effective platform for the customers to opt for the local services like doctors, dentists, plumbers, electricians, builders and many others.
                    </p>
                    <p>
                       As the world is getting digital, the local customers are also showing severe concern towards the digital means to search and opt for the services near them. That is why, nowadays, local businesses and entrepreneurs have a chance to promote their business online on <?php echo brand_title; ?>. Businesses can advertise their services on <?php echo brand_title; ?> in a productive way to attract local customers to their business.
                    </p>
                    <p>
                        By listing your business details on <?php echo brand_title; ?>, you get an immense chance to boost your sales with our online traffic. The small businesses owners can stack their businesses online with the open-handed help of <?php echo brand_title; ?> with relative ease.

                    </p>
                </div>
            </div>
        </div>
    </section>
<?php } ?>