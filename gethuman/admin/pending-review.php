<?php
//SELECT *,rating_review.status as rstatus,rating_review.date as rdate,users.email as uemail FROM `rating_review` INNER JOIN users on rating_review.userId = users.id INNER join listing on listing.listId = rating_review.listId INNER join category on category.id = listing.catId where rating_review.status IN (1,0) order by listing.companyName asc, rating_review.date asc


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $review_data = "SELECT *,rating_review.status as rstatus,rating_review.date as rdate,users.email as uemail FROM `rating_review`"
            . " INNER JOIN users on rating_review.userId = users.id"
            . " INNER join listing on listing.listId = rating_review.listId where reviewId = $id";
    $data_rating = queryRun($review_data, $debug = 3);
    if ($data_rating->num_rows > 0) {
        foreach ($data_rating as $review_edit_row) {
            $rating = $review_edit_row['rating'];
            $review = $review_edit_row['review'];
            $status = $review_edit_row['rstatus'];
            $name = $review_edit_row['name'];
            $uemail = $review_edit_row['uemail'];
            $userPic = $review_edit_row['pic'];
            $companyName = $review_edit_row['companyName'];
            if ($userPic == '') {
                $userPic = 'upload/profile/user.png';
            } else {
                $userPic = BASE_URL . $userPic;
            }
        }
    }
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pending Reviews
            <small>Manage Pending Reviews</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Approved Reviews</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-9">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/review/delete_multiple.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Pending Reviews</h3>
                        </div>
                        <div class="box-body">
                            <table id="example_list" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Business Name</th>
                                        <th>Submitted By</th>
                                        <th>Review</th>
                                        <th>Rating</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            <input type="checkbox" id="selectall" class="selectall custom-control-input">
                            <label class="custom-control-label label label-primary" for="selectall" style="cursor: pointer;">Check All</label>
                            <button type="submit" name="delete_multiple" id="submit_btn_multiple_delete" class="btn btn-sm btn-danger btn-flat">Delete</button>
                            <button type="submit" name="approve_multiple" id="submit_btn_multiple_approve" class="btn btn-sm btn-success btn-flat">approve</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            if (isset($_GET['id'])) {
                ?>
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Reviews ( <b><?php echo $companyName; ?></b> )</h3>
                        </div>
                        <div class="nav-tabs-custom">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_3">
                                    <form method="post" id="data_form_review" action="services/review/set_review.php">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <img src="<?php echo $userPic; ?>" class="user-image" style="width: 60px;border: 1px solid #ecf0f5;">
                                                </div>
                                                <div class="col-md-9 form-group">
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
                                                    <p>Reviewed by <b><?php echo $name; ?></b></p>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="rating" class="">Rating *</label>
                                                <select class="form-control" id="rating" name="rating">
                                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                        <option value="<?php echo $i; ?>" <?php
                                                        if ($i == $rating) {
                                                            echo 'selected';
                                                        }
                                                        ?>><?php echo $i . ' ' . 'Star'; ?></option>
                                                            <?php } ?>
                                                </select>     
                                            </div>
                                            <div class="form-group">
                                                <label for="review" class="control-label">Review *</label>
                                                <textarea class="form-control" name="review" id="review" ><?php echo $review; ?></textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label for="status" class="">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1" <?php
                                                    if ($status == 1) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Active</option>
                                                    <option value="0" <?php
                                                    if ($status == 0) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Inactive</option>
                                                </select>     
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" id="submit_btn_reviewUpdate" name="update_review" class="btn btn-primary">Update Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div id="loaderOverlay" class="overlay" style=" display: none;">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>
