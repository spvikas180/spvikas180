<?php

include_once"../../control/config.php";
$id = $_POST['id'];

$data = "SELECT *,date_format(listing.date, '%b %e %Y') as formatted_date,users.email as uemail, listing.date as ldate, listing.status as lstatus FROM listing INNER JOIN users ON listing.userId = users.id INNER JOIN category ON category.id = listing.catId WHERE listing.ListId = '$id'";
$data = queryRun($data, $debug = 3);

//$data = dbAction('listing', $operation = 4, $from_data = "", " where listId = $id");
$my_array = array();
if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        $my_array[] = $row;
    }
}
$data_json = json_encode($my_array);
print_r($data_json);
?>
