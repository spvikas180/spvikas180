<?php

include_once"../admin/control/config.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require '../admin/control/PHPMailer/PHPMailerAutoload.php';
    require '../admin/control/PHPMailer/class.phpmailer.php';
    extract($_POST);

    $data = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
    if ($data->num_rows == 0) {
        echo '{"status":"error","msg":"Incorrect Email Id!!"}';
        exit();
    } else {
        $data = $data->fetch_assoc();
        $name = $data['name'];
        activationEmail($email, $name);
        echo '{"status":"success","msg":"Thank you. An email has been sent to you. Please click the link inside to confirm your email address."}';
    }
}
?>
