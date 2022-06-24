<?php include("admin/control/config.php"); ?>
<?php include("temp/site-settings.php"); ?>
<?php
if (isset($_SESSION['userId'])) {
    echo '<script>window.location.href = "' . BASE_URL . '"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Business Signup</title>
        <meta name="description" content="#">
        <meta name="keywords" content="#">
        <?php include 'head.php'; ?>
    </head>
    <body class="signup">
        <?php include 'header.php'; ?>

        <div id="myOverlay" class="overlay" style=" display: none;">
            <div class="overlay-content">
                <h3 style="color: #4CAF50;line-height: 1.8;">Thanks for signing up. Please check your email to activate your account. Give it a few minutes, and don’t forget to check your spam folder.</h3>
            </div>
        </div>

        <section class="signup-form">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mr-t-115">
                        <h2>A better way to get customer insights</h2>
                        <h3>With <?php echo brand_title; ?>, you can...</h3>
                        <p>Gain insights directly from those who matter most — your customers.</p>
                        <p>Make improvements based on feedback while increasing conversions.</p>
                        <p>Let your business shine with <?php echo brand_title; ?> stars and customer stories.</p>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 bg-color4 sign-padding">
                        <h1>Create a free account</h1>
                        <form action="<?php echo BASE_URL ?>webservices/register_business.php" method="POST" name="reg_form" id="reg_form" accept-charset="UTF-8">
                            <input name="userWebsite" type="text" placeholder="Domain url : websitename.com" required>
                            <input name="userCompany" type="text" placeholder="Company name" required>
                            <input name="name" type="text" placeholder="Full name" required>
                            <input name="email" type="email" placeholder="Work Email" required>
                            <input name="number" type="text" placeholder="Phone number">
                            <select name="catId" id="catId" required="">
                                <option value="">Choose Category</option>
                                <?php

                                function categoryTree($parent_id = 0, $sub_mark = '', $catId) {
                                    $query = dbAction('category', $operation = 4, $from_data = "", "where catId = $parent_id AND catStatus = 1 order by catName asc");
                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                            if ($row['id'] == $catId) {
                                                $select = 'selected';
                                            } else {
                                                $select = '';
                                            }
                                            echo '<option value="' . $row['id'] . '" ' . $select . '>' . $sub_mark . $row['catName'] . '</option>';
                                            categoryTree($row['id'], $sub_mark . '-', $catId);
                                        }
                                    }
                                }
                                ?>
                                <?php categoryTree($parent_id = 0, $sub_mark = '', $catId); ?>
                            </select>

                            <select name="country" required>
                                <option value="">Choose Country</option>
                                <?php foreach ($countries_data as $row_countries) { ?>
                                    <option value="<?php echo $row_countries['id']; ?>">
                                        <?php echo $row_countries['name']; ?>
                                    </option>
                                <?php }
                                ?>
                            </select>
                            <?php if ($site_settings['email_active_users'] == 0) { ?>
                                <input type="password" id="password"  name="password" placeholder="New Password" required>
                                <input type="password" id="conf_password" name="conf_password" placeholder="Confirm Password" required>
                                <input type="checkbox" class="mar-r" required> 
                                <label>I would also like a free personal demo of <?php echo brand_title; ?> paid plans</label>
                                <button  type="submit" class="btn btn-theme full-width btn-primary" id="reg_pass" name="reg_pass">Submit</button>
                            <?php } else { ?>
                                <input type="checkbox" class="mar-r" required> 
                                <label>I would also like a free personal demo of <?php echo brand_title; ?> paid plans</label>
                                <button type="submit" class="btn btn-theme full-width btn-primary" id="reg_email" name="reg_email">Submit</button>
                            <?php }
                            ?>
                        </form>
                        <!--<p class="btm-text">By signing up you agree to receive email communication about our products and services.</p>-->

                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <script src="js/register.js"></script> 
    </body>
</html>
