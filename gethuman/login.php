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
        <title>Login</title>
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

            .g-recaptcha {
                transform:scale(0.77);
                -webkit-transform:scal(0.77);
                transform-origin:0 0;
                -webkit-transform-origin:0 0;
            } 
            @media screen and (max-width: 575px){ 
                .g-recaptcha {
                    transform:scale(0.77);
                    -webkit-transform:scale(0.77);
                    transform-origin:0 0;
                    -webkit-transform-origin:0 0;
                } 
            } 
        </style>
    </head>
    <body class="login">
        <?php include 'header.php'; ?>
        <section>
            <div class="global-container">
                <div class="card login-form">
                    <div class="card-body log-padding">
                        <h3 class="card-title text-center">Log in to <?php echo brand_title; ?> Business</h3>
                        <div class="card-text">
                            <form action="<?php echo BASE_URL ?>webservices/login.php" method="POST" name="login_form" id="login_form" accept-charset="UTF-8">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-sm mb-10" placeholder="Password" required>
                                </div>
                                <?php if ($site_settings['captcha_signin'] == 1) { ?>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="<?php echo gr_sitekey; ?>"></div>
                                    </div>
                                <?php } ?>
                                <div class="form-group">

                                    <button type="submit" id="login" name="login" class="btn btn-block">Login</button>
                                    <a href="<?php echo BASE_URL; ?>forgot-password" class="forgot">Forgot password?</a>
                                </div>
                                <!--                                <div class="col-md-12 or-line">Or</div>
                                                                <div class="col-md-12 text2">Do you use Google Apps for work?</div>
                                                                <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                                                                    </i> Login with Google+
                                                                </a>
                                                                <a href="#" class="fb btn">
                                                                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                                                </a>-->
                                <div class="sign-up">
                                    Don't have a <?php echo $site_settings['site_title']; ?> account? <a href="signup.php">Sign up for free now. </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <script src="<?php echo BASE_URL; ?>js/register.js"></script> 
    </body>
</html>
