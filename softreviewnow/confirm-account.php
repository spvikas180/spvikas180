<?php include("admin/control/config.php"); ?>
<?php include("temp/site-settings.php"); ?>
<?php
if (isset($_SESSION['userId'])) {
    echo '<script>window.location.href = "' . BASE_URL . '"</script>';
}

if (isset($_GET['e'])) {
    $email = $_GET['e'];
    $email = base64_decode($email);
    $data_user = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
    if ($data_user->num_rows == 0) {
        echo '<script>window.location.href = "' . BASE_URL . '"</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Confirm Account</title>
        <?php include 'head.php'; ?>
    </head>
    <body class="login">
        <?php include 'header.php'; ?>
        <section>
            <div class="global-container">
                <div class="card login-form">
                    <div class="card-body log-padding">
                        <h3 class="card-title text-center">Thank you for confirming your <br>email address</h3>
                        <p class="text-center">Please choose a password for your account</p>
                        <div class="card-text">
                            <form class="form-horizontal ci-login" id="conf_account_form" action="<?php echo BASE_URL ?>webservices/register.php" method="post">
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <div class="form-group">
                                    <input class="form-control" type="password"  name="password" placeholder="New Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="conf_password" class="form-control form-control-sm mb-10" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="conf_account" name="conf_account" class="btn btn-block">Set Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <script src="js/register.js"></script> 
    </body>
</html>
