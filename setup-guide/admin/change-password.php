<?php
$cat_data = dbAction("settings", $operation = 4, $form_data = "", "id!= 0 order by id desc Limit 1");
$cat_edit_row = $cat_data->fetch_assoc();
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Change Password
            <small>Update your Password</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Change Password</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-7">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Change Password</h3>
                    </div>
                    <form role="form" method="post" action="services/setting/change_password.php" id="data_form" name="data_form">
                        <div class="box-body">
                            <div id="alert_box">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" name="current_password" id="current_password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" id="new_password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="" id="submit_btn" class="btn btn-primary" >Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
            </div>
        </div>
    </section>
</div>