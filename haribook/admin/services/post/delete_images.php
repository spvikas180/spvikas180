<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);
$id = $_POST['id'];
$from_data = array(
    "blogImage" => '',
);
$data = dbAction('blogs', $operation = 2, $from_data, 'blogId  =' . $id . '');
if ($data == true) {
    echo '{"status":"success","msg":"Blog Feature Image Delete Successfully!"}';
} else {
    echo '{"status":"error","msg":"Error in server, please contact admin!"}';
}
?>