<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);
if ($industrySlug == '') {
    $industrySlug = UrlClean($industryName);
} else {
    $industrySlug = UrlClean($industrySlug);
}

$industryName = addslashes(trim($industryName));

if (isset($_POST['add_category'])) {

    if (isset($catSlug)) {
        $data = dbAction('industry', $operation = 4, $from_data = "", " where industrySlug = '$industrySlug'");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"(' . $catSlug . ') industry slug allready exist!!"}';
            exit();
        }
    }

    $from_data = array(
        "industryName" => $industryName,
        "industryStatus" => $industryStatus,
        "industrySlug" => $industrySlug,
        "industryId" => $industryId,
    );
    $data = dbAction('industry', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"industry Added Successfully!","page_url":"industry"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    if ($industryId == $id) {
        echo '{"status":"error","msg":"Choose right industry selection (industry and Parent industry same)!!"}';
        exit();
    }
    $id = $_POST['id'];

    $from_data = array(
        "industryName" => $industryName,
        "industryStatus" => $industryStatus,
        "industrySlug" => $industrySlug,
        "industryId" => $industryId,    
    );

    $data = dbAction('industry', $operation = 2, $from_data, 'id=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"industry Update Successfully!","page_url":"industry"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>