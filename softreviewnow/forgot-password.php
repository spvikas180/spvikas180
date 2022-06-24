<?php include("admin/control/config.php"); ?>
<?php include("temp/site-settings.php"); ?>
<?php
if (isset($_SESSION['userId'])) {
    echo '<script>window.location.href = "' . BASE_URL . '"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forgot Password</title>
        <?php include 'head.php'; ?>
    </head>
    <body class="login">
        <?php include 'header.php'; ?>
        <section>
            <div class="global-container">
                <div class="card login-form">
                    <div class="card-body log-padding">
                        <h3 class="card-title text-center">Reset your password</h3>
                        <div class="card-text">
                            <form action="<?php echo BASE_URL ?>webservices/forgetPass.php" method="POST" name="forgetPassForm" id="userLogin" accept-charset="UTF-8" style=" margin-top: 0;">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="btnForgetPass" name="btnForgetPass" class="btn btn-block">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <script src="js/register.js"></script> 
        <script>
            //forgot ajax
            $('#btnForgetPass').click(function () {
                var options = {
                    beforeSend: function () {
                    },
                    success: function (response) {
                        console.log(response);
                        var json = $.parseJSON(response);
                        if (json.status === 'success') {
                            alert(json.msg);
                            location.reload();
                        } else {
                            alert(json.msg);
                        }
                    },
                    error: function (response) {
                        $('#error').html(response);
                    }
                };
                $('#userLogin').ajaxForm(options);
            });
        </script>
    </body>
</html>
