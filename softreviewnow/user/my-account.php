<h3>My Profile</h3>
<hr>
<?php
if ($users_data['pic'] == '') {
    $pic = BASE_URL . '/upload/profile-pic/user.png';
} else {
    $pic = '' . BASE_URL . $users_data['pic'] . '';
}
?>
<form method="post" id="data_form_user" action="<?php echo BASE_URL ?>webservices/set_user.php">
    <input type="hidden" name="userId" value="<?php echo $users_data['id']; ?>"/>
    <div class="row">
        <div class="col-md-6">
            <label for="logo">Profile Pic (150px*150px)</label>
            <input type="file" name="logoUser"/>
        </div>
        <div class="col-md-6">
            <img src="<?php echo $pic; ?>" class="user-image" style="width: 70px;border: 1px solid #ecf0f5;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <input type="text" name="name" value="<?php echo $users_data['name']; ?>" placeholder="Name" required>
        </div>
        <div class="col-md-6">
            <input type="text" name="email" value="<?php echo $users_data['email']; ?>" placeholder="Email" readonly>
        </div>
        <div class="col-md-6">
            <input type="text" name="number" value="<?php echo $users_data['number']; ?>" placeholder="Number">
        </div>
        <div class="col-md-6">
            <select name="gender">
                <option value="">Select Gender</option>
                <option value="Male" <?php
                if ($users_data['gender'] == 'Male') {
                    echo 'selected';
                }
                ?> >Male</option>
                <option value="Female" <?php
                if ($users_data['gender'] == 'Female') {
                    echo 'selected';
                }
                ?>>Female</option>
            </select>
        </div>
        <div class="col-md-6">
            <select name="country" >
                <option value="">Choose Country</option>
                <?php foreach ($countries_data as $row_countries) { ?>
                    <option value="<?php echo $row_countries['id']; ?>" <?php
                    if ($row_countries['id'] == $users_data['country']) {
                        echo 'selected';
                    }
                    ?>>
                        <?php echo $row_countries['name']; ?></option>
                <?php }
                ?>
            </select>
        </div>
        </div>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" id="submit_btn_userUpdate" name="update_user">Update Profile</button>
        </div>
    </div>
    </div>
</form>