<?php include("../admin/control/config.php"); ?>
<?php include("../temp/site-settings.php"); ?>
<?php
if (!isset($_SESSION['userId'])) {
    echo '<script>window.location.href = "' . BASE_URL . '"</script>';
}
?>
<?php
$key = @$_GET['page'];
if ($key == 'my-company') {
    $my_company = 'active';
} else if ($key == 'my-account' || $key == 'index' || $key == '') {
    $my_account = 'active';
} else if ($key == 'my-review') {
    $my_review = 'active';
} else if ($key == 'add-company') {
    $add_company = 'active';
} else if ($key == 'change-password') {
    $change_pass = 'active';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User Panel</title>
        <?php include '../head.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>user/css/user.css">
    </head>
    <body class="signup">
        <?php include '../header.php'; ?>
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <?php include 'nav.php'; ?>
                </div>
                <div class="col-md-9">
                    <div class="profile-content my-profile my-account">
                        <?php
                        $key = @$_GET['page'];
                        switch ($key) {
                            case "my-account":
                                include 'my-account.php';
                                break;
                            case "my-company":
                                include 'my-company.php';
                                break;
                            case "edit-company":
                                include 'edit-company.php';
                                break;
                            case "my-review":
                                include 'my-review.php';
                                break;
                            case "add-company":
                                include 'add-company.php';
                                break;
                             case "change-password":
                                include 'change-password.php';
                                break;
                            default:
                                include 'my-account.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../footer.php'; ?>
        <?php if (isset($_GET['page'])) { ?>
            <script src="js/<?php echo $key; ?>.js"></script> 
        <?php } else { ?>
            <script src="js/my-account.js"></script> 
        <?php }
        ?>
    </body>
</html>