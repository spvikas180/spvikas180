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
    $userData = "SELECT *,users.email as uemail FROM `users` INNER JOIN listing on users.id = listing.userId where listing.listId = $id";
    $userData = queryRun($userData, $debug = 3);
    $userData_row = $userData->fetch_assoc();
    $name = $userData_row['name'];
    $to = $userData_row['uemail'];
    $companyName = $userData_row['companyName'];
    $website = $userData_row['website'];

    if ($_POST['status'] == 'approve') {
        $subject = 'Your ' . $companyName . ' Approve By ' . brand_title;
        $message = "<p>Hi $name</p><p>Your $companyName Approved by " . brand_title . " Admin</p><p><a href='" . BASE_URL . "reviews/" . $website . "'>View Business</a></p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";
        $from_data = array(
            "status" => 1
        );
        $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');

        if ($data == true) {
            echo '{"status":"success","msg":"Business listing successfully approved!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    } elseif ($_POST['status'] == 'disapprove') {

        $subject = 'Your ' . $companyName . ' Diapproved By ' . brand_title;
        $message = "<p>Hi $name</p><p>Your $companyName Diapproved by " . brand_title . " Admin</p><p><a href='" . BASE_URL . "reviews/" . $website . "'>View Business</a></p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";
        $from_data = array(
            "status" => 0
        );
        $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');

        if ($data == true) {
            echo '{"status":"success","msg":"Business listing successfully Disapproved!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    } elseif ($_POST['status'] == 'feature') {

        $subject = 'Your ' . $companyName . ' Transferred to Featured business By ' . brand_title;
        $message = "<p>Hi $name</p><p>Your $companyName Transferred to Featured business by " . brand_title . " Admin</p><p><a href='" . BASE_URL . "reviews/" . $website . "'>View Business</a></p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";
        $from_data = array(
            "verified" => 1
        );
        $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');
        if ($data == true) {
            echo '{"status":"success","msg":"Business listing successfully transferred to featured business section.!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    } elseif ($_POST['status'] == 'unfeature') {
        $subject = 'Your ' . $companyName . ' Remove from Featured List By ' . brand_title;
        $message = "<p>Hi $name</p><p>Your $companyName Remove from Featured List by " . brand_title . " Admin</p><p><a href='" . BASE_URL . "reviews/" . $website . "'>View Business</a></p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";

        $from_data = array(
            "verified" => 0
        );
        $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');

        if ($data == true) {
            echo '{"status":"success","msg":"Business listing successfully removed from featured business section."}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
    sendmail($to, $subject, $message, $name_mailer = '');
}
?>
