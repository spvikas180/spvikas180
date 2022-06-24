<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);

$catSlug = UrlClean($catName);
$catName = addslashes(trim($catName));
//$catDesc = addslashes(trim($catDesc));
$catTitle = addslashes(trim($catTitle));
$catMetaDesc = addslashes(trim($catMetaDesc));
//$catMetaKey = addslashes(trim($catMetaKey));

if (isset($_POST['add_category'])) {
    if (isset($catName)) {
        $data = dbAction('category', $operation = 4, $from_data = "", " where catName = '$catName'");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"' . $catName . ' allready exist!!"}';
            exit();
        }
    }
    $from_data = array(
        "catName" => $catName,
//        "catDesc" => $catDesc,
        "catStatus" => $catStatus,
        "catTitle" => $catTitle,
        "catMetaDesc" => $catMetaDesc,
//        "catMetaKey" => $catMetaKey,
        "catSlug" => $catSlug,
//        "catId" => $catId,
    );
    $data = dbAction('category', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"New category added successfully.","page_url":"category"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['add_sub_category'])) {
    if (isset($catName)) {
        $data = dbAction('category', $operation = 4, $from_data = "", " where catName = '$catName' AND catId = '$catId'");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"' . $catName . ' allready exist!!"}';
            exit();
        }
    }
    $from_data = array(
        "catName" => $catName,
//        "catDesc" => $catDesc,
        "catStatus" => $catStatus,
        "catTitle" => $catTitle,
        "catMetaDesc" => $catMetaDesc,
//        "catMetaKey" => $catMetaKey,
        "catSlug" => $catSlug,
        "catId" => $catId,
    );
    $data = dbAction('category', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"New Sub Category Added Successfully!","page_url":"category"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    $id = $_POST['id'];
    $from_data = array(
        "catName" => $catName,
//        "catDesc" => $catDesc,
        "catStatus" => $catStatus,
        "catTitle" => $catTitle,
        "catMetaDesc" => $catMetaDesc,
//        "catMetaKey" => $catMetaKey,
        "catSlug" => $catSlug,
        "catId" => $catId
    );
    $data = dbAction('category', $operation = 2, $from_data, 'id=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Category successfully updated.","page_url":"category"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>