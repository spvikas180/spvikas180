<?php

include '../../functions.php';
$id = $_POST['id'];
$data = dbAction('pages', $operation = 4, $from_data = "", " where id = $id");
$my_array = array();
if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        $my_array[] = $row;
    }
}
$data_json = json_encode($my_array);
print_r($data_json);
?>
