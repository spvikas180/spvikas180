<?php

include '../../functions.php';
if (!isset($_SESSION['id'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
if (isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $from_data = array(
        "status" => $status
    );
    $data = dbAction('rating_review', $operation = 2, $from_data, 'reviewId=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Review Status changed Successfully!"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
    exit();
}
?>