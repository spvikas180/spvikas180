<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add Users
            <small>Manage Add Users</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admin Users</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_3">
                                <form method="post" id="data_form_user" action="services/user/set_user.php">
                                    <div class="box-body">
                                        <!--                                        <div class="row">
                                                                                    <div class="col-md-3 form-group">
                                                                                        <input type="file" name="logoUser" class="form-control"/>
                                                                                    </div>
                                                                                </div>-->
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="name" class="control-label">Full name</label>
                                                <input class="form-control" name="name" type="text" value="" placeholder="Full name" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="email" class="control-label">Email</label>
                                                <input type="email" id="email" name="email" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="email" class="control-label">Password</label>
                                                <input class="form-control form-control-sm mb-10" type="password" id="password"  name="password" placeholder="New Password" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="email" class="control-label">Confirm Password</label>
                                                <input class="form-control form-control-sm mb-10" type="password" id="conf_password" name="conf_password" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="userType" class="control-label">User Type</label>
                                                <select id="userType" name="userType" class="form-control">
                                                    <option value="1">Business User</option>
                                                    <option value="0">Simple User</option>
                                                    <option value="2">Admin User</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="status" class="control-label">Status</label>
                                                <select id="status" name="status" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="0">Disable</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 box-footer">
                                                <button type="submit" id="submit_btn_user" name="submit_btn_user" class="btn btn-primary">Add User</button>
                                            </div>
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

        </div>
    </section>
</div>
