<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user_data = "SELECT * from users where id = $id AND status = 1";
    $data_users = queryRun($user_data, $debug = 3);
    $data_users = $data_users->fetch_assoc();
    if ($data_users['pic'] == '') {
        $pic = 'upload/profile/user.png';
    } else {
        $pic = '' . BASE_URL . $data_users['pic'] . '';
    }
}

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Active Users
            <small>Manage Active Users</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Active Users</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/user/delete_multiple.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Active Users</h3>
                        </div>
                        <div class="box-body">
                            <table id="example_list" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Registered On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            <input type="checkbox" id="selectall" class="selectall custom-control-input">
                            <label class="custom-control-label label label-primary" for="selectall" style="cursor: pointer;">Check All</label>
                            <button type="submit" name="delete_multiple" id="submit_btn_multiple_delete" class="btn btn-sm btn-danger btn-flat">Delete</button>
                            <button type="submit" name="disapprove_multiple" id="submit_btn_multiple_disapprove" class="btn btn-sm btn-success btn-flat">disable</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            if (isset($_GET['id'])) {
                ?>
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit User ( <b><?php echo $data_users['name']; ?></b> )</h3>
                        </div>
                        <div class="nav-tabs-custom">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_3">
                                    <form method="post" id="data_form_user" action="services/user/set_user.php">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                        <input type="hidden" name="email" value="<?php echo $data_users['email']; ?>"/>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <img src="<?php echo $pic; ?>" class="user-image" style="width: 70px;border: 1px solid #ecf0f5;">
                                                </div>
                                                <div class="col-md-9 form-group">
                                                    <input type="file" name="logoUser" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="control-label">Full name</label>
                                                <input class="form-control" name="name" type="text" value="<?php echo $data_users['name']; ?>" placeholder="Full name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label">Work Email</label>
                                                <div class="form-control"><?php echo $data_users['email']; ?></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="review" class="control-label">Phone number</label>
                                                <input class="form-control" name="number" type="text" value="<?php echo $data_users['number']; ?>" placeholder="Phone number">
                                            </div>
                                            <div class="form-group">
                                                <label for="gender" class="control-label">Gender</label>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male" <?php
                                                    if ($data_users['gender'] == 'Male') {
                                                        echo 'selected';
                                                    }
                                                    ?> >Male</option>
                                                    <option value="Female" <?php
                                                    if ($data_users['gender'] == 'Female') {
                                                        echo 'selected';
                                                    }
                                                    ?>>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class="control-label">Choose Country</label>
                                                <select name="country" class="form-control">
                                                    <option value="">Choose Country</option>
                                                    <?php foreach ($countries_data as $row_countries) { ?>
                                                        <option value="<?php echo $row_countries['id']; ?>" <?php
                                                        if ($row_countries['id'] == $data_users['country']) {
                                                            echo 'selected';
                                                        }
                                                        ?>>
                                                            <?php echo $row_countries['name']; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="userType" class="control-label">User Type</label>
                                                <select name="userType" id="userType" class="form-control">
                                                    <option value="1" <?php
                                                    if ($data_users['userType'] == 1) {
                                                        echo 'selected';
                                                    }
                                                    ?> >Business User</option>
                                                    <option value="0" <?php
                                                    if ($data_users['userType'] == 0) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Simple User</option>
                                                    <option value="2" <?php
                                                    if ($data_users['userType'] == 2) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Admin User</option>
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                                <label for="status" class="">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1" <?php
                                                    if ($data_users['status'] == 1) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Active</option>
                                                    <option value="0" <?php
                                                    if ($data_users['status'] == 0) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Inactive</option>
                                                </select>     
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" id="submit_btn_userUpdate" name="update_user" class="btn btn-primary">Update User</button>
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
