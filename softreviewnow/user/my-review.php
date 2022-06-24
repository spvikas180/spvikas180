<?php
$userId = $_SESSION['userId'];
$review_data = "SELECT *,rating_review.status as rstatus,date_format(rating_review.date, '%b %e %Y') as formatted_date,users.email as uemail FROM `rating_review`"
        . " INNER JOIN users on rating_review.userId = users.id"
        . " INNER join listing on listing.listId = rating_review.listId where rating_review.userId = $userId order by rating_review.date desc";
$data_rating = queryRun($review_data, $debug = 3);
?>
<h2>My Reviews</h2>
<div class="row">

    <?php
    if ($data_rating->num_rows > 0) {
        foreach ($data_rating as $review_edit_row) {
            $rating = $review_edit_row['rating'];
            $userPic = $review_edit_row['pic'];
            if ($userPic == '') {
                $userPic = BASE_URL . 'images/user.png';
            } else {
                $userPic = BASE_URL . $userPic;
            }
            ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col12-pd2 mb-20">
                <div class="col-md-12">
                    <p>Review of <a href="#"><?php echo $review_edit_row['companyName']; ?></a></p>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-xs-3">
                    <img src="<?php echo $userPic; ?>" class="avatar" alt="<?php echo $review_edit_row['name']; ?>">
                </div>
                <div class="col-xl-11 col-lg-11 col-md-10 col-sm-9 col-xs-9">
                    <h5 class="user-h5"><?php echo $review_edit_row['name']; ?></h5>
                    <?php echo $review_edit_row['formatted_date']; ?>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <hr>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 plr">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $active_star = $rating;
                            $disactive_star = 5 - $active_star;
                        }
                        ?>
                        <p>
                            <?php for ($i = 1; $i <= $active_star; $i++) { ?>
                                <i class="fa fa-star"></i>
                            <?php } ?>
                            <?php for ($i = 1; $i <= $disactive_star; $i++) { ?>
                                <i class="fa fa-star-o"></i>
                            <?php } ?>
                        </p>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 plr">
                        <h5><b><?php echo $review_edit_row['subject']; ?></b></h5>
                        <hr>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 plr">
                        <h5 class="re-content"><?php echo $review_edit_row['review']; ?></h5>
                        <hr>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 plr">
                        <ul class="icon-ul">
                            <li><a class="editReview reviewBtn" id="<?php echo $review_edit_row['reviewId']; ?>"><i class="fa fa-edit" aria-hidden="true"></i>Edit</a></li>
                            <li><a class="deleteReview reviewBtn" id="<?php echo $review_edit_row['reviewId']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
                            <?php if ($review_edit_row['rstatus'] == 0) { ?>
                                <li><a href="#" style="color: #0095ff;"><i class="fa fa-clock-o" aria-hidden="true"></i>Pending...</a></li>
                            <?php } else { ?>
                                <li><a href="#" style="color: #0fa70f;"><i class="fa fa-check" aria-hidden="true"></i>Active</a></li>
                            <?php } ?>

                        </ul>
                    </div>

                </div>
            </div>
            <?php
        }
    } else {
        echo '<h5>You Haven`t added any review.</h5>';
    }
    ?>
</div>

<!-- Trigger/Open The Modal -->
<!--<button id="myBtn">Open Modal</button>-->
<!-- The Modal -->
<div id="editModel" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" data-dismiss="modal" aria-label="Close">&times;</span>
            <h3>Review of <span id="compRev"></span></h3>
        </div>
        <div class="modal-body">
            <br>
            <form method="post" id="data_form_review" action="../webservices/set_review.php">
                <input type="hidden" name="id" id="reviewId"/>
                <div class="form-group ">
                    <label for="rating" class="">Rating *</label>
                    <select class="form-control" id="rating" name="rating">
                        <option value="1">1 Star</option>
                        <option value="2">2 Star</option>
                        <option value="3">3 Star</option>
                        <option value="4">4 Star</option>
                        <option value="5">5 Star</option>
                    </select>     
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="review" class="control-label">Review *</label>
                    <textarea class="form-control" name="review" id="review" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit_btn_reviewUpdate" name="update_review" class="btn btn-primary" style="width: 150px;">Update Review</button>
                </div>
                <div class="form-group">
                    <p>
                        <b>Note : </b>If you update then your review went into pending.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>