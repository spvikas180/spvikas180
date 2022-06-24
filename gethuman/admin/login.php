<?php include_once"control/config.php"; ?>
<?php
if (isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='" . constant("BASE_URL") . constant("BASE_URL_ADMIN") . "';</script>";
}

if (isset($_POST['loginBtn'])) {
    extract($_POST);
    $user_email = $_POST['email'];
    $user_pass = $_POST['password'];
    $user_pass1 = md5($user_pass);
    $data_user = dbAction('users', 4, "", "email = '$user_email' AND userType = 2 AND status = 1");
    if ($data_user->num_rows > 0) {
        $user_row = $data_user->fetch_assoc();
        $d_password = $user_row['pwd'];
        $status = $user_row['status'];
        if ($user_pass1 == $d_password) {
            $_SESSION['adminId'] = $user_row['id'];
            $_SESSION['name'] = $user_row['name'];
            $_SESSION['email'] = $user_row['email'];
            echo "<script>window.location.href='" . constant("BASE_URL") . "admin';</script>";
        } else {
            $login_error = '<p style="color: red; text-align: center;">Incorrect Password</p>';
        }
    } else {
        $login_error = '<p style="color: red; text-align: center;">Incorrect Email Id</p>';
    }
    $email = $email;
    $password = $password;
} else {
    $login_error = '';
    $email = '';
    $password = '';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo BASE_URL; ?>"><b><?php echo brand_title; ?></b></a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form id="login_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group has-feedback">
                        <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button name="loginBtn" id="loginBtn" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                </form>
                <a href="#">I forgot my password</a><br><br>
                <?php echo $login_error; ?>
            </div>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
    </body>
</html>
