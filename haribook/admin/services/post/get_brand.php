<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}

$data = dbAction('brand', $operation = 4, $from_data = "", ' where brandStatus IN (1) order by brandName asc');
$my_array = array();
if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        $my_array[] = $row;
    }
}
$data_json = json_encode($my_array);
print_r($data_json);
?>
