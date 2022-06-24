<?php
$review_data = "SELECT *,rating_review.status as rstatus,rating_review.date as rdate,date_format(rating_review.date, '%b %e %Y') as formatted_date,users.email as uemail FROM `rating_review`"
        . " INNER JOIN users on rating_review.userId = users.id"
        . " INNER join listing on listing.listId = rating_review.listId where rating_review.listId = $listId AND rating_review.status = 1 order by rating_review.date desc";
$data_rating = queryRun($review_data, $debug = 3);
$rating_arr = $data_rating->fetch_assoc();


$que_star = "SELECT (SELECT COUNT(*) from rating_review WHERE rating = 1 AND listId=$listId AND status = 1) as oneStar,(SELECT COUNT(*) from rating_review WHERE rating = 2 AND listId=$listId AND status = 1) as twoStar,(SELECT COUNT(*) from rating_review WHERE rating = 3 AND listId=$listId AND status = 1) as threeStar,(SELECT COUNT(*) from rating_review WHERE rating = 4 AND listId=$listId AND status = 1) as fourStar,(SELECT COUNT(*) from rating_review WHERE rating = 5 AND listId=$listId AND status = 1) as fiveStar FROM `rating_review`";
$que_star = queryRun($que_star, $debug = 3);
$que_star_data = $que_star->fetch_assoc();

if ($total_review > 0) {
    $oneStarper = round(($que_star_data['oneStar'] * 100) / $total_review);
    $twoStarper = round(($que_star_data['twoStar'] * 100) / $total_review);
    $threeStarper = round(($que_star_data['threeStar'] * 100) / $total_review);
    $fourStarper = round(($que_star_data['fourStar'] * 100) / $total_review);
    $fiveStarper = round(($que_star_data['fiveStar'] * 100) / $total_review);
} else {
    $oneStarper = 0;
    $twoStarper = 0;
    $threeStarper = 0;
    $fourStarper = 0;
    $fiveStarper = 0;
}
?>

<?php
for ($i = 1; $i <= 5; $i++) {
    $data_rating_row = dbAction('rating_review', $operation = 4, $from_data = "", " where status = 1 AND rating = '$i' AND listId = '$listId'");
    if ($i == 1) {
        $rating_1 = $data_rating_row->num_rows;
    } elseif ($i == 2) {
        $rating_2 = $data_rating_row->num_rows;
    } elseif ($i == 3) {
        $rating_3 = $data_rating_row->num_rows;
    } elseif ($i == 4) {
        $rating_4 = $data_rating_row->num_rows;
    } elseif ($i == 5) {
        $rating_5 = $data_rating_row->num_rows;
    }
}
?>
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 plr bdr-r bdr-b" style=" overflow: hidden;">
    <?php
    if (isset($_SESSION['userId'])) {
        if ($users_data['pic'] == '') {
            $pic = BASE_URL . 'images/user.png';
        } else {
            $pic = BASE_URL . $users_data['pic'];
        }
        ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-color4 col-pdng mb-20">
            <form accept-charset="UTF-8" action="<?php echo BASE_URL ?>webservices/set_review.php" method="post" id="rating_form" class="rating_form">
                <input type="hidden" name="userId" id="userId" value="<?php echo $_SESSION['userId']; ?>" />
                <input type="hidden" name="listuserId" id="listuserId" value="<?php echo $userId; ?>" />
                <input type="hidden" name="listId" id="listId" value="<?php echo $listId; ?>" />  
                <input type="hidden" name="previewId" id="previewId" value="0" />  
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-xs-3">
                    <img src="<?php echo $pic ?>" class="avatar">
                </div>
                <div class="col-xl-11 col-lg-11 col-md-10 col-sm-9 col-xs-9">
                    <fieldset class="rating">
                        <input type="radio" id="star5" class="rating" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" class="rating" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" class="rating" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" class="rating" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" class="rating" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject" style="margin-top: 10px; height: 40px !important;">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <textarea class="form-control" id="review" name="review" placeholder="Write a review"></textarea>
                        <input id="review_submit" name="add_review" type="submit" value="Submit">
                    </div>
                    <div class="form-group">
                        <p id="error_rating"></p>
                    </div>
                </div>

            </form>
        </div>
    <?php } else {
        ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-color4 mb-20" style=" padding: 10px;">
            <div class="col-sm-12">
                <img src="../images/user.png" class="avatar" alt="user">
                <a class="write-review" name="review_modal" id="review_modal" data-toggle="modal" data-target="#basicModal">Write a review</a>
            </div>
        </div>
    <?php } ?>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-color4 col-pdng mb-20">
        <div class="side">
            <div>Excellent</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-5" style="width: <?php echo $fiveStarper; ?>%;"></div>
            </div>
        </div>
        <div class="side right2">
            <div><?php echo $fiveStarper; ?>%</div>
        </div>
        <div class="side">
            <div>Great</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-4" style="width: <?php echo $fourStarper; ?>%;"></div>
            </div>
        </div>
        <div class="side right2">
            <div><?php echo $fourStarper; ?>%</div>
        </div>
        <div class="side">
            <div>Average</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-3" style="width: <?php echo $threeStarper; ?>%;"></div>
            </div>
        </div>
        <div class="side right2">
            <div><?php echo $threeStarper; ?>%</div>
        </div>
        <div class="side">
            <div>Poor</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-2" style="width: <?php echo $twoStarper; ?>%;"></div>
            </div>
        </div>
        <div class="side right2">
            <div><?php echo $twoStarper; ?>%</div>
        </div>
        <div class="side">
            <div>Bad</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-1" style="width: <?php echo $oneStarper; ?>%;"></div>
            </div>
        </div>
        <div class="side right2">
            <div><?php echo $oneStarper; ?>%</div>
        </div>
    </div>

    <?php

    function categoryTree($parent_id = 0, $sub_mark = '', $catId, $listId) {
        $review_data = "SELECT *,rating_review.status as rstatus,rating_review.date as rdate,date_format(rating_review.date, '%b %e %Y') as formatted_date,users.email as uemail FROM `rating_review`"
                . " INNER JOIN users on rating_review.userId = users.id"
                . " INNER join listing on listing.listId = rating_review.listId where previewId = $parent_id AND rating_review.listId = $listId AND rating_review.status = 1 order by rating_review.date desc";
        $query = queryRun($review_data, $debug = 3);

//        $query = dbAction('category', $operation = 4, $from_data = "", "where catId = $parent_id AND catStatus = 1 order by catName asc");
        if ($query->num_rows > 0) {
            echo '<div class="" style="">';
            while ($row = $query->fetch_assoc()) {
                $rating = $row['rating'];
                $userPic = $row['pic'];
                if ($userPic == '') {
                    $userPic = BASE_URL . 'images/user.png';
                } else {
                    $userPic = BASE_URL . $userPic;
                }$starActive = '';
                $starDisable = '';
                for ($j = 1; $j <= $rating; $j++) {
                    $starActive .= '<i class="fa fa-star" aria-hidden="true"></i>';
                }
                for ($j = 1; $j <= 5 - $rating; $j++) {
                    $starDisable .= '<i class="fa fa-star-o" aria-hidden="true"></i>';
                }

                if (isset($_SESSION['userId'])) {
                    $replyBtn = '<p class="reply" id="' . $row['reviewId'] . '">Reply</p>';
                } else {
                    $replyBtn = '<p class="replyModel" id="replyModel" data-toggle="modal" data-target="#basicModal">Reply</p>';
                }

                echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-color4 col-pdng ' . $sub_mark . '" style="padding:15px; margin-bottom:15px;"><div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-xs-3"><img src="' . $userPic . '" class="avatar" alt="' . $row['name'] . '"></div><div class="col-xl-11 col-lg-11 col-md-10 col-sm-9 col-xs-9"><h5 class="un-h5">' . $row['name'] . '</h5>' . $starActive . $starDisable . '</div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr class="mb-0 mt-0"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 plr star-business"><h4 class="mb-0" style="font-style: italic;">' . $row['subject'] . '</h4></div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 plr"><h5 class="revDesc">' . $row['review'] . '</h5>' . $replyBtn . '</div></div></div>';
                categoryTree($row['reviewId'], $sub_mark . 'replyDiv ', $catId, $listId);
            }
            echo '</div>';
        }
    }
    ?>
    <?php categoryTree($parent_id = 0, $sub_mark = '', $catId, $listId); ?>
</div>
