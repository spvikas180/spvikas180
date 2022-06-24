<?php

include_once"../../control/config.php";
$id = $_POST['id'];

$data = "SELECT *,date_format(company.date, '%b %e %Y') as formatted_date, company.date as ldate, company.status as lstatus FROM company INNER JOIN industry ON industry.id = company.industryId WHERE company.industryId = '$id'";
$data = queryRun($data, $debug = 3);

//$data = dbAction('company', $operation = 4, $from_data = "", " where listId = $id");
$my_array = array();
if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        $my_array[] = $row;
    }
}
$data_json = json_encode($my_array);
print_r($data_json);
?>
