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
                                <a class="write-review" href="<?php echo BASE_URL; ?>reviews/<?php echo $row['website']; ?>"><?php echo $row['companyName']; ?></a>
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
                    <p>SoftReviewNow was set up back in 2019 with a rule to offer scheduled every day administrations to the intrigued ones. It has played a role as a mediator between the nearby clients and the organizations. SoftReviewNow gives fantastic freedoms to the nearby entrepreneurs to arrive at their expected client through its natural traffic. It is likewise a viable stage for the clients to choose the nearby administrations like specialists, dental specialists, handypersons, electrical experts, developers, and numerous others.</p>
                    <p>SoftReviewNow gives you the access to real reviews by real customers and the expert insights about a business. We only allow the reviews that can be trusted so that you never get misinformed about a business or their services. People just like you who are the real customers or users of a product or service share their experience with the businesses that they visit.</p>
                    <p>You already know the world is getting computerized, the nearby clients also show extreme worry towards the advanced means to look and pick the administrations close to them. That is the reason, these days, neighborhood organizations and business people get an opportunity to advance their business online on Writeme Review. Organizations can promote their administrations on SoftReviewNow in a useful manner to draw in nearby clients to their business.</p>
                    <p>By posting your business subtleties on SoftReviewNow, you get a massive opportunity to help your deals with our web-based traffic. The independent ventures proprietors can stack their organizations online with the charitable assistance of SoftReviewNow without hardly lifting a finger.</p>
                    <p>Obviously, if you interact with somebody you trust who works at an organization, you may keep thinking about whether you need to see worker surveys. SoftReviewNow helps you in several ways that cover the all-multiple sectors you need in your daily life. If you want to know more about SoftReviewNow, you have to check out our official SoftReviewNow.com website.</p>  
                </div>
            </div>
        </div>
    </section>
<?php } ?>