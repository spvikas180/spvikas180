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
            $data = dbAction('company', $operation = 3, $from_data = "", 'where id=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Company Delete Successfully!","page_url":"pending-businesses"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['deleteId'])) {
   echo $id = $_POST['deleteId'];
    $data = dbAction('company', $operation = 3, $from_data = "", 'where id=' . $id . '');
    if ($data == true) {
        echo '{"status":"success", "msg":"Company Successfully Delete!", "page_url":"pending-businesses"}';
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
            $data = dbAction('company', $operation = 2, $from_data, 'id=' . $id . '');
            $businessText = 'Company Approved';
            businessMsg($id, $businessText);
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Company company successfully approved!"}';
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
            $data = dbAction('company', $operation = 2, $from_data, 'id=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Company company successfully disapproved!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['feature_multiple'])) {
    extract($_POST);
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $from_data = array(
                "verified" => 1
            );
            $data = dbAction('company', $operation = 2, $from_data, 'id=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Company company successfully transferred to featured Company section."}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['unfeature_multiple'])) {
    extract($_POST);
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $from_data = array(
                "verified" => 0
            );
            $data = dbAction('company', $operation = 2, $from_data, 'id=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Company company successfully removed from featured Company section."}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
}
?>