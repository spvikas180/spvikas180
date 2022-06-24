<?php

include_once"../../control/config.php";
require '../../control/PHPMailer/PHPMailerAutoload.php';
require '../../control/PHPMailer/class.phpmailer.php';
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
if (isset($_POST['delete_multiple'])) {
    extract($_POST);
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $data = dbAction('rating_review', $operation = 3, $from_data = "", ' where reviewId=' . $id . '');
            $businessText = 'Deleted';
            reviewMsg($id, $businessText);
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Review Delete Successfully!","page_url":"active-review"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['deleteId'])) {
    $id = $_POST['deleteId'];
    $data = dbAction('rating_review', $operation = 3, $from_data = "", ' where reviewId=' . $id . '');
    $businessText = 'Deleted';
    reviewMsg($id, $businessText);
    if ($data == true) {
        echo '{"status":"success","msg":"Review Delete Successfully!","page_url":"active-review"}';
    } else {
        echo '{"status":"error", "msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['approve_multiple'])) {
    extract($_POST);
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $from_data = array(
                "status" => 1
            );
            $data = dbAction('rating_review', $operation = 2, $from_data, ' reviewId=' . $id . '');
            $businessText = 'Approved';
            reviewMsg($id, $businessText);
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Review successfully approved!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['disapprove_multiple'])) {
    extract($_POST);
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $from_data = array(
                "status" => 0
            );
            $data = dbAction('rating_review', $operation = 2, $from_data, ' reviewId=' . $id . '');
            $businessText = 'Disapprove';
            reviewMsg($id, $businessText);
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Review successfully disapproved!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
}
?>