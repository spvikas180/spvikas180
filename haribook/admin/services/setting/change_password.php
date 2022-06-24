<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $user_id = $_SESSION['adminId'];
    $current_password = md5($_POST['current_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);
    if ($new_password == $confirm_password) {
        $s_q = "SELECT * FROM users WHERE id='$user_id'";
        $chg_pass = queryRun($s_q, $debug = 3);
        if ($chg_pass->num_rows > 0) {
            $pass_row = $chg_pass->fetch_assoc();
            $db_password = $pass_row['pwd'];
            if ($current_password == $db_password) {
                $from_data = array(
                    "pwd" => $confirm_password
                );
                $data = dbAction('users', $operation = 2, $from_data, 'where id=' . $user_id . '');
                if ($data == true) {
                    echo '{"status":"success","msg":"password change successfully!","page_url":"dashboard"}';
                } else {
                    echo '{"status":"error","msg":"Error in server, please contact Admin!"}';
                }
            } else {
                echo'{"status":"error","msg":"Old password did not matched!"}';
            }
        } else {
            echo'{"status":"error","msg":"Something went wrong.!"}';
        }
    } else {
        echo'{"status":"error","msg":"New password and confirmed password did not match!"}';
    }
}
?>