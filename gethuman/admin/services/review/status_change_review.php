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
        $from_data = array(
            "status" => 1
        );
        $data = dbAction('rating_review', $operation = 2, $from_data, 'reviewId =' . $id . '');
        $businessText = 'Approved';
        reviewMsg($id, $businessText);

        if ($data == true) {
            echo '{"status":"success","msg":"Reviews successfully approved!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    } elseif ($_POST['status'] == 'disapprove') {

        $from_data = array(
            "status" => 0
        );
        $data = dbAction('rating_review', $operation = 2, $from_data, 'reviewId =' . $id . '');
        $businessText = 'Disapprove';
        reviewMsg($id, $businessText);
        if ($data == true) {
            echo '{"status":"success","msg":"Reviews successfully Disapproved!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
    sendmail($to, $subject, $message, $name_mailer = '');
}
?>
