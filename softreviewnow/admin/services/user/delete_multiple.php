<?php

include_once"../../control/config.php";
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
            $data = dbAction('users', $operation = 3, $from_data = "", ' where id=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"User Delete Successfully!","page_url":"active-user"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['delete_multiple_admin'])) {
    extract($_POST);
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $data = dbAction('users', $operation = 3, $from_data = "", ' where id=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Admin User Delete Successfully!","page_url":"admin-user"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['deleteId'])) {
    $id = $_POST['deleteId'];
    $data = dbAction('users', $operation = 3, $from_data = "", ' where id=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"User Delete Successfully!","page_url":"active-user"}';
    } else {
        echo '{"status":"error", "msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['AdmindeleteId'])) {
    $id = $_POST['AdmindeleteId'];
    $data = dbAction('users', $operation = 3, $from_data = "", ' where id=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Admin User Delete Successfully!","page_url":"admin-user"}';
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
            $data = dbAction('users', $operation = 2, $from_data, ' id=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"User successfully Active!"}';
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
            $data = dbAction('users', $operation = 2, $from_data, ' id=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"User successfully Disable!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
}
?>