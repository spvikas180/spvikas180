<?php
$data = "SELECT * FROM `rating_review`"
        . " INNER JOIN users on users.id = rating_review.userId"
        . " INNER JOIN listing on listing.listId = rating_review.listId"
        . " WHERE listing.status = 1 AND rating_review.status = 1 order by rating_review.date desc LIMIT 12";
$data = queryRun($data, $debug = 3);
if ($data->num_rows > 0) {
    ?>
<section class="bg-color3 pad-tb" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-40">
                    <h3 class="text">Recent reviews</h3>
                    <p>Reviewers have given shout-outs to these companies for going above and beyond during the COVID-19 crisis.</p>
                </div>
                <?php
                foreach ($data as $row) {
                    $listId = $row['listId'];
                    $rating = $row['rating'];
                    $userPic = $row['pic'];
                    if ($userPic == '') {
                        $userPic = BASE_URL . 'images/user.png';
                    } else {
                        $userPic = BASE_URL . $userPic;
                    }
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb1-40">
                        <div class="column bg-color4 review-padd">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="avatar" src="<?php echo $userPic; ?>" alt="<?php echo $row['companyName']; ?>"> 
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 star-business">
                                <?php
                                for ($j = 1; $j <= $rating; $j++) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                }
                                for ($j = 1; $j <= 5 - $rating; $j++) {
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                }
                                ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p class="name"><?php echo $row['name']; ?> <span>reviewed</span> <a class="write-review" href="<?php echo BASE_URL; ?>phone-number/<?php echo $row['website']; ?>"><?php echo $row['companyName']; ?></a></p>
                                <div class="desp-div"><?php echo $row['review']; ?></div>
                            </div>
                            
                        </div>
                    </div>
                <?php } ?>
            </div>
            
            
            
        </div>
    </section>
<?php } ?>