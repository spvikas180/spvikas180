<?php

if (isset($_POST['website'])) {
    include_once"../admin/control/config.php";
    extract($_POST);
    $website = trim($_POST['website']);
    $website = str_replace("www.", "", "$website");
    $data = dbAction('listing', $operation = 4, $from_data = "", " where website = '$website' ");
    if ($data->num_rows > 0) {
        echo '{"status":"success","msg":"Domain Find.","domain":"' . $website . '"}';
    } else {
        echo '{"status":"error","msg":"Oops something went wrong!"}';
    }
}
?>
