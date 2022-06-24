<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
if (isset($_POST['mappingId'])) {
    extract($_POST);
    $data = dbAction('tag_mapping', $operation = 3, $from_data = "", 'where mappingId=' . $mappingId . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Tag Delete Successfully!"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>
