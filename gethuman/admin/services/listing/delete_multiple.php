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
            $businessText = 'Business Deleted';
            businessMsg($id, $businessText);
            $data = dbAction('listing', $operation = 3, $from_data = "", 'where listId=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Business Delete Successfully!","page_url":"pending-businesses"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['deleteId'])) {
    $id = $_POST['deleteId'];
    $data = dbAction('listing', $operation = 3, $from_data = "", 'where listId=' . $id . '');
    $businessText = 'Business Deleted';
    businessMsg($id, $businessText);
    if ($data == true) {
        echo '{"status":"success", "msg":"Business Successfully Delete!", "page_url":"pending-businesses"}';
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
            $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');
            $businessText = 'Business Approved';
            businessMsg($id, $businessText);
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Business listing successfully approved!"}';
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
            $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');
            $businessText = 'Business Dispproved';
            businessMsg($id, $businessText);
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Business listing successfully disapproved!"}';
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
            $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');
            $businessText = 'Transferred to Featured Business';
            businessMsg($id, $businessText);
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Business listing successfully transferred to featured business section."}';
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
            $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');
            $businessText = 'Remove from Featured List';
            businessMsg($id, $businessText);
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Business listing successfully removed from featured business section."}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
}
?>