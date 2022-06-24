<?php

include("../admin/control/config.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require '../admin/control/PHPMailer/PHPMailerAutoload.php';
    require '../admin/control/PHPMailer/class.phpmailer.php';
    extract($_POST);
    $ip = $_SERVER['REMOTE_ADDR'];


    if (isset($_POST['reg_pass'])) {
        $data = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"This email address is already registered with the system.!!"}';
            exit();
        }
        $password = trim($password);
        $conf_password = trim($conf_password);
        if ((strlen($password) < 6 ) || (strlen($conf_password) < 6 )) {
            echo '{"status":"error","msg":"password and confirm password should be min 6 characters"}';
            exit();
        } else if ($password != $conf_password) {
            echo '{"status":"error","msg":"password and confirm password don`t match"}';
            exit();
        }

        google_recaptcha();

        $password1 = md5($password);
        $from_data = array(
            "email" => $email,
            "name" => $name,
            "ip" => $ip,
            "pwd" => $password1,
            "status" => 1,
        );
        $data_user = dbAction('users', $operation = 1, $from_data);
        if ($data_user == true) {
            $data_user = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
            $user_row = $data_user->fetch_assoc();
            $_SESSION['userId'] = $user_row['id'];
            echo '{"status":"success","msg":"Registration Successfully!","url":"' . BASE_URL . 'user"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please try again!"}';
        }
    } elseif (isset($_POST['reg_email'])) {
        $data = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' AND status = 1");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"This email address is already registered with the system.!!"}';
            exit();
        }
        google_recaptcha();
        
        $data = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' AND status = 0");
        if ($data->num_rows > 0) {
            activationEmail($email);
            echo '{"status":"success","msg":"Thank you. An email has been sent to you. Please click the link inside to confirm your email address."}';
        } else {
            $from_data = array(
                "email" => $email,
                "name" => $name,
                "ip" => $ip,
                "status" => 0,
            );
            $data_user = dbAction('users', $operation = 1, $from_data);
            if ($data_user == true) {
                activationEmail($email, $name);
                echo '{"status":"success","msg":"Thank you. An email has been sent to you. Please click the link inside to confirm your email address.","url":"' . BASE_URL . '"}';
            } else {
                echo '{"status":"error","msg":"Error in server, please try again!"}';
            }
        }
    } elseif (isset($_POST['conf_account'])) {
        $password = trim($password);
        $conf_password = trim($conf_password);
        if ((strlen($password) < 6 ) || (strlen($conf_password) < 6 )) {
            echo '{"status":"error","msg":"password and confirm password should be min 6 characters"}';
            exit();
        } else if ($password != $conf_password) {
            echo '{"status":"error","msg":"password and confirm password don`t match"}';
        } else {
            $password1 = md5($password);
            $from_data = array(
                "pwd" => $password1,
                "status" => 1
            );
            $data = dbAction('users', $operation = 2, $from_data, " where email= '$email'");
            if ($data == true) {
                $data_user = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
                $user_row = $data_user->fetch_assoc();
                $_SESSION['userId'] = $user_row['id'];
                echo '{"status":"success","msg":"Password set successfully!","url":"' . BASE_URL . 'user"}';
            }
        }
    }
}
?>