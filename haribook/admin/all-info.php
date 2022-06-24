<?php // include"services/dashboard_report.php";                             ?>
<?php include"services/dashboard_report_user.php"; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $users_data['name']; ?>
            <small>Details</small>
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
                        <span class="info-box-text">Total Business</span>
                        <span class="info-box-number"><?php echo $data_business['totalBusiness']; ?></span>
                        <a href="index.php?page=approve-businesses"><span class="label label-success">Active</span> <b><?php echo $data_business['activeBusiness']; ?></b></a>
                        <a href="index.php?page=pending-businesses"><span class="label label-warning" style=" margin-left: 10px;">Pending</span> <b><?php echo $data_business['disableBusiness']; ?></b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
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
        </div>
        <!-- Main row -->
        <div class="row">   
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Personal Account Details of <b><?php echo $users_data['name']; ?></b></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="form-control"><span class="fa fa-user"></span> Full Name : <b><?php echo $users_data['name']; ?></b></div>   
                            </div> 
                            <div class="col-md-6 form-group">
                                <div class="form-control"><span class="fa fa-envelope"></span> Email : <b><?php echo $users_data['email']; ?></b></div>   
                            </div> 
                            <div class="col-md-6 form-group">
                                <div class="form-control"><span class="fa fa-transgender"></span> Gender : <b><?php echo $users_data['gender']; ?></b></div>   
                            </div> 
                            <div class="col-md-6 form-group">
                                <div class="form-control"><span class="fa fa-phone"></span> Number : <b><?php echo $users_data['number']; ?></b></div>   
                            </div> 
                            <div class="col-md-6 form-group">
                                <div class="form-control"><span class="fa fa-flag"></span> Country : <b><?php echo $countries_data_user['name']; ?></b></div>   
                            </div> 
                            <div class="col-md-6 form-group">
                                <?php
                                if ($users_data['userType'] == 1) {
                                    $userType = 'Business User';
                                } elseif ($users_data['userType'] == 0) {
                                    $userType = 'Simple User';
                                } elseif ($users_data['userType'] == 2) {
                                    $userType = 'Admin User';
                                }
                                ?>
                                <div class="form-control"><span class="fa fa-user"></span> User Type : <b><?php echo $userType; ?></b></div>   
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">All Review of <?php echo $users_data['name']; ?></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table style="width: 100%;" id="example1" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Review</th>
                                    <th>Rating</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php
                                $data = dbAction('rating_review', $operation = 4, $from_data = "", ' where status IN (0,1) AND userId=' . $userId . ' order by date desc');
                                if ($data->num_rows > 0) {
                                    foreach ($data as $row) {
                                        if ($row['status'] == 1) {
                                            $status = '<span class="label label-success">Active</span>';
                                        } else {
                                            $status = '<span class="label label-danger">Disable</span>';
                                        }
                                        ?>
                                        <tr>
                                            <td><?php echo $row['review']; ?></td>
                                            <td><?php echo $row['rating']; ?> Star</td>
                                            <td><?php echo $status; ?></td>
                                            <td>
                                                <a class="action_btn btn-primary btn" href="index.php?page=active-review&id=<?php echo $row['reviewId']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">All Business of <?php echo $users_data['name']; ?></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table style="width: 100%;" id="example1" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php
                                $data = dbAction('listing', $operation = 4, $from_data = "", ' where status IN (0,1) AND userId=' . $userId . ' order by date desc');
                                if ($data->num_rows > 0) {
                                    foreach ($data as $row) {
                                        if ($row['status'] == 1) {
                                            $status = '<span class="label label-success">Active</span>';
                                        } else {
                                            $status = '<span class="label label-danger">Disable</span>';
                                        }
                                        ?>
                                        <tr>
                                            <td><a href="<?php echo BASE_URL . 'phone-number/' . $row['website']; ?>" target="_blank"><?php echo $row['companyName']; ?></a></td>
                                            <td><?php echo $status; ?></td>
                                            <td>
                                                <a class="action_btn btn-primary btn" href="index.php?page=edit-businesses&id=<?php echo $row['listId']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>