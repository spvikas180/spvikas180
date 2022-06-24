<?php

if (isset($_POST['status'])) {

    include_once"../../control/config.php";
    require '../../control/PHPMailer/PHPMailerAutoload.php';
    require '../../control/PHPMailer/class.phpmailer.php';

    if (!isset($_SESSION['adminId'])) {
        echo "<script>window.location.href='login.php';</script>";
        die();
    }
    $id = $_POST['id'];

    if ($_POST['status'] == 'approve') {

        $data_user = dbAction('users', $operation = 4, $from_data = "", " where id = $id");
        $data_user = $data_user->fetch_assoc();
        $pwd = $data_user['pwd'];
        $name = $data_user['name'];
        $email = $data_user['email'];

        if ($pwd == '') {
            $password = md5(123456);
            $from_data = array(
                "status" => 1,
                "pwd" => $password
            );
        } else {
            $from_data = array(
                "status" => 1,
            );
        }
        $data = dbAction('users', $operation = 2, $from_data, 'id =' . $id . '');
        if ($data == true) {
            if ($pwd == '') {
                createAccount($email, $name);
            }
            echo '{"status":"success","msg":"User successfully Active!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    } elseif ($_POST['status'] == 'disapprove') {
        $from_data = array(
            "status" => 0
        );
        $data = dbAction('users', $operation = 2, $from_data, 'id =' . $id . '');

        if ($data == true) {
            echo '{"status":"success","msg":"User successfully Disable!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
}
?>
