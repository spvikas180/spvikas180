<?php

header('Content-Type: application/json');
include_once"../admin/control/config.php";
//$data = dbAction('listing', $operation = 4);
//$data = "SELECT companyName FROM `listing` UNION SELECT catName  FROM `category`";
//$result = dbAction('listing', $operation = 4, $from_data = "", ' where status = 1');

$data = "SELECT website FROM `listing` UNION SELECT catName  FROM `category`";
$result = queryRun($data, $debug = 3);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $countryResult[] = $row["website"];
    }
    echo json_encode($countryResult);
}
?>
