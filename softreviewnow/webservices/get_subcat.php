<?php

if (isset($_POST['id'])) {
    include_once"../admin/control/config.php";
    extract($_POST);
    $id = $_POST['id'];
    $data = dbAction('category', $operation = 4, $from_data = "", 'where catStatus = 1 AND catId = ' . $id . ' order by catName asc');
    $my_array = array();
    if ($data->num_rows > 0) {
        while ($row = $data->fetch_assoc()) {
            $my_array[] = $row;
        }
    }
    $data_json = json_encode($my_array);
    print_r($data_json);
}
?>
