<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}if (isset($_POST['delete_multiple'])) {
    extract($_POST);
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $data = dbAction('pages', $operation = 3, $from_data = "", 'where id=' . $id . '');
        } if ($data == true) {
            echo '{"status":"success","msg":"Page Successfully Delete!","page_url":"all-page"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    } else {
        echo '{"status":"error","msg":"Please select check box!"}';
    }
} else {
    extract($_POST);
    $id = $_POST['deleteId'];
    $data = dbAction('pages', $operation = 3, $from_data = "", 'where id=' . $id . '');
    if ($data == true) {
        echo '{"status":"success", "msg":"Page Successfully Delete!", "page_url":"Page"}';
    } else {
        echo '{"status":"error", "msg":"Error in server, please contact admin!"}';
    }
}?>