<h3>Change Password</h3>
<hr>
<?php
if ($users_data['pic'] == '') {
    $pic = BASE_URL . '/upload/profile-pic/user.png';
} else {
    $pic = '' . BASE_URL . $users_data['pic'] . '';
}
?>
<form role="form" method="post" action="../webservices/change_password.php" id="data_form" name="data_form">
    <input type="hidden" name="userId" value="<?php echo $users_data['id']; ?>"/>
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
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary" type="submit" id="submit_btn" name="submit_btn">Change Password</button>
            </div>
        </div>
    </div>
</form>