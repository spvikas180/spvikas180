<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}

trim(extract($_POST));
$pageName = addslashes(trim($pageName));

if ($pageSlug != '' || !empty($pageSlug)) {
    $pageSlug = UrlClean($pageSlug);
} else {
    $pageSlug = UrlClean($pageName);
}
$pageDesc = addslashes(trim($pageDesc));
$metaTitle = addslashes(trim($metaTitle));
$metaKey = addslashes(trim($metaKey));
$metaDesc = addslashes(trim($metaDesc));

$from_data = array(
    "pageName" => $pageName,
    "pageDesc" => $pageDesc,
    "pageSlug" => $pageSlug,
    "metaTitle" => $metaTitle,
    "metaKey" => $metaKey,
    "metaDesc" => $metaDesc,
    "status" => $status
);

if (isset($_POST['add_category'])) {
    $data = dbAction('pages', $operation = 4, $from_data, " where pageName = '$pageName'");
    if ($data->num_rows > 0) {
        echo '{"status":"error","msg":"' . $pageName . ' allready exist!!"}';
        exit();
    }
    $data = dbAction('pages', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Page Added Successfully!","page_url":"all-page"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    $id = $_POST['id'];
    $pageSlug = UrlClean($pageSlug);
    $from_data = array(
        "pageName" => $pageName,
        "pageDesc" => $pageDesc,
        "pageSlug" => $pageSlug,
        "metaTitle" => $metaTitle,
        "metaKey" => $metaKey,
        "metaDesc" => $metaDesc,
        "status" => $status
    );
    $data = dbAction('pages', $operation = 2, $from_data, 'id=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Page Update Successfully!","page_url":"all-page"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>
