<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);

//$Q_s = "SELECT tagTitle FROM tags WHERE tagTitle LIKE '%" . $_GET['str'] . "%'";
$res = dbAction('tags', $operation = 4, $from_data = "", " WHERE tagTitle LIKE '%" . $_GET['str'] . "%'");
$output = [];
foreach ($res AS $row) {
    $output[] = ["value" => $row['tagTitle'], "label" => $row['tagTitle']];
}
echo '{"status":"success", "msg":' . json_encode($output) . '}';
?>