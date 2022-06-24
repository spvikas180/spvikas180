<?php include"services/dashboard_report.php"; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo brand_title; ?>
            <small>Management Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Company</span>
                        <span class="info-box-number"><?php echo $data_business['totalBusiness']; ?></span>
                        <a href="index.php?page=approve-businesses"><span class="label label-success">Active</span> <b><?php echo $data_business['activeBusiness']; ?></b></a>
                        <a href="index.php?page=pending-businesses"><span class="label label-warning" style=" margin-left: 10px;">Pending</span> <b><?php echo $data_business['disableBusiness']; ?></b></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Products</span>
                        <span class="info-box-number"><?php echo $data_product['totalProduct']; ?></span>
                        <a href="index.php?page=product-approve"><span class="label label-success">Active</span> <b><?php echo $data_product['activeProduct']; ?></b></a>
                        <a href="index.php?page=product-pending"><span class="label label-warning" style=" margin-left: 10px;">Pending</span> <b><?php echo $data_product['disableProduct']; ?></b></a>
                    </div>
                </div>
            </div>

             <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-newspaper-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Post</span>
                        <span class="info-box-number"><?php echo $totalPosts['totalPosts']; ?></span>
                        <a href="index.php?page=all-post"><span class="label label-success">Active</span> <b><?php echo $totalPosts['activePosts']; ?></b></a>
                        <a href="index.php?page=all-post"><span class="label label-warning" style=" margin-left: 10px;">Pending</span> <b><?php echo $totalPosts['disablePosts']; ?></b></a>
                    </div>
                </div>
            </div>

          <!--   <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-comments"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">All Reviews</span>
                        <span class="info-box-number"><?php echo $data_review['totalReview']; ?></span>
                        <a href="index.php?page=active-review"><span class="label label-success">Active</span> <b><?php echo $data_review['activeReview']; ?></b></a>
                        <a href="index.php?page=pending-review"><span class="label label-warning" style=" margin-left: 10px;">Pending</span> <b><?php echo $data_review['disableReview']; ?></b></a>
                    </div>
                </div>
            </div>

            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-newspaper-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Post</span>
                        <span class="info-box-number"><?php echo $totalPosts['totalPosts']; ?></span>
                        <a href="index.php?page=all-post"><span class="label label-success">Active</span> <b><?php echo $totalPosts['activePosts']; ?></b></a>
                        <a href="index.php?page=all-post"><span class="label label-warning" style=" margin-left: 10px;">Pending</span> <b><?php echo $totalPosts['disablePosts']; ?></b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total User</span>
                        <span class="info-box-number"><?php echo $totalUsers['totalUsers']; ?></span>
                        <a href="index.php?page=active-user"><span class="label label-success">Active</span> <b><?php echo $totalUsers['activeUsers']; ?></b></a>
                        <a href="index.php?page=pending-user"><span class="label label-warning" style=" margin-left: 10px;">Pending</span> <b><?php echo $totalUsers['disableUsers']; ?></b></a>
                    </div>
                </div>
            </div> -->
        </div>


        <!-- Main row -->
        <div class="row">        
            <!-- <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently Added Business</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <?php
                            $data = dbAction('listing', $operation = 4, $from_data = "", ' where status IN (0,1) order by date desc limit 5');
                            if ($data->num_rows > 0) {
                                foreach ($data as $row) {
                                    if ($row['status'] == 1) {
                                        $status = '<span class="label label-success pull-right">Active</span>';
                                    } else {
                                        $status = '<span class="label label-warning pull-right">Pending</span>';
                                    }

                                    if ($row['logo'] == '') {
                                        $logo = '<img src="dist/img/default-50x50.gif">';
                                    } else {
                                        $logo = "<img src='" . BASE_URL . $row['logo'] . "'>";
                                    }
                                    ?>
                                    <li class="item">
                                        <div class="product-img">
                                            <?php echo $logo; ?>
                                        </div>
                                        <div class="product-info">
                                            <a href="<?php echo 'index.php?page=edit-businesses&id=' . $row['listId']; ?>" class="product-title" target="_blank"><?php echo $row['companyName']; ?>
                                                <?php echo $status; ?>
                                            </a>
                                            <span class="product-description">
                                                <?php echo date('M j Y', strtotime($row['date'])); ?>
                                            </span>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="box-footer text-center">
                        <a href="index.php?page=pending-businesses" class="uppercase">Pending Business</a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently User</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <?php
                            $data = dbAction('users', $operation = 4, $from_data = "", ' where status IN (0,1) order by date desc limit 5');
                            if ($data->num_rows > 0) {
                                foreach ($data as $row) {

                                    if ($row['status'] == 1) {
                                        $editurl = 'active-user';
                                        $status = '<span class="label label-success pull-right">Active</span>';
                                    } else {
                                        $editurl = 'pending-user';
                                        $status = '<span class="label label-warning pull-right">Pending</span>';
                                    }

                                    if ($row['pic'] == '') {
                                        $logo = '<img src="dist/img/default-50x50.gif">';
                                    } else {
                                        $logo = "<img src='" . BASE_URL . $row['pic'] . "'>";
                                    }
                                    ?>
                                    <li class="item">
                                        <div class="product-img">
                                            <?php echo $logo; ?>
                                        </div>
                                        <div class="product-info">
                                            <a href="<?php echo 'index.php?page=' . $editurl . '&id=' . $row['id']; ?>" class="product-title" target="_blank"><?php echo $row['name']; ?>
                                                <?php echo $status; ?>
                                            </a>
                                            <span class="product-description">
                                                <p style=" margin: 0;"><?php echo $row['email']; ?></p>
                                                <?php echo date('M j Y', strtotime($row['date'])); ?>
                                            </span>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="box-footer text-center">
                        <a href="index.php?page=active-user" class="uppercase">Active User</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Review</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <?php
                            $data = "SELECT *,rating_review.status as rstatus, rating_review.reviewId as reviewId, rating_review.date as rdate,users.email as uemail FROM `rating_review`"
                                    . " INNER JOIN users on rating_review.userId = users.id"
                                    . " INNER join listing on listing.listId = rating_review.listId"
                                    . " INNER join category on category.id = listing.catId where rating_review.status IN (0,1) order by rating_review.date desc limit 5";

                            $data = queryRun($data, $debug = 3);
                            if ($data->num_rows > 0) {
                                foreach ($data as $row) {
                                    if ($row['rstatus'] == 1) {
                                        $editurl = 'active-review';
                                        $status = '<span class="label label-success pull-right">Active</span>';
                                    } else {
                                        $editurl = 'pending-review';
                                        $status = '<span class="label label-warning pull-right">Pending</span>';
                                    }

                                    if ($row['pic'] == '') {
                                        $logo = '<img src="dist/img/default-50x50.gif">';
                                    } else {
                                        $logo = "<img src='" . BASE_URL . $row['pic'] . "'>";
                                    }
                                    ?>
                                    <li class="item">
                                        <div class="product-img">
                                            <?php echo $logo; ?>
                                        </div>
                                        <div class="product-info">
                                            <a href="<?php echo 'index.php?page=' . $editurl . '&id=' . $row['reviewId']; ?>" class="product-title" target="_blank"><?php echo $row['companyName']; ?>
                                                <?php echo $status; ?>
                                            </a>
                                            <span class="product-description">
                                                <p style=" margin: 0;">S.By: <?php echo $row['name']; ?></p>
                                                <?php echo date('M j Y', strtotime($row['rdate'])); ?>
                                            </span>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="box-footer text-center">
                        <a href="index.php?page=active-review" class="uppercase">Active Review</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
</div>