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
        <title>User Sign Up</title>
        <?php include 'head.php'; ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <style>
            .g-recaptcha div:first-child {
                margin: auto;
                /*width: 30% !important;*/
            }
            /*            .g-recaptcha iframe {
                            width:  100% !important;
                        }
                        .rc-anchor-normal{
                            width: 100% !important;
                        }*/
        </style>
    </head>
    <body class="login">
        <?php include 'header.php'; ?>
        <section class="userlogin">
            <div class="container-fluid text-center">
                <div class="row log-padding">
                    <h3>Signup in to read and write reviews</h3>
                    <form action="<?php echo BASE_URL ?>webservices/register.php" method="POST" name="reg_form" id="reg_form" accept-charset="UTF-8">
                        <div class="form-group">
                            <input class="form-control form-control-sm mb-10" name="name" type="text" placeholder="Full name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-sm mb-10" name="email" type="email" placeholder="Email" required>
                        </div>
                        <?php if ($site_settings['email_active_users'] == 0) { ?>
                            <div class="form-group">
                                <input class="form-control form-control-sm mb-10" type="password" id="password"  name="password" placeholder="New Password" required>
                                <input class="form-control form-control-sm mb-10" type="password" id="conf_password" name="conf_password" placeholder="Confirm Password" required>
                            </div>
                            <?php if ($site_settings['captcha_signup'] == 1) { ?>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="<?php echo gr_sitekey; ?>"></div>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <button class="btn btn-block" type="submit" class="btn btn-theme full-width" id="reg_pass" name="reg_pass">Sign Up</button>
                            </div>
                        <?php } else { ?>
                            <?php if ($site_settings['captcha_signup'] == 1) { ?>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="<?php echo gr_sitekey; ?>"></div>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <button class="btn btn-block" type="submit" class="btn btn-theme full-width" id="reg_email" name="reg_email">Sign Up</button>
                            </div>
                        <?php }
                        ?>
                    </form>
                </div>
            </div>
        </section>

        <section class="userlogin2">
            <div class="container-fluid text-center">
                <div class="row log-padding">
                    <h3>Are you a business?</h3>
                    <p>Set up your business account on <?php echo brand_title; ?> for free</p>
                    <form>
                        <div class="form-group">
                            <a href="login" class="login btn">Login</a>
                            <a href="business-signup" class="signup btn">Signup</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <script src="<?php echo BASE_URL; ?>js/register.js"></script> 
    </body>
</html>
