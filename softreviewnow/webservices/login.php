<?php

include("../admin/control/config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_email = $_POST['email'];
    $user_pass = $_POST['password'];
    $user_pass1 = md5($user_pass);
    google_recaptcha();
    $data_user = dbAction('users', $operation = 4, $from_data = "", " where email = '$user_email' ");
    if ($data_user->num_rows > 0) {
        $user_row = $data_user->fetch_assoc();
        $d_password = $user_row['pwd'];
        $status = $user_row['status'];
        if ($status == 0) {
            echo '{"status":"error","msg":"Your account is not verified."}';
            exit();
        }
        if ($user_pass1 == $d_password) {
            if ($status == 1) {
                $_SESSION['userId'] = $user_row['id'];
                echo '{"status":"success","msg":"Login Successfully","url":"' . BASE_URL . 'user"}';
            }
        } else {
            echo '{"status":"error","msg":"Incorrect Password"}';
        }
    } else {
        echo '{"status":"error","msg":"Incorrect Email Id"}';
    }
}
?>