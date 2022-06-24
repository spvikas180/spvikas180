<div class="profile-sidebar">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
        <img src="<?php echo $pic; ?>" class="img-responsive">
    </div>
    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
        <div class="profile-usertitle-name">
            <?php echo $users_data['name']; ?>
        </div>
        <div class="profile-usertitle-job">
            <?php echo $users_data['email']; ?>
        </div>
    </div>
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
        <ul class="nav">
            <li class="<?php echo $my_account; ?>">
                <a href="index?page=my-account"><i class="glyphicon glyphicon-user"></i> Account Settings </a>
            </li>
            <?php if ($users_data['userType'] == 1 || $users_data['userType'] == 2) { ?>
                <li class="<?php echo $my_company; ?>">
                    <a href="index?page=my-company"><i class="fa fa-list-alt"></i>All Business </a>
                </li>
                <li class="<?php echo $add_company; ?>">
                    <a href="index?page=add-company"><i class="glyphicon glyphicon-list-alt"></i>Add Business </a>
                </li>
            <?php } ?>
            <li class="<?php echo $my_review; ?>">
                <a href="index?page=my-review"><i class="fa fa-comments"></i> Review </a>
            </li>
             <li class="<?php echo $change_pass; ?>">
                <a href="index?page=change-password"><i class="fa fa-comments"></i> Change Password </a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>/logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout </a>
            </li>
        </ul>
    </div>
    <!-- END MENU -->
</div>