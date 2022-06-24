<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);

$data = "SELECT tt.tagTitle,tm.mappingId as mappingId FROM tag_mapping AS tm"
        . " INNER JOIN tags AS tt ON tm.tagId=tt.tagId"
        . " WHERE tm.blogId= $blogId";
$data = queryRun($data, $debug = 3);
$my_array = array();
if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        $my_array[] = $row;
    }
}
$data_json = json_encode($my_array);
print_r($data_json);
?>